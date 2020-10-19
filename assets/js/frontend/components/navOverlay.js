export default class Menuoverlay {
    constructor() {
        this.menu = document.querySelector("#main-menu");
        this.open = document.querySelector("#main-menu-open");
        this.close = document.querySelector("#main-menu-close");
        this.events();
    }

    // Events
    events() {
        this.open.addEventListener("click", (e) => {
            e.preventDefault();
            this.handleOpenMenu(this.menu);
        });

        this.close.addEventListener("click", (e) => {
            e.preventDefault();
            this.handleCloseMenu(this.menu);
        });
    }

    // Methods
    handleOpenMenu(element) {
        element.style.width = "100%";
    }

    handleCloseMenu(element) {
        element.style.width = "0%";
    }
}