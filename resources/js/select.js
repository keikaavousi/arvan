const selects = document.querySelectorAll(".page-form__custom-select");
selects.forEach((select) => {
    select.addEventListener("click", function () {
        select.classList.toggle("page-form__custom-select--open");
        select.nextElementSibling.classList.toggle(
            "page-form__custom-select__options-wrapper--open"
        );
    });
});

const options = document.querySelectorAll(".form-group__custom-select__option");
options.forEach((option) => {
    option.addEventListener("click", function () {
        this.parentNode.nextElementSibling.value = this.innerText;
        this.parentNode.previousElementSibling.innerHTML = this.innerText;

        selects.forEach((select) => {
            select.classList.remove("page-form__custom-select--open");
            select.nextElementSibling.classList.remove(
                "page-form__custom-select__options-wrapper--open"
            );
        });
    });
});

document.body.addEventListener("click", function (e) {
    selects.forEach((select) => {
        if (e.target !== select) {
            select.classList.remove("page-form__custom-select--open");
            select.nextElementSibling.classList.remove(
                "page-form__custom-select__options-wrapper--open"
            );
        }
    });
});
