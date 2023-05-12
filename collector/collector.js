let collectedData;
const attributes = ["type", "srcElement", "currentTarget",
    "clientX", "clientY", "offsetX", "offsetY",
    "screenX", "screenY", "x", "y", "fromElement",
    "toElement", "keyCode", "altKey", "ctrlKey",
    "shiftKey", "button", "which"];

const collectStatic = function (collectedData) {
    collectedData.static['userAgent'] = navigator.userAgent;
    collectedData.static['language'] = navigator.language;
    collectedData.static['cookie'] = navigator.cookieEnabled;
    collectedData.static['js-enabled'] = true;

    collectedData.static['image-enabled'] = false;
    let img = new Image();
    img.onload = function () {
        collectedData.static['image-enabled'] = true;
    };
    img.src = './images/testImage.png';

    collectedData.static['css-enabled'] = false;
    let tmp = document.createElement('div');
    tmp.style.display = 'none';
    document.body.appendChild(tmp);
    collectedData.static['css-enabled'] = (window.getComputedStyle(tmp).display === 'none');
    document.body.removeChild(tmp);

    collectedData.static['screen-width'] = window.screen.width;
    collectedData.static['screen-height'] = window.screen.height;
    collectedData.static['window-width'] = window.innerWidth;
    collectedData.static['window-height'] = window.innerHeight;

    if (navigator.connection) {
        collectedData.static['connection-type'] = navigator.connection.effectiveType;
    } else {
        collectedData.static['connection-type'] = 'unknown';
    }
};

const collectPerformance = function (collectedData) {
    const observer = new PerformanceObserver((list) => {
        list.getEntries().forEach((entry) => {
            collectedData.performance['timing-object'] = entry.toJSON();
            collectedData.performance['page-start-load'] = collectedData.performance['timing-object'].loadEventStart;
            collectedData.performance['page-end-load'] = collectedData.performance['timing-object'].loadEventEnd;
            collectedData.performance['total-load-time'] = collectedData.performance['timing-object'].duration;
        });
    });

    observer.observe({ entryTypes: ["navigation"] });

};

const initActivity = function (collectedData) {
    collectedData.activity['events'] = {};
    attributes.forEach((attribute) => {
        collectedData.activity.events[attribute] = undefined;
    });
    collectedData.activity['error'] = undefined;
    collectedData.activity['mouse'] = {};
    collectedData.activity['idle'] = { 'time': undefined, 'start': undefined, 'end': undefined };
    collectedData.activity['time-entered'] = new Date().toISOString();
    collectedData.activity['time-left'] = undefined;
    collectedData.activity['page'] = window.location.href;
};

const updateEvent = function (event) {
    attributes.forEach((attribute) => {
        collectedData.activity.events[attribute] = event[attribute];
    });
};

const throttle = (func, delay) => {
    let lastCall = 0;
    return function(...args) {
        const now = new Date().getTime();
        if (now - lastCall < delay) {
            return;
        }
        lastCall = now;
        return func(...args);
    }
};


window.addEventListener('load', function () {
    collectedData = { 'static': {}, 'performance': {}, 'activity': {} };
    collectStatic(collectedData);
    collectPerformance(collectedData);
    initActivity(collectedData);
    console.log(collectedData);
});

window.addEventListener('error', function (event) {
    collectedData.activity.error = { 'message': event.message, stack: event.error.stack };
    console.log(collectedData);
});

// window.addEventListener('mousemove', function (event) {
//     collectedData.activity.mouse = { 'x': event.clientX, 'y': event.clientY };
//     updateEvent(event);
//     // console.log(collectedData);
// });

window.addEventListener('mousemove', throttle(function (event) {
    collectedData.activity.mouse = { 'x': event.clientX, 'y': event.clientY };
    updateEvent(event);
    // console.log(collectedData);
    console.log(collectedData.activity.events.type);
}, 1000)); // Adjust the delay as needed


document.body.addEventListener('keydown', function (event) {
    updateEvent(event);
    console.log(collectedData.activity.events.type);

    // console.log(collectedData);
});

document.body.addEventListener('keyup', function (event) {
    updateEvent(event);
    console.log(collectedData.activity.events.type);

    // console.log(collectedData);
});

document.body.addEventListener('click', function (event) {  
    updateEvent(event);
    console.log(collectedData.activity.events.type);

    // console.log(collectedData);
});

window.addEventListener('unload', function () {
    collectedData.activity['time-left'] = new Date().toISOString();
    console.log(collectedData);
});



