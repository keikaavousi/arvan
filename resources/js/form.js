const form = document.getElementById("register_form");
form.addEventListener("submit", function (e) {
    e.preventDefault();

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
            e.target.nextElementSibling.classList.add("failed-validation");
            e.target.parentNode.children[3].innerHTML =
                "فایل بزرگتر از حد مجاز است";
            e.target.parentNode.children[3].classList.add("error-message");
        } else {
            e.target.nextElementSibling.children[0].innerText = file.name;
            e.target.nextElementSibling.classList.remove("failed-validation");
            e.target.parentNode.children[3].innerHTML =
                "حداکثر حجم مجاز فایل 1 مگابایت باشد";
            e.target.parentNode.children[3].classList.remove("error-message");
        }
    });
});

const submitButton = document.getElementById("form-submit-button");
form.addEventListener("change", () => {
    if (form.checkValidity()) {
        submitButton.disabled = false;
        submitButton.classList.remove("button--disabled");
        submitButton.classList.add("button--fill");
    } else {
        submitButton.disabled = true;
        submitButton.classList.add("button--disabled");
        submitButton.classList.remove("button--fill");
    }
});
