const collectStatic = function (collectedData) {
    collectedData.static['userAgent'] = navigator.userAgent;
    collectedData.static['language'] = navigator.language;
    collectedData.static['cookie'] = navigator.cookieEnabled;
    collectedData.static['js-enabled'] = true;

    collectedData['image-enabled'] = false;
    let img = new Image();
    img.onload = function () {
        collectedData['image-enabled'] = true;
    };
    img.src = './images/testImage.png';

    collectedData['css-enabled'] = false;
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

window.addEventListener('load', function () {
    let collectedData = { 'static': {}, 'performance': {}, 'activity': {} };
    collectStatic(collectedData);
    collectPerformance(collectedData);
    console.log(collectedData);
});

