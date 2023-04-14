const ButtonCount = {
    data() {
        return {
            clickCount: 0,
        };
    },
    template: `
        <button @click="incrementCount">
        Time Clicked: {{ clickCount }}
        </button>
    `,
    methods: {
        incrementCount() {
            this.clickCount++;
        },
    },
};

const app = Vue.createApp({});
app.component("button-count-vue", ButtonCount);
app.mount("#app");
