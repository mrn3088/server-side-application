
export function clickAlert() {
    let outputTag = document.getElementById("permOutput");
    outputTag.textContent = "";
    let temp = document.getElementsByTagName("template")[0];
    const cloneTemp = temp.content.cloneNode(true);
    // dialog
    let cloneDialog = cloneTemp.getElementById("myDialog");
    cloneDialog.innerHTML = "Alert pressed";
    // new line
    cloneDialog.appendChild(document.createElement("br"));
    // button
    let okBtn = document.createElement('button');
    okBtn.innerHTML = "OK";
    cloneDialog.appendChild(okBtn);
    okBtn.addEventListener("click", () => {
        cloneDialog.close();
    });
    // add to body
    document.body.appendChild(cloneTemp);
}

export function clickConfirm() {
    // clone temp tag
    let temp = document.getElementsByTagName("template")[0];
    const cloneTemp = temp.content.cloneNode(true);
    // dialog
    let cloneDialog = cloneTemp.getElementById("myDialog");
    cloneDialog.innerHTML = "Do you confirm?";
    // create new line
    cloneDialog.appendChild(document.createElement("br"));
    let userFeedback = true;
    // cancel button
    let cancelBtn = document.createElement('button');
    cancelBtn.innerHTML = "Cancel";
    cloneDialog.appendChild(cancelBtn);
    cancelBtn.addEventListener("click", () => {
        let outputTag = document.getElementById("permOutput");
        outputTag.textContent = "Confirm result: false";
        cloneDialog.remove();
    });
    // ok button
    let okBtn = document.createElement('button');
    okBtn.innerHTML = "OK";
    cloneDialog.appendChild(okBtn);
    okBtn.addEventListener("click", () => {
        let outputTag = document.getElementById("permOutput");
        outputTag.textContent = "Confirm result: true";
        cloneDialog.remove();
    });
    
    // add to body
    document.body.appendChild(cloneTemp);
    return userFeedback;
}

// user enter: <b onmouseover="alert('pwned')">Roll me</b>
export function clickSaferPrompt() {
    // clone temp tag
    let temp = document.getElementsByTagName("template")[0];
    const cloneTemp = temp.content.cloneNode(true);
    // dialog
    let cloneDialog = cloneTemp.getElementById("myDialog");
    cloneDialog.innerHTML = "What is your name?";
    // create new line
    cloneDialog.appendChild(document.createElement("br"));
    // user input
    let cloneInput = document.createElement("input");
    cloneInput.name = "userInput";
    cloneInput.type = "text";
    cloneDialog.appendChild(cloneInput);
    // create new line
    cloneDialog.appendChild(document.createElement("br"));
    // cancel button
    let cancelBtn = document.createElement('button');
    cancelBtn.innerHTML = "Cancel";
    cloneDialog.appendChild(cancelBtn);
    cancelBtn.addEventListener("click", () => {
        cloneDialog.remove();
        let outputTag = document.getElementById("permOutput");
        outputTag.textContent = "User didn't put anything!";
    });
    // ok button
    let okBtn = document.createElement('button');
    okBtn.innerHTML = "OK";
    cloneDialog.appendChild(okBtn);
    okBtn.addEventListener("click", () => {
        cloneDialog.remove();
        let cleanValue = DOMPurify.sanitize(cloneInput.value);
        let outputTag = document.getElementById("permOutput");
        
        if (cleanValue == "" || cleanValue == null) {
            outputTag.textContent = "User didn't put anything!";  
        } else {
            outputTag.textContent = "Prompt result: " + cleanValue;  
        }
    });
    
    // add to body
    document.body.appendChild(cloneTemp);
}