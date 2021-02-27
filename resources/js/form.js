const form = document.getElementById("register_form");
const submitButton = document.getElementById("form-submit-button");

const enableButton = (button) => {
    button.disabled = false;
    button.classList.remove("button--disabled");
    button.classList.add("button--fill");
};

const disableButton = (button) => {
    button.disabled = true;
    button.classList.add("button--disabled");
    button.classList.remove("button--fill");
};

form.addEventListener("change", () => {
    if (form.checkValidity()) {
        enableButton(submitButton);
    } else {
        disableButton(submitButton);
    }
});

form.addEventListener("submit", function (e) {
    e.preventDefault();
    disableButton(submitButton);
    const loading = document.createElement("SPAN");
    loading.classList.add("loading");
    submitButton.appendChild(loading);

    const formInputs = form.elements;

    let formcells = [];

    for (let input of formInputs) {
        if (input.name) {
            let inputdata = {
                column: input.name,
                value: input.value,
            };
            formcells = [...formcells, inputdata];
        }
    }

    let formObj = {
        rows: [
            {
                cells: formcells,
            },
        ],
    };

    fetch(
        "https://coda.io/apis/v1/docs/hvS2xAGEM0/tables/grid-BwzAsGtrL4/rows",
        {
            method: "POST",
            body: JSON.stringify(formObj),
            headers: {
                Authorization: "Bearer f1b765e8-c6d9-40e0-886b-c32c4b080e48",
                "content-type": "application/json",
                accept: "application/json",
            },
        }
    )
        .then((response) => response.json())
        .then((result) => {
            if (result.requestId) {
                alert("اطلاعات با موفقیت ارسال شد");
                window.location.reload();
            }
        })
        .catch((error) => console.log(error.message))
        .finally(() => {
            for (let input of formInputs) {
                input.value = "";
            }
        });
});

const uploaders = form.querySelectorAll("[type=file]");
Array.from(uploaders).forEach(function (uploader) {
    uploader.addEventListener("change", function (e) {
        const file = e.target.files[0];
        if (file.size > 1000000) {
            e.target.parentNode.classList.add("failed-validation");
            e.target.parentNode.children[1].classList.add("failed-validation");
            e.target.parentNode.nextElementSibling.innerHTML =
                "فایل بزرگتر از حد مجاز است";
            e.target.parentNode.nextElementSibling.classList.add(
                "error-message"
            );
        } else {
            e.target.parentNode.children[1].innerText = file.name;
            e.target.parentNode.nextElementSibling.classList.remove(
                "failed-validation"
            );
            e.target.parentNode.nextElementSibling.innerHTML =
                "حداکثر حجم مجاز فایل 1 مگابایت باشد";
            e.target.parentNode.nextElementSibling.classList.remove(
                "error-message"
            );
        }
    });
});
