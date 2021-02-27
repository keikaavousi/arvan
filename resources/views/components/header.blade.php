<section class="home-header">
    <header class="header">
        <div class="header__container container">
            <button class="header__navbar__button" id="nav-btn">
                <?= file_get_contents('img/menu-icon.svg') ?>
            </button>
            <div class="header__logo">
                <a href="/">
                    <?= file_get_contents('img/logo.svg') ?>
                </a>
            </div>
            <div class="header__navbar" id="header__navbar">
                <div class="header__right">
                    <nav class="header__nav">
                        <ul class="header__items">
                            <li class="header__item">
                                <a href="">محصولات</a>
                            </li>
                            <li class="header__item">
                                <a href="">بازارچه</a>
                            </li>
                            <li class="header__item">
                                <a href="">مستندات</a>
                            </li>
                            <li class="header__item">
                                <a href="">زیست بوم</a>
                            </li>
                            <li class="header__item">
                                <a href="">قیمت</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__left">
                    <ul class="header__items">
                        <li class="header__item">
                            <a href="">ورود</a>
                        </li>
                        <li class="header__item">
                            <a href="" class="header__button">ثبت نام</a>
                        </li>
                        <li class="header__item">
                            <a href="">
                                <?= file_get_contents('img/phone.svg') ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__intro">
                <div class="header__text">
                    <h1 class="header__title">
                        شبکه ابریارهای آروان
                    </h1>
                    <h2 class="header__subtitle">ArvanCloud Partner Network</h2>
                </div>
                <div class="header__img-container">
                    <img src="img/Header.jpg" class="header__img" alt="شبکه ابریارهای آروان"/>
                </div>
            </div>
        </div>
    </header>
</section>
