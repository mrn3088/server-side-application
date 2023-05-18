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
    let idle = false;
    let idleStart = 0;
    let idleEnd = undefined;
    let idleTime = undefined;

    const idleCallback = function () {
        idle = true;
        idleStart = lastActivityTime;
    }

    let idleCheck = setTimeout(idleCallback, 2000);

    const activeCallback = function () {
        const now = Date.now();
        if (idle) {
            idleEnd = new Date().getTime();
            idleTime = idleEnd - idleStart;
            idleList = [idleTime, idleStart, idleEnd];
            if (window.localStorage.getItem('idleList') !== null) {
                let tmp = JSON.parse(window.localStorage.getItem('idleList'));
                tmp.push(idleList);
                window.localStorage.setItem('idleList', JSON.stringify(tmp));
            } else {
                window.localStorage.setItem('idleList', JSON.stringify([idleList]));
            }
            idle = false;
        }
        idleStart = now;
        clearTimeout(idleCheck);
        idleCheck = setTimeout(idleCallback, 2000);
    }

    activeCallback(); // initialize

    let moveRecords = {};
    let clickRecords = {};
    let scrollRecords = {};
    let keyRecords = {};
    let lastRecordTime = Date.now();
    let lastActivityTime = Date.now();
    const recordInterval = 100; // 100 ms


    // mouse
    document.addEventListener('mousemove', function (event) {
        const now = Date.now();
        lastActivityTime = now;
        if (now - lastRecordTime > recordInterval) {
            moveRecords[new Date().getTime()] = { 'x': event.clientX, 'y': event.clientY };
            window.localStorage.setItem('moveRecords', JSON.stringify(moveRecords));
            activeCallback();
            console.log('move');
            lastRecordTime = now;
        }
    });

    // click
    document.addEventListener('click', function (event) {
        clickRecords[new Date().getTime()] = { 'x': event.clientX, 'y': event.clientY };
        window.localStorage.setItem('clickRecords', JSON.stringify(clickRecords));
        lastActivityTime = Date.now();
        activeCallback();
        console.log('click');
    });

    // scroll
    document.addEventListener('scroll', function (event) {
        scrollRecords[new Date().getTime()] = { 'x': window.scrollX, 'y': window.scrollY };
        window.localStorage.setItem('scrollRecords', JSON.stringify(scrollRecords));
        lastActivityTime = Date.now();
        activeCallback();
        console.log('scroll');
    });

    // keydown
    document.addEventListener('keydown', function (event) {
        keyRecords[new Date().getTime()] = event.code;
        window.localStorage.setItem('keyRecords', JSON.stringify(keyRecords));
        lastActivityTime = Date.now();
        activeCallback();
        console.log('keydown');
    });

    // keyup
    document.addEventListener('keyup', function (event) {
        keyRecords[new Date().getTime()] = event.code;
        window.localStorage.setItem('keyRecords', JSON.stringify(keyRecords));
        lastActivityTime = Date.now();
        activeCallback();
        console.log('keyup');
    });

    // error
    window.addEventListener('error', function (event) {
        collectedData.activity['error'] = event.message;
        lastActivityTime = Date.now();
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