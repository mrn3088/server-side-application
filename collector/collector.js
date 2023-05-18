// const attributes = ["type", "srcElement", "currentTarget",
//     "clientX", "clientY", "offsetX", "offsetY",
//     "screenX", "screenY", "x", "y", "fromElement",
//     "toElement", "keyCode", "altKey", "ctrlKey",
//     "shiftKey", "button", "which"];

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

// const collectPerformance = function (collectedData) {
//     let performanceRecord = {};
    
//     const observer = new PerformanceObserver((list) => {
//         list.getEntries().forEach((entry) => {
//             collectedData.performance['timing-object'] = entry.toJSON();
//             collectedData.performance['page-start-load'] = collectedData.performance['timing-object'].loadEventStart;
//             collectedData.performance['page-end-load'] = collectedData.performance['timing-object'].loadEventEnd;
//             collectedData.performance['total-load-time'] = collectedData.performance['timing-object'].duration;
//         });
//     });

//     observer.observe({ entryTypes: ["navigation"] });
// };

const collectActivity = function () {
    let idleList = undefined;
    let idle = false;
    let idleStart = 0;
    let idleEnd = undefined;
    let idleTime = undefined;

    const idleCallback = function () {
        idle = true;
        idleStart = new Date().getTime();
    }

    let idleCheck = setTimeout(idleCallback, 2000);;

    const activeCallback = function () {
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
        clearTimeout(idleCheck);
        idleCheck = setTimeout(idleCallback, 2000);
        
    }

    activeCallback(); // initialize

    let moveRecords = {};
    let clickRecords = {};
    let scrollRecords = {};
    let keyRecords = {};


    // mouse
    document.addEventListener('mousemove', function (event) {
        moveRecords[new Date().getTime()] = { 'x': event.clientX, 'y': event.clientY };
        window.localStorage.setItem('moveRecords', JSON.stringify(moveRecords));
        activeCallback();
    });

    // click
    document.addEventListener('click', function (event) {
        clickRecords[new Date().getTime()] = { 'x': event.clientX, 'y': event.clientY };
        window.localStorage.setItem('clickRecords', JSON.stringify(clickRecords));
        activeCallback();
    });

    // scroll
    document.addEventListener('scroll', function (event) {
        scrollRecords[new Date().getTime()] = { 'x': window.scrollX, 'y': window.scrollY };
        window.localStorage.setItem('scrollRecords', JSON.stringify(scrollRecords));
        activeCallback();
    });

    // keydown
    document.addEventListener('keydown', function (event) {
        keyRecords[new Date().getTime()] = event.code;
        window.localStorage.setItem('keyRecords', JSON.stringify(keyRecords));
        activeCallback();
    });

    // keyup
    document.addEventListener('keyup', function (event) {
        keyRecords[new Date().getTime()] = event.code;
        window.localStorage.setItem('keyRecords', JSON.stringify(keyRecords));
        activeCallback();
    });

    // error
    window.addEventListener('error', function (event) {
        collectedData.activity['error'] = event.message;
        activeCallback();
    });
};

const initActivity = function () {
    this.document.localStorage.setItem('time-entered', new Date().toISOString());
    this.document.localStorage.setItem('page', window.location.href);
    collectActivity();
};




document.addEventListener('beforeunload', function () {
    this.document.localStorage.setItem('time-left', new Date().toISOString());
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















// const updateEvent = function (event) {
//     attributes.forEach((attribute) => {
//         collectedData.activity.events[attribute] = event[attribute];
//     });
// };

// const updateEvent = function (event) {
//     const eventData = {};
//     attributes.forEach((attribute) => {
//         eventData[attribute] = event[attribute];
//     });
//     collectedData.activity.events[event.type] = eventData;
// };

// const throttle = (func, delay) => {
//     let lastCall = 0;
//     return function (...args) {
//         const now = new Date().getTime();
//         if (now - lastCall < delay) {
//             return;
//         }
//         lastCall = now;
//         return func(...args);
//     }
// };


// window.addEventListener('load', function () {
//     collectedData = { 'static': {}, 'performance': {}, 'activity': {} };
//     collectStatic(collectedData);
//     collectPerformance(collectedData);
//     initActivity(collectedData);
//     console.log(collectedData);
// });

// window.addEventListener('error', function (event) {
//     collectedData.activity.error = { 'message': event.message, stack: event.error.stack };
//     console.log(collectedData);
// });

// window.addEventListener('mousemove', function (event) {
//     collectedData.activity.mouse = { 'x': event.clientX, 'y': event.clientY };
//     updateEvent(event);
//     // console.log(collectedData);
// });

// window.addEventListener('mousemove', throttle(function (event) {
//     collectedData.activity.mouse = { 'x': event.clientX, 'y': event.clientY };
//     updateEvent(event);
//     // console.log(collectedData);
//     console.log(collectedData.activity.events.type);
//     console.log(collectedData);

// }, 1000)); // Adjust the delay as needed


// document.body.addEventListener('keydown', function (event) {
//     updateEvent(event);
//     console.log(collectedData.activity.events.type);
//     console.log(collectedData);
//     // console.log(collectedData);
// });

// document.body.addEventListener('keyup', function (event) {
//     updateEvent(event);
//     console.log(collectedData.activity.events.type);
//     console.log(collectedData);

//     // console.log(collectedData);
// });

// document.body.addEventListener('click', function (event) {
//     updateEvent(event);
//     console.log(collectedData.activity.events.type);
//     console.log(collectedData);


//     // console.log(collectedData);
// });


