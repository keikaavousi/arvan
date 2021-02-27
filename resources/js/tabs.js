const mainTabClick = ({ target }) => {
    const {
        dataset: { id = "" },
    } = target;
    document
        .querySelectorAll(".home-network__tabs .tab")
        .forEach((t) => t.classList.remove("selected"));
    target.classList.add("selected");
    document
        .querySelectorAll(".home-network__tabs ~ .tab-panel")
        .forEach((t) => t.classList.add("hidden"));
    document.querySelector(`#${id}`).classList.remove("hidden");
};

const innerTabClick = ({ target }) => {
    const {
        dataset: { id = "" },
    } = target;
    document
        .querySelectorAll(".home-network__inner-tab-container .tab")
        .forEach((t) => t.classList.remove("selected"));
    target.classList.add("selected");
    document
        .querySelectorAll(".home-network__inner-tab-container .tab-panel")
        .forEach((t) => t.classList.add("hidden"));
    document.querySelector(`#${id}`).classList.remove("hidden");
};

const bindMainTabs = () => {
    document.querySelectorAll(".home-network__tabs > .tab").forEach((tab) => {
        tab.addEventListener("click", mainTabClick);
    });
    document
        .querySelectorAll(".home-network__inner-tab-container .tab")
        .forEach((tab) => {
            tab.addEventListener("click", innerTabClick);
        });
};

document.addEventListener("DOMContentLoaded", () => {
    bindMainTabs();
});
