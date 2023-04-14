let theEditMode = -1;

export function showDialog() {
    const theDialog = document.getElementById('dialog');
    theDialog.showModal();
};

export function setEditMode(value) {
    theEditMode = value;
};

export function cancelDialog() {
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

function formatDateUS(date) {
    const month = date.getMonth() + 1; // add 1 to convert from 0-based index to 1-based
    const day = date.getDate();
    const year = date.getFullYear();
    return `${month.toString().padStart(2, '0')}/${day.toString().padStart(2, '0')}/${year.toString()}`;
}

export function submitPost() {
    const theDialog = document.getElementById('dialog');
    const theTitle = theDialog.querySelector('#title-field');
    const theDate = theDialog.querySelector('#date-field');
    const theSummary = theDialog.querySelector('#summary-field');
    const theDateValue = theDate.value;
    let theTmpDate = new Date(theDateValue);
    theTmpDate.setDate(theTmpDate.getDate() + 1);

    if (theTitle.value === "" || theSummary.value === "" || isNaN(Date.parse(theDateValue))) {
        showAlert('Some fields are empty!');
    } else {
        const theDict = {
            title: theTitle.value,
            date: formatDateUS(theTmpDate),
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
        thePostList.outerHTML = "<div id='blog-list'></div>";
        theList.forEach((v, i) => appendPost(v, i));
    }
};

function appendPost(aValue, anIndex) {
    const theTitle = aValue['title'];
    const theDate = aValue['date'];
    const theSummary = aValue['summary'];

    const theArticle = document.createElement('div');
    theArticle.classList.add('article');
    const theArtivleTitle = document.createElement('h3');
    theArtivleTitle.classList.add('article-title');
    const theArticleContent = document.createElement('div');
    theArticleContent.classList.add('article-content');
    const theArticleSummary = document.createElement('div');
    const theArticleDate = document.createElement('div');
    const theArticleButton = document.createElement('div');
    theArticleButton.classList.add('article-button-container');

    theArticle.appendChild(theArtivleTitle);
    theArticle.appendChild(theArticleContent);
    theArticleContent.appendChild(theArticleSummary);
    theArticleContent.appendChild(theArticleDate);
    theArticleContent.appendChild(theArticleButton);
    theArtivleTitle.innerText = `${theTitle}`;
    theArticleSummary.innerHTML = `${theSummary}`;
    theArticleDate.innerHTML = `${theDate}`;

    let theEditBtn = document.createElement('button');
    let theDeleteBtn = document.createElement('button');

    theEditBtn.addEventListener('click', () => {
        editPost(anIndex);
    });

    theEditBtn.classList.add('edit-btn');

    theEditBtn.innerHTML = 'Edit<i class="fa fa-pencil" aria-hidden="true"></i>';

    theDeleteBtn.addEventListener('click', () => {
        deletePost(anIndex);
    });

    theDeleteBtn.classList.add('delete-btn');

    theDeleteBtn.innerHTML = 'Delete<i class="fa fa-trash" aria-hidden="true"></i>';

    theArticleButton.appendChild(theEditBtn);
    theArticleButton.appendChild(theDeleteBtn);

    const thePostList = document.getElementById('blog-list');
    thePostList.appendChild(theArticle);
}

function deletePost(anIndex) {
    const theList = JSON.parse(localStorage.getItem('postList')) || [];
    theList.splice(anIndex, 1);
    localStorage.setItem('postList', JSON.stringify(theList));

    displayPosts();
}

function formatDate(inputDate) {
    const theDateArr = inputDate.split('/');
    let theYear = theDateArr[2];
    while (theYear.length < 4) {
        theYear = '0' + theYear;
    }
    let theMonth = theDateArr[0];
    if (theMonth.length < 2) {
        theMonth = '0' + theMonth;
    }
    let theDay = theDateArr[1];
    if (theDay.length < 2) {
        theDay = '0' + theDay;
    }
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
