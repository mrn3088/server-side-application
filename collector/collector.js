console.log('collector.js loaded');

function formatISODateToMySQLDateTime(isoDate) {
    let dt = new Date(isoDate);

    let year = dt.getFullYear();
    let month = String(dt.getMonth() + 1).padStart(2, '0');
    let day = String(dt.getDate()).padStart(2, '0');
    let hours = String(dt.getUTCHours()).padStart(2, '0');
    let minutes = String(dt.getUTCMinutes()).padStart(2, '0');
    let seconds = String(dt.getUTCSeconds()).padStart(2, '0');

    return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
}


// Function to set a cookie
function setCookie(name, value, days) {
    let date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    let expires = "; expires=" + date.toUTCString();
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Function to get a cookie
function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Function to generate a UUID
function uuidv4() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        let r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
    });
}

// Set userId cookie if not present
if (!getCookie('userId')) {
    console.log('userId cookie not found. Generating a new one.');
    setCookie('userId', uuidv4(), 365);  // SessionId expires in 1 year
}

// Initialize a new session with unique sessionId
if (!getCookie('sessionId')) {
    console.log('sessionId cookie not found. Generating a new one.');
    setCookie('sessionId', uuidv4(), 1);  // SessionId expires in 1 day
}

let sessionId = getCookie('sessionId');

let sessionRecord = {};
sessionRecord['userId'] = getCookie('userId');
sessionRecord['sessionId'] = sessionId;
sessionRecord['timeStart'] = formatISODateToMySQLDateTime(new Date().toISOString());

localStorage.setItem('sessionRecord', JSON.stringify(sessionRecord));

const collectStatic = function () {
    let staticRecord = {};
    staticRecord['userAgent'] = navigator.userAgent;
    staticRecord['language'] = navigator.language;
    staticRecord['cookieEnabled'] = navigator.cookieEnabled;
    staticRecord['jsEnabled'] = true;


    let img = document.createElement('img');
    img.src = './images/testImage.png';
    document.body.appendChild(img);
    staticRecord['imageEnabled'] = !img.ariaDisabled;
    document.body.removeChild(img);

    staticRecord['cssEnabled'] = false;
    let tmp = document.createElement('div');
    tmp.style.display = 'none';
    document.body.appendChild(tmp);
    staticRecord['cssEnabled'] = (window.getComputedStyle(tmp).display === 'none');
    document.body.removeChild(tmp);

    staticRecord['screenWidth'] = window.screen.width;
    staticRecord['screenHeight'] = window.screen.height;
    staticRecord['windowWidth'] = window.innerWidth;
    staticRecord['windowHeight'] = window.innerHeight;

    if (navigator.connection) {
        staticRecord['connectionType'] = navigator.connection.effectiveType;
    } else {
        staticRecord['connectionType'] = 'unknown';
    }
    staticRecord['id'] = getCookie('sessionId'); // add id field
    localStorage.setItem('staticRecord', JSON.stringify(staticRecord));
};


const collectActivity = function () {
    let activityRecord = {
        idleList: [],
        moveRecords: {},
        clickRecords: {},
        scrollRecords: {},
        keyRecords: {},
        timeEntered: formatISODateToMySQLDateTime(window.localStorage.getItem('timeEntered')), // time when the user enters the page
        page: window.localStorage.getItem('page') // URL of the page
    };

    let idleStart = Date.now();

    const activeCallback = function () {
        const now = Date.now();
        let idleTime = now - idleStart;
        if (idleTime >= 2000) {
            console.log('idle');
            let idleList = localStorage.getItem('idleList');
            idleList = idleList ? JSON.parse(idleList) : [];
            idleList.push([idleTime, idleStart, now]);
            localStorage.setItem('idleList', JSON.stringify(idleList));
        }
        idleStart = now;
    }

    activeCallback(); // initialize

    let lastRecordTime = Date.now();
    const recordInterval = 100; // 100 ms

    // mouse
    document.addEventListener('mousemove', function (event) {
        const now = Date.now();
        activeCallback();

        if (now - lastRecordTime > recordInterval) {
            activityRecord.moveRecords[Date.now()] = { 'x': event.clientX, 'y': event.clientY };
            console.log('move');
            lastRecordTime = now;
        }
    });

    // click
    document.addEventListener('click', function (event) {
        activityRecord.clickRecords[Date.now()] = { 'x': event.clientX, 'y': event.clientY };
        activeCallback();
        console.log('click');
    });

    // scroll
    document.addEventListener('scroll', function (event) {
        activityRecord.scrollRecords[Date.now()] = { 'x': window.scrollX, 'y': window.scrollY };
        activeCallback();
        console.log('scroll');
    });

    // keydown
    document.addEventListener('keydown', function (event) {
        activityRecord.keyRecords[Date.now()] = event.code;
        activeCallback();
        console.log('keydown');
    });

    // keyup
    document.addEventListener('keyup', function (event) {
        activityRecord.keyRecords[Date.now()] = event.code;
        activeCallback();
        console.log('keyup');
    });

    // error
    window.addEventListener('error', function (event) {
        activityRecord['error'] = event.message;
        activeCallback();
        console.log('error');
    });

    // Store activityRecord to localStorage
    localStorage.setItem('activityRecord', JSON.stringify(activityRecord));
};


