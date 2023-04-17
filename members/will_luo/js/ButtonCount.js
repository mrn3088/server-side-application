class ButtonCount extends HTMLElement{
    constructor() {
        super();
        var click = 0;
        const shadow = this.attachShadow({ mode: 'open' });
        const button = document.createElement("button");
        button.setAttribute("id", "button_");
        button.innerText = `Times Clicked: ${click}`;
        button.addEventListener("click", ()=>{
            click = click + 1;
            button.innerText = `Times Clicked: ${click}`;
        });
        const style = document.createElement("style");
        style.textContent = `
        #button_ {
            width: 130px;
            height: 20px;
            // margin: 5%;
        }
        `;
        shadow.appendChild(style);
        shadow.appendChild(button);
    }
}
customElements.define("button-count", ButtonCount);