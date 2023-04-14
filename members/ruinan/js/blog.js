let theEditMode = -1;

export function showDialog() {
    const theDialog = document.getElementById('dialog');
    theDialog.showModal();
};

export function setEditMode(value) {
    theEditMode = value;
};

export function cancelDialog() {
    console.log('cancel!');
    const theDialog = document.getElementById('dialog');
    const theTitle = theDialog.querySelector('#title-field');
    const theDate = theDialog.querySelector('#date-field');
    const theSummary = theDialog.querySelector('#summary-field');
    theTitle.value = "";
    theDate.value = "";
    theSummary.value = "";
    theDialog.close();
};

function showAlert(aMessage) {
    const theDialog = createAlertDialog(aMessage);
    theDialog.showModal();
};

function createAlertDialog(aMessage) {
    const theDialog = document.createElement('dialog');
    theDialog.classList.add('alert');

    const theContent = document.createElement('div');
    theContent.classList.add('content');
    theContent.textContent = aMessage;

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

export function submitPost() {
    const theDialog = document.getElementById('dialog');
    const theTitle = theDialog.querySelector('#title-field');
    const theDate = theDialog.querySelector('#date-field');
    const theSummary = theDialog.querySelector('#summary-field');
    const theDateValue = theDate.value;
    if (theTitle.value === "" || theSummary.value === "" || isNaN(Date.parse(theDateValue))) {
        showAlert('Some fields are empty!');
    } else {
        const theDict = {
            title: theTitle.value,
            date: new Date(theDateValue).toLocaleDateString("en-US"),
            summary: theSummary.value
        };
        const theList = JSON.parse(localStorage.getItem('postList')) || [];
        if (theEditMode === -1) {
            theList.push(theDict);
        } else {
            theList[theEditMode] = theDict;
        }
        theTitle.value = "";
        theDate.value = "";
        theSummary.value = "";

        localStorage.setItem('postList', JSON.stringify(theList));
        theDialog.close();
        console.log('saved a post!');
    }
    displayPosts();
};

export function displayPosts() {
    const theList = JSON.parse(localStorage.getItem('postList')) || [];
    const thePostList = document.getElementById('blog-list');
    if (theList.length === 0) {
        thePostList.outerHTML = "<p id='blog-list'>No posts yet.</p>";
    } else {
        thePostList.outerHTML = "<ul id='blog-list'></ul>";
        theList.forEach((v, i) => appendPost(v, i));
    }
};

function appendPost(aValue, anIndex) {
    const theTitle = aValue['title'];
    const theDate = aValue['date'];
    const theSummary = aValue['summary'];

    const theLi = document.createElement('li');

    theLi.innerHTML = `${theTitle}, ${theDate}: ${theSummary}`;

    let theEditBtn = document.createElement('button');
    let theDeleteBtn = document.createElement('button');

    theEditBtn.addEventListener('click', () => {
        editPost(anIndex);
    });

    theEditBtn.classList.add('edit-btn');

    theEditBtn.textContent = 'Edit';

    theDeleteBtn.addEventListener('click', () => {
        deletePost(anIndex);
    });

    theDeleteBtn.classList.add('delete-btn');
    theDeleteBtn.textContent = 'Delete';

    theLi.appendChild(theEditBtn);
    theLi.appendChild(theDeleteBtn);

    const thePostList = document.getElementById('blog-list');
    thePostList.appendChild(theLi);
}

function deletePost(anIndex) {
    const theList = JSON.parse(localStorage.getItem('postList')) || [];
    theList.splice(anIndex, 1);
    localStorage.setItem('postList', JSON.stringify(theList));

    displayPosts();
}

function formatDate(inputDate) {
    const theDateArr = inputDate.split('/');
    const theYear = theDateArr[2];
    const theMonth = theDateArr[0];
    const theDay = theDateArr[1];
    return `${theYear}-${theMonth}-${theDay}`;
}

function editPost(anIndex) {
    theEditMode = anIndex;
    const theList = JSON.parse(localStorage.getItem('postList')) || [];
    const thePost = theList[anIndex];
    const theDialog = document.getElementById('dialog');
    const theTitle = theDialog.querySelector('#title-field');
    const theDate = theDialog.querySelector('#date-field');
    theDate.value = formatDate(thePost['date']);
    const theSummary = theDialog.querySelector('#summary-field');
    theTitle.value = thePost['title'];
    theSummary.value = thePost['summary'];
    theDialog.showModal();
}

