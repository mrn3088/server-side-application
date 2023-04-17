// function clickAlert() {
//     alert("Alert Pressed!");
// }

function clickConfirm() {
    let result = confirm("Do you confirm this?");
    const outputTag = document.getElementById("output_tag");
    outputTag.innerHTML = "The value returned by the confirm method is : " + result;
}

function clickPrompt() {
    let result = prompt("What is your name?");
    const outputTag = document.getElementById("output_tag");
    if (result == null || result == "") {
        outputTag.innerHTML = "User didn't put anything!";
    } else {
        outputTag.innerHTML = "Prompt Result : " + result;
    }
}

// user enter: <b onmouseover="alert('pwned')">Roll me</b>
function clickSaferPrompt() {
    let result = prompt("What is your name?");
    result = DOMPurify.sanitize(result);
    const outputTag = document.getElementById("output_tag");
    if (result == null || result == "") {
        outputTag.innerHTML = "User didn't put anything!";
    } else {
        outputTag.innerHTML = "Prompt Result : " + result;
    }
}

const alertBtn = document.getElementById("alert");
alertBtn.addEventListener("click", () => {
    alert("Alert Pressed!");
});

const confirmBtn = document.getElementById("confirm");
confirmBtn.addEventListener("click", clickConfirm);

const promptBtn = document.getElementById("prompt");
promptBtn.addEventListener("click", clickPrompt);

const saferPromptBtn = document.getElementById("saferPrompt");
saferPromptBtn.addEventListener("click", clickSaferPrompt);