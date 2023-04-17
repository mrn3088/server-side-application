export function addBlog() {
    getUserInput(0);
}
/**
 * 
 * @param {*} createOrEdit 0 for create, 1 for edit
 */
function getUserInput(createOrEdit, index) {
    // clone temp tag
    let temp = document.getElementsByTagName("template")[0];
    const cloneTemp = temp.content.cloneNode(true);
    // dialog
    let cloneDialog = cloneTemp.getElementById("myDialog");

    // label1 for title
    let cloneLabel1 = document.createElement("label");
    cloneLabel1.for = "title";
    cloneLabel1.textContent = "Title: ";
    cloneDialog.appendChild(cloneLabel1);
    // user input for title
    let cloneInput = document.createElement("input");
    cloneInput.name = "title";
    cloneInput.id = "title";
    cloneInput.type = "text";
    cloneDialog.appendChild(cloneInput);
    // create new line
    cloneDialog.appendChild(document.createElement("br"));

    // label2 for date
    let cloneLabel2 = document.createElement("label");
    cloneLabel2.for = "date";
    cloneLabel2.textContent = "Date: ";
    cloneDialog.appendChild(cloneLabel2);
    // user input for date
    let cloneInput2 = document.createElement("input");
    cloneInput2.name = "date";
    cloneInput2.id = "date";
    cloneInput2.type = "date";
    cloneDialog.appendChild(cloneInput2);
    // create new line
    cloneDialog.appendChild(document.createElement("br"));

    // label3 for summary
    let cloneLabel3 = document.createElement("label");
    cloneLabel3.for = "summary";
    cloneLabel3.textContent = "Summary (1-2 sentences): ";
    cloneDialog.appendChild(cloneLabel3);
    // create new line
    cloneDialog.appendChild(document.createElement("br"));
    // user input for summary
    let cloneInput3 = document.createElement("input");
    cloneInput3.name = "summary";
    cloneInput3.id = "summary";
    cloneInput3.type = "textarea";
    cloneDialog.appendChild(cloneInput3);
    // create new line
    cloneDialog.appendChild(document.createElement("br"));

    // cancel button
    let cancelBtn = document.createElement('button');
    cancelBtn.textContent = "Cancel";
    cloneDialog.appendChild(cancelBtn);
    cancelBtn.addEventListener("click", () => {
        cloneDialog.remove();
    });
    // save button
    let okBtn = document.createElement('button');
    okBtn.textContent = "Save";
    cloneDialog.appendChild(okBtn);
    okBtn.addEventListener("click", () => {
        cloneDialog.remove();
        let cleanInput1 = DOMPurify.sanitize(cloneInput.value);
        let cleanInput2 = DOMPurify.sanitize(cloneInput2.value);
        let cleanInput3 = DOMPurify.sanitize(cloneInput3.value);
        // store input into localStorage
        
        // let post;
        if (createOrEdit == 0) {
            // create mode
            // delete all previous li
            deleteAllLi();
            let postsArray = setUserInput(cleanInput1, cleanInput2, cleanInput3);
            // display new post
            displayBlogsFromStorage(postsArray);
        } else {
            // edit mode
            deleteAllLi();
            let postsArray = editUserInput(cleanInput1, cleanInput2, cleanInput3, index);
            // use displayBlogsFromStorage to do the whole ul
            displayBlogsFromStorage(postsArray);
        }
    });
    // add to body
    document.getElementById("blogList").appendChild(cloneTemp);
}

function editUserInput(cleanInput1, cleanInput2, cleanInput3, index) {
    let postsArray = getBlogsFromStorage();
    console.log(postsArray);
    let currPost = postsArray[index];
    currPost["PostTitle"] = cleanInput1;
    currPost["Date"] = cleanInput2;
    currPost["Summary"] = cleanInput3;
    postsArray[index] = currPost;
    let stringArray = JSON.stringify(postsArray);
    setBlogsToStorage(stringArray);
    return postsArray;
}

function deleteAllLi() {
    let previousLiArray = document.querySelectorAll("li");
    for (let i = 0; i < previousLiArray.length; i++){
        previousLiArray[i].remove();
    }
}

