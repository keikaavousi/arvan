<section class="home-slider">
    <h2 class="home-slider__title">پروژه‌های موفق</h2>
    <div class="home-slider__container container">
        <button class="home-slider__controller home-slider__controller-left" id="prev">
            <?= file_get_contents('img/left.svg') ?>
        </button>
        <div class="home-slider__thumbnails">
            <ul class="home-slider__thumbnails-list">
                <li class="home-slider__thumbnails-list-item">
                    <?= file_get_contents('img/logo1.svg') ?>
                </li>
                <li class="home-slider__thumbnails-list-item">
                    <?= file_get_contents('img/logo2.svg') ?>
                </li>
                <li class="home-slider__thumbnails-list-item">
                    <?= file_get_contents('img/logo3.svg') ?>
                </li>
                <li class="home-slider__thumbnails-list-item">
                    <?= file_get_contents('img/logo4.svg') ?>
                </li>
                <li class="home-slider__thumbnails-list-item">
                    <?= file_get_contents('img/logo1.svg') ?>
                </li>
                <li class="home-slider__thumbnails-list-item">
                    <?= file_get_contents('img/logo2.svg') ?>
                </li>
                <li class="home-slider__thumbnails-list-item">
                    <?= file_get_contents('img/logo3.svg') ?>
                </li>
                <li class="home-slider__thumbnails-list-item">
                    <?= file_get_contents('img/logo4.svg') ?>
                </li>
            </ul>
        </div>
        <button class="home-slider__controller home-slider__controller-right" id="next">
            <?= file_get_contents('img/right.svg') ?>
        </button>
    </div>
</section>
