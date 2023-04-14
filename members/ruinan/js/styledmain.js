import {showDialog, cancelDialog, submitPost, displayPosts, setEditMode } from "./styledblog.js";
const theAddButton = document.getElementById('add-btn');
theAddButton.addEventListener('click', () => {
    setEditMode(-1);
    showDialog();
});
const theCancelButton = document.getElementById('cancel-btn');
theCancelButton.addEventListener('click', cancelDialog);
const thePostButton = document.getElementById('post-btn');
thePostButton.addEventListener('click', submitPost);
displayPosts();