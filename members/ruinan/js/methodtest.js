export function renderJSON(json) {
    const output = document.getElementById("output");
    output.innerHTML = parseJSON(json);
};

export function displayMethod(isXHR) {
    const outputLabel = document.getElementById("output-h");
    if (isXHR) {
        outputLabel.innerHTML = "Output (with XMLHttpRequest)";
    } else {
        outputLabel.innerHTML = "Output (with fetch)";
    }
}

function isObject(aValue) {
    return aValue !== null && typeof aValue === 'object' && !Array.isArray(aValue) ;
}

function parseJSON(json) {
    let table = "<table>";
    for (let key in json) {
        if (isObject(json[key])){
            table += `<tr><td>${key}</td><td>${parseJSON(json[key])}</td></tr>`;
        } else {
            table += `<tr><td>${key}</td><td>${json[key]}</td></tr>`;
        }
    }
    table += "</table>";
    return table;
};

export function form2QueryString() {
    const form = document.getElementById("form");
    console.log( new URLSearchParams(new FormData(form)).toString());
    return new URLSearchParams(new FormData(form)).toString();
}

export function getDate() {
    return new Date().toLocaleString();
};

export function form2JSON() {
    const theForm = {
        id: document.getElementById("id").value,
        article_name: document.getElementById("article_name").value,
        article_body: document.getElementById("article_body").value,
        date: getDate()
    };
    return JSON.stringify(theForm);
};

export function getID() {
    return document.getElementById("id").value;
}