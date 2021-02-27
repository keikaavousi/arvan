let thumbnails = document.querySelector(".home-slider__thumbnails-list");
if (thumbnails) {
    if (window.innerWidth > 992) {
        let items = thumbnails.querySelectorAll("li");
        let right_arrow = document.querySelector(
            ".home-slider__controller-right"
        );
        let left_arrow = document.querySelector(
            ".home-slider__controller-left"
        );

        let strip = 0;
        let counter = 0;
        let items_count = items.length;
        let left_margin, right_margin;

        thumbnails.style.width = items_count * 250 + "px";
        left_arrow.disabled = true;

        let first_item = thumbnails.querySelector("li:first-of-type");
        let last_item = thumbnails.querySelector("li:last-of-type");

        first_item.dataset.active = "true";

        let step = (thumbnails.offsetWidth * 14) / 100;
        let safe_count = Math.floor(thumbnails.offsetWidth / step);

        right_arrow.addEventListener("click", function (e) {
            if (counter > items_count - safe_count) {
                right_arrow.disabled = true;
            } else {
                counter++;

                items.forEach((item, index) => {
                    if (counter === index) {
                        item.dataset.active = "true";
                    } else {
                        delete item.dataset.active;
                    }
                });
                strip += step;
                thumbnails.style.transform = `translateX(${strip}px)`;
                left_arrow.disabled = false;
            }
        });

        left_arrow.addEventListener("click", function (e) {
            if (counter < 1) {
                left_arrow.disabled = true;
            } else {
                counter--;
                left_arrow.disabled = false;
                items.forEach((item, index) => {
                    if (counter === index) {
                        item.dataset.active = "true";
                    } else {
                        delete item.dataset.active;
                    }
                });
                strip -= step;
                thumbnails.style.transform = `translateX(${strip}px)`;
                right_arrow.disabled = false;
                if (counter < 1) {
                    left_arrow.disabled = true;
                }
            }
        });
    }
}
