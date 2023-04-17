export function styleInputNLabel(element) {
    element.style.margin = "1ch 0";
    // element.style.color = "red";
}

export function styleInput3(element) {
    element.style.margin = "1ch 0";
    element.style.width = "100%";
    element.style.minHeight = "5ch";
}

export function styleCancelOKBtn(element) {
    element.style.margin = "5%";
}

export function styleEditBtn(element) {
    element.style.margin = "1% 0";
    element.style.backgroundColor = "aquamarine";
    let editImage = document.createElement("img");
    editImage.src = "./image/pencil_icon.webp";
    editImage.alt = "Sorry, image not available";
    element.appendChild(editImage);
    return element;
}

export function styleDeleteBtn(element) {
    element.style.margin = "1% 0";
    element.style.backgroundColor = "aquamarine";
    let deleteImage = document.createElement("img");
    deleteImage.src = "./image/trash_icon.jpeg";
    deleteImage.alt = "Sorry, image not available";
    element.appendChild(deleteImage);
}