const initActivity = function () {
    this.window.localStorage.setItem('timeEntered', new Date().toISOString());
    this.window.localStorage.setItem('page', window.location.href);
    collectActivity();
};


document.addEventListener('beforeunload', function () {
    let activityRecord = JSON.parse(localStorage.getItem('activityRecord'));
    activityRecord['timeLeft'] = new Date().toISOString(); // time when the user leaves the page
    activityRecord['userId'] = getCookie('sessionId'); // add id field
    localStorage.setItem('activityRecord', JSON.stringify(activityRecord));

    // Send activity data
    let headers = {
        type: 'application/json'
    };
    let blob = new Blob([JSON.stringify(activityRecord)], headers);
    navigator.sendBeacon('/api/activity', blob);

    // Send static data
    let staticRecord = JSON.parse(localStorage.getItem('staticRecord'));
    blob = new Blob([JSON.stringify(staticRecord)], headers);
    navigator.sendBeacon('/api/static', blob);

    // Send performance data
    let performanceRecord = JSON.parse(localStorage.getItem('performanceRecord'));
    blob = new Blob([JSON.stringify(performanceRecord)], headers);
    navigator.sendBeacon('/api/performance', blob);
});




window.addEventListener('load', function () {
    let performanceRecord = {};
    console.log('load');
    let timingObject = performance.getEntriesByType("navigation")[0];
    performanceRecord['timingObject'] = timingObject;
    performanceRecord['pageStartLoad'] = timingObject.domContentLoadedEventStart;
    performanceRecord['pageEndLoad'] = timingObject.domComplete;
    performanceRecord['totalLoadTime'] = timingObject.domComplete - timingObject.domContentLoadedEventStart;
    performanceRecord['id'] = getCookie('sessionId'); // add id field

    this.window.localStorage.setItem('performanceRecord', JSON.stringify(performanceRecord));
    collectStatic();
    initActivity();
});

function sendData() {
    console.log('sendData');
    let activityRecord = JSON.parse(localStorage.getItem('activityRecord'));
    activityRecord['timeLeft'] = formatISODateToMySQLDateTime(new Date().toISOString()); // time when the user leaves the page
    activityRecord['userId'] = getCookie('sessionId'); // add id field
    activityRecord['sessionId'] = getCookie('userId'); // seems odd, but this is how it is
    activityRecord['idleList'] = localStorage.getItem('idleList');
    localStorage.setItem('activityRecord', JSON.stringify(activityRecord));
    console.log("activityRecord['idleList']");
    console.log(activityRecord['idleList']);

    let staticRecord = JSON.parse(localStorage.getItem('staticRecord'));

    let performanceRecord = JSON.parse(localStorage.getItem('performanceRecord'));

    // check if the user has already been recorded
    axios.get(`/api/static/exists/${staticRecord.id}`)
        .then(response => {
            if (response.data.exists) {
                // if the user has already been recorded, use PUT to update the record
                axios.put(`/api/static/${staticRecord.id}`, staticRecord)
                    .then(response => {
                        console.log('Record updated successfully');
                    })
                    .catch(error => {
                        console.error('Error updating record:', error);
                    });
            } else {
                // if the user has not been recorded, use POST to create a new record
                axios.post(`/api/static`, staticRecord)
                    .then(response => {
                        console.log('Record created successfully');
                    })
                    .catch(error => {
                        console.error('Error creating record:', error);
                    });
            }
        })
        .catch(error => {
            console.error('Error checking if record exists:', error);
        });

    // check if the user has already been recorded
    axios.get(`/api/performance/exists/${performanceRecord.id}`)
        .then(response => {
            if (response.data.exists) {
                // if the user has already been recorded, use PUT to update the record
                axios.put(`/api/performance/${performanceRecord.id}`, performanceRecord)
                    .then(response => {
                        console.log('Record updated successfully');
                    })
                    .catch(error => {
                        console.error('Error updating record:', error);
                    });
            } else {
                // if the user has not been recorded, use POST to create a new record
                axios.post(`/api/performance`, performanceRecord)
                    .then(response => {
                        console.log('Record created successfully');
                    })
                    .catch(error => {
                        console.error('Error creating record:', error);
                    });
            }
        })
        .catch(error => {
            console.error('Error checking if record exists:', error);
        });



    // check if the user has already been recorded
    axios.get(`/api/activity/exists/${activityRecord.userId}`)
        .then(response => {
            if (response.data.exists) {
                // if the user has already been recorded, use PUT to update the record
                axios.put(`/api/activity/${activityRecord.userId}`, activityRecord)
                    .then(response => {
                        console.log('Record updated successfully');
                    })
                    .catch(error => {
                        console.error('Error updating record:', error);
                    });
            } else {
                // if the user has not been recorded, use POST to create a new record
                
                axios.post(`/api/activity`, activityRecord)
                    .then(response => {
                        console.log('Record created successfully');
                    })
                    .catch(error => {
                        console.error('Error creating record:', error);
                    });
            }
        })
        .catch(error => {
            console.error('Error checking if record exists:', error);
        });
}

sendData();
setInterval(sendData, 60000);