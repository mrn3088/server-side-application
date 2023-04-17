const XML_or_fetch = document.getElementById("XMLHttpRequest");

const output = document.getElementById("response");

// post
export function postClick() {
    clearOutput();

    let params = getFormValues();
    let url = "https://httpbin.org/post";
    if (XML_or_fetch.checked) {
        // XMLHttpRequest
        const xhttp = new XMLHttpRequest();
        xhttp.open('POST', url, true);

        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                let response_obj = JSON.parse(this.responseText);
                // console.log(this.responseText);
                formatResponse(response_obj);
            }
        };
        xhttp.setRequestHeader('Content-type', 'application/json');
        xhttp.send(params);
    } else {
        // fetch
        fetchPost(url, { params }).then((data) => {
            formatResponse(data);
        });
    }

}

// get
export function getClick() {
    // clear output
    clearOutput();

    let params = getFormValues();
    let url = "https://httpbin.org/get?" + params;
    if (XML_or_fetch.checked) {
        const xhttp = new XMLHttpRequest();
        xhttp.open('GET', url, true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                let response_obj = JSON.parse(xhttp.responseText);
                formatResponse(response_obj);
            }
        };
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded', true);
        xhttp.send();
    } else {
        // fetch
        fetchGet(url, { params }, "GET").then((data) => {
            formatResponse(data);
        });
    }
    
}

// put
export function putClick() {
    // clear output
    clearOutput();
    let params = getFormValues();
    let url = "https://httpbin.org/put?" + params;

    if (XML_or_fetch.checked) {
        const xhttp = new XMLHttpRequest();
        xhttp.open('PUT', url, true);

        xhttp.onreadystatechange = function() {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                let response_obj = JSON.parse(xhttp.responseText);
                // console.log(this.responseText);
                formatResponse(response_obj);
            }
        };
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded', true);
        xhttp.send();
    } else {
        fetchGet(url, { params }, "PUT").then((data) => {
            // console.log(data); // JSON data parsed by `data.json()` call
            formatResponse(data);
        });
    }
    
}

// delete
export function deleteClick() {
    // clear output
    clearOutput();
    let params = getFormValues();
    let url = "https://httpbin.org/delete?" + params;

    if (XML_or_fetch.checked) {
        const xhttp = new XMLHttpRequest();
        xhttp.open('DELETE', url, true);
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState === 4 && xhttp.status === 200) {
                let response_obj = JSON.parse(xhttp.responseText);
                // console.log(this.responseText);
                formatResponse(response_obj);
            }
        };
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded', true);
        xhttp.send();
    } else {
        fetchGet(url, { params }, "DELETE").then((data) => {
            // console.log(data); // JSON data parsed by `data.json()` call
            formatResponse(data);
        });
    }
    
}

function clearOutput() {
    output.innerHTML = "";
}

function getFormValues() {
    let output = "";
    const form = document.getElementById("form_");
    const id = document.getElementById("record_id");
    const name = document.getElementById("article_name");
    const body = document.getElementById("article_body");
    const date = document.getElementById("date");
    const cur_date = new Date();
    output = `${id.name}=${id.value}&${name.name}=${name.value}&${body.name}=${body.value}&${date.name}=${cur_date}`;
    return output;
}

function formatResponse(response_obj) {
    let div = document.createElement("div");
    let obj_entries = Object.entries(response_obj);
    obj_entries.forEach(entry => {
        let obj_name = entry[0];
        let obj_value = entry[1];
        // h2
        let entry_h2 = document.createElement("h2");
        entry_h2.innerText = obj_name;
        div.appendChild(entry_h2);
        // obj_table
        let obj_table = document.createElement("table");
        // if obj is object
        if (isObj(obj_value)) {
            let obj = Object.entries(obj_value);
            obj.forEach((arg) => {
                let tr = document.createElement("tr");
                // key
                let key = arg[0];
                let th_key = document.createElement("th");
                th_key.innerText = key;
                tr.appendChild(th_key);
                // value
                let value = arg[1];
                let th_value = document.createElement("th");
                th_value.innerText = value;
                tr.appendChild(th_value);
                obj_table.appendChild(tr);
            });
        } 
        // if obj is not object
        else {
            let tr = document.createElement("tr");
            // key
            let key = obj_name;
            let th_key = document.createElement("th");
            th_key.innerText = key;
            tr.appendChild(th_key);
            // value
            let value = obj_value;
            let th_value = document.createElement("th");
            th_value.innerText = value;
            tr.appendChild(th_value);

            obj_table.appendChild(tr);
        }
        div.appendChild(obj_table);
    });
    output.appendChild(div);
}

function isObj(A) {
    if( (typeof A === "object" || typeof A === 'function') && (A !== null) ) {
        return true;
    } else {
        return false;
    }
}

// POST method implementation:
async function fetchPost(url = "", data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
      method: "POST", // *GET, POST, PUT, DELETE, etc.
      headers: {
        "Content-Type": "application/json",
      },
      redirect: "follow", // manual, *follow, error
      referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
      body: JSON.stringify(data), // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

// Get method implementation:
async function fetchGet(url = "", data = {}, method_) {
    // Default options are marked with *
    const response = await fetch(url, {
      method: method_, // *GET, POST, PUT, DELETE, etc.
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      redirect: "follow", // manual, *follow, error
      referrerPolicy: "no-referrer", // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
    });
    return response.json(); // parses JSON response into native JavaScript objects
}