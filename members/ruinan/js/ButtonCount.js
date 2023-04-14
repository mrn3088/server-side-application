class ButtonCount extends HTMLElement {
    constructor() {
        super();
        const theShadowRoot = this.attachShadow({ mode: "open" });
        const theTemplate = document.createElement("template");
        this.clickCount = 0;
        theTemplate.innerHTML = `
            <button><slot></slot> Time Clicked: <span>0</span></button>
        `;
        theShadowRoot.appendChild(theTemplate.content.cloneNode(true));
        const theButton = theShadowRoot.querySelector("button");
        this.counter = theShadowRoot.querySelector("span");
        theButton.addEventListener("click", () => {
            this.clickCount++;
            this.counter.innerHTML = this.clickCount;
        });
    }
}

customElements.define("button-count", ButtonCount);
