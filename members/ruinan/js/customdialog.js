function showConfirm(callback) {
    const theDialog = createOkCancelDialog('confirm');
    const theContent = theDialog.querySelector('.content');
    theContent.textContent = 'Do you confirm this?';
    theOkButton = theDialog.querySelector('.ok-button');
    const theCancelButton = theDialog.querySelector('.cancel-button');
    theOkButton.addEventListener('click', () => {
        callback(true);
        theDialog.close();
    });

    theCancelButton.addEventListener('click', () => {
        callback(false);
        theDialog.close();
    });
    theDialog.showModal();
};

function showPrompt(callback) {
    const theDialog = createOkCancelDialog('prompt', true);
    const theContent = theDialog.querySelector('.content');

    theContent.textContent = 'What is your name?';
    const theOkButton = theDialog.querySelector('.ok-button');
    const theCancelButton = theDialog.querySelector('.cancel-button');
    const theInput = theDialog.querySelector('input');

    theOkButton.addEventListener('click', () => {
        const theValue = DOMPurify.sanitize(theInput.value);
        callback(theValue);
        theDialog.close();
    });


    theCancelButton.addEventListener('click', () => {
        callback(null);
        theDialog.close();
    });

    theDialog.showModal();
};


function showAlert() {
    const theDialog = createAlertDialog();
    theDialog.showModal();
};

function createAlertDialog() {
    const theDialog = document.createElement('dialog');
    theDialog.classList.add('alert');

    const theContent = document.createElement('div');
    theContent.classList.add('content');
    theContent.textContent = 'This is an alert.';

    const theButtonContainer = document.createElement('div');
    theButtonContainer.classList.add('button-container');
    theButtonContainer.style.display = 'flex';
    theButtonContainer.style.justifyContent = 'center';

    const theOkButton = document.createElement('button');
    theOkButton.classList.add('ok-button');
    theOkButton.textContent = 'OK';

    theDialog.appendChild(theContent);
    theDialog.appendChild(theButtonContainer);
    theButtonContainer.appendChild(theOkButton);
    document.body.appendChild(theDialog);

    theOkButton.addEventListener('click', () => {
        theDialog.close();
    });
    return theDialog;
};

function createOkCancelDialog(aType, addInput = false) {
    const theDialog = document.createElement('dialog');
    theDialog.classList.add(aType);

    const theContent = document.createElement('div');
    theContent.classList.add('content');

    const theButtonContainer = document.createElement('div');
    theButtonContainer.classList.add('button-container');
    theButtonContainer.style.display = 'flex';
    theButtonContainer.style.justifyContent = 'space-around';
    theButtonContainer.style.alignItems = 'center';


    const theOkButton = document.createElement('button');
    theOkButton.classList.add('ok-button');
    theOkButton.textContent = 'OK';

    const theCancelButton = document.createElement('button');
    theCancelButton.classList.add('cancel-button');
    theCancelButton.textContent = 'Cancel';

    theDialog.appendChild(theContent);

    if (addInput) {
        const theInputContainer = document.createElement('div');
        theContent.classList.add('input-container');
        const theInput = document.createElement('input');
        theInput.type = 'text';
        theInput.classList.add('input-field');
        theInput.id = 'prompt-input';
        theInputContainer.appendChild(theInput);
        theDialog.appendChild(theInputContainer);
    }

    theDialog.appendChild(theButtonContainer);
    theButtonContainer.appendChild(theOkButton);
    theButtonContainer.appendChild(theCancelButton);
    document.body.appendChild(theDialog);

    return theDialog;
};

const theAlertButton = document.getElementById('alert-btn');
theAlertButton.addEventListener('click', () => {
    showAlert();
});

const theConfirmButton = document.getElementById('confirm-btn');
theConfirmButton.addEventListener('click', () => {
    showConfirm((response) => {
        const theOutput = document.getElementById('output');
        theOutput.textContent = `Confirm Result: ${response}`;
    });
});

const thePromptButton = document.getElementById('prompt-btn');
thePromptButton.addEventListener('click', () => {
    showPrompt((response) => {
        const theOutput = document.getElementById('output');
        if (response === null || response == '') {
            theOutput.textContent = 'User did not enter anything.';
        } else {
            theOutput.innerHTML = `The user entered: ${response}.`;
        }
    });
});