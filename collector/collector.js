const collectStatic = function () {
    let staticRecord = {};
    staticRecord['userAgent'] = navigator.userAgent;
    staticRecord['language'] = navigator.language;
    staticRecord['cookie'] = navigator.cookieEnabled;
    staticRecord['js-enabled'] = true;


    let img = document.createElement('img');
    img.src = './images/testImage.png';
    document.body.appendChild(img);
    staticRecord['image-enabled'] = !img.ariaDisabled;
    document.body.removeChild(img);

    staticRecord['css-enabled'] = false;
    let tmp = document.createElement('div');
    tmp.style.display = 'none';
    document.body.appendChild(tmp);
    staticRecord['css-enabled'] = (window.getComputedStyle(tmp).display === 'none');
    document.body.removeChild(tmp);

    staticRecord['screen-width'] = window.screen.width;
    staticRecord['screen-height'] = window.screen.height;
    staticRecord['window-width'] = window.innerWidth;
    staticRecord['window-height'] = window.innerHeight;

    if (navigator.connection) {
        staticRecord['connection-type'] = navigator.connection.effectiveType;
    } else {
        staticRecord['connection-type'] = 'unknown';
    }
    localStorage.setItem('staticRecord', JSON.stringify(staticRecord));
};


const collectActivity = function () {
    let idleList = undefined;
    let idleStart = 0;


    const activeCallback = function () {
        const now = Date.now();
        idleTime = now - idleStart;
        if (idleTime >= 2000) {
            idleList = [idleTime, idleStart, now];
            if (window.localStorage.getItem('idleList') !== null) {
                let tmp = JSON.parse(window.localStorage.getItem('idleList'));
                tmp.push(idleList);
                window.localStorage.setItem('idleList', JSON.stringify(tmp));
            } else {
                window.localStorage.setItem('idleList', JSON.stringify([idleList]));
            }
        }
        idleStart = now;
    }

    activeCallback(); // initialize

    let moveRecords = {};
    let clickRecords = {};
    let scrollRecords = {};
    let keyRecords = {};
    let lastRecordTime = Date.now();
    const recordInterval = 100; // 100 ms


    // mouse
    document.addEventListener('mousemove', function (event) {
        const now = Date.now();
        activeCallback();

        if (now - lastRecordTime > recordInterval) {
            moveRecords[Date.now()] = { 'x': event.clientX, 'y': event.clientY };
            window.localStorage.setItem('moveRecords', JSON.stringify(moveRecords));
            console.log('move');
            lastRecordTime = now;
        }
    });

    // click
    document.addEventListener('click', function (event) {
        clickRecords[Date.now()] = { 'x': event.clientX, 'y': event.clientY };
        window.localStorage.setItem('clickRecords', JSON.stringify(clickRecords));
        activeCallback();
        console.log('click');
    });

    // scroll
    document.addEventListener('scroll', function (event) {
        scrollRecords[Date.now()] = { 'x': window.scrollX, 'y': window.scrollY };
        window.localStorage.setItem('scrollRecords', JSON.stringify(scrollRecords));
        activeCallback();
        console.log('scroll');
    });

    // keydown
    document.addEventListener('keydown', function (event) {
        keyRecords[Date.now()] = event.code;
        window.localStorage.setItem('keyRecords', JSON.stringify(keyRecords));
        activeCallback();
        console.log('keydown');
    });

    // keyup
    document.addEventListener('keyup', function (event) {
        keyRecords[Date.now()] = event.code;
        window.localStorage.setItem('keyRecords', JSON.stringify(keyRecords));
        activeCallback();
        console.log('keyup');
    });

    // error
    window.addEventListener('error', function (event) {
        collectedData.activity['error'] = event.message;
        activeCallback();
        console.log('error');
    });
};

const initActivity = function () {
    this.window.localStorage.setItem('time-entered', new Date().toISOString());
    this.window.localStorage.setItem('page', window.location.href);
    collectActivity();
};




document.addEventListener('beforeunload', function () {
    this.window.localStorage.setItem('time-left', new Date().toISOString());
    // send data
});


window.addEventListener('load', function () {
    let performanceRecord = {};
    console.log('load');
    let timingObject = performance.getEntriesByType("navigation")[0];
    performanceRecord['timing-object'] = timingObject;
    performanceRecord['page-start-load'] = timingObject.domContentLoadedEventStart;
    performanceRecord['page-end-load'] = timingObject.domComplete;
    performanceRecord['total-load-time'] = timingObject.domComplete - timingObject.domContentLoadedEventStart;

    this.window.localStorage.setItem('performanceRecord', JSON.stringify(performanceRecord));
    collectStatic();
    initActivity();
});