function setUserInput(input1, input2, input3) {
    let newPost = {
        "PostTitle": input1,
        "Date": input2,
        "Summary": input3
    };
    let postsArray = getBlogsFromStorage();
    // if there is no post before
    if (postsArray === null || postsArray.length === 0) {
        let newPostArray = [newPost];
        let stringNewArray = JSON.stringify(newPostArray);
        postsArray = newPostArray;
        // window.localStorage.setItem("postedBlogs", stringNewArray);
        setBlogsToStorage(stringNewArray);
    } else {
        // add new post to existing post array
        postsArray.push(newPost);
        let stringNewArray = JSON.stringify(postsArray);
        // window.localStorage.setItem("postedBlogs", JSON.stringify(postsArray));
        setBlogsToStorage(stringNewArray);
    }
    return postsArray;
}

function setBlogsToStorage(stringArray) {
    window.localStorage.setItem("postedBlogs", stringArray);
}

export function init() {
    // alert("ready");
    let blogs = getBlogsFromStorage();
    displayBlogsFromStorage(blogs);
}

function getBlogsFromStorage() {
    return JSON.parse(window.localStorage.getItem("postedBlogs"));
}

function displayBlogsFromStorage(blogs) {
    let unorderedList = document.getElementById("blogList");
    // delete previous li
    // document.querySelectorAll("li").remove();

    // if there is no blog
    if (blogs === null || blogs.length === 0) {
        let emptyLi = document.createElement("li");
        emptyLi.textContent = "No blogs currently listed.";
        unorderedList.appendChild(emptyLi);
        return;
    }
    
    for (let i = 0; i < blogs.length; i++) {
        let post = blogs[i];
        createPostLi(post, i);
    }
}

function createPostLi(post, index) {
    let unorderedList = document.getElementById("blogList");
    // create li
    let emptyLi = document.createElement("li");
    // add content to li
    emptyLi.textContent = "Post Title: " + post["PostTitle"] 
        + "; Date: " + post["Date"] + "; Summary: " + post["Summary"];
    // add Edit button
    let editBtn = document.createElement("button");
    editBtn.textContent = "Edit";
    editBtn.addEventListener("click", () => {
        // if create first, then cannot edit, because index is 0
        // need to locate the li
        // let parentPost = editBtn.parentElement;
        // console.log(parentPost);
        getUserInput(1, index);
    });
    emptyLi.appendChild(editBtn);
    // add Delete button
    let deleteBtn = document.createElement("button");
    deleteBtn.textContent = "Delete";
    deleteBtn.addEventListener("click", () => {
        let parentPost = deleteBtn.parentElement;
        deleteLi(parentPost, index);
    });
    emptyLi.appendChild(deleteBtn);
    unorderedList.appendChild(emptyLi);
}

function deleteLi(parentPost, index) {
    // clone temp tag
    let temp = document.getElementsByTagName("template")[0];
    const cloneTemp = temp.content.cloneNode(true);
    // dialog
    let cloneDialog = cloneTemp.getElementById("myDialog");
    cloneDialog.textContent = "Delete post?";
    // create new line
    cloneDialog.appendChild(document.createElement("br"));
    // cancel button
    let cancelBtn = document.createElement('button');
    cancelBtn.textContent = "Cancel";
    cloneDialog.appendChild(cancelBtn);
    cancelBtn.addEventListener("click", () => {
        cloneDialog.remove();
        return;
    });
    // ok button
    let okBtn = document.createElement('button');
    okBtn.textContent = "Ok";
    cloneDialog.appendChild(okBtn);
    okBtn.addEventListener("click", () => {
        cloneDialog.remove();
        parentPost.remove();
        let blogs = getBlogsFromStorage();
        blogs.splice(index, 1);
        setBlogsToStorage(JSON.stringify(blogs));

        // test delete all li and insert existing fi
        // 3.2 test version
        deleteAllLi();
        displayBlogsFromStorage(blogs);

        // if delete the last one
        // if (blogs.length === 0 || blogs === null) {
        //     let unorderedList = document.getElementById("blogList");
        //     let emptyLi = document.createElement("li");
        //     emptyLi.textContent = "No blogs currently listed.";
        //     unorderedList.appendChild(emptyLi);
        // }
    });
    document.getElementById("blogList").appendChild(cloneTemp);
}
