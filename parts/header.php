<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row middle-xs between-xs">
                <div class="col">
                    <ul class="menuHor">
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Бонусная программа</a></li>
                        <li><a href="#">Новости</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="menuHor">
                        <li><a href="#">Гарантия</a></li>
                        <li><a href="#">Доставка и Оплата</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="row middle-xs">
                <div class="col-xs-3 col-lg-5 col-xl-5">
                    <div class="header__menuBtn">
                        <a href="#">
                            <svg width="26px" height="20px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-menu"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="header__info">
                        <div class="row middle-xs">
                            <div class="col">
                                <div class="header__schedule">
                                    <p>График работы:<br>Ежедневно с 8:00 до 20:00</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="header__phone">
                                    <p><strong>0 800 210 064</strong></p>
                                    <p><a href="#">обратный звонок</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-2 col-xl-2">
                    <a href="<?= HTTP ?>" class="header__logo">
                        <svg width="194px" height="97px">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                        </svg>
                    </a>
                </div>
                <div class="col-xs-3 col-lg-5 col-xl-5">
                    <div class="row middle-xs end-xs">
                        <div class="header__user col">
                            <div class="userHeader">
                                <p class="userHeader__text">
                                    Hello!<br>
                                    Карина Лошадкина
                                </p>
                                <a href="#" class="userHeader__img">
                                    <img src="<?= HTTP ?>/assets/images/placeholder-user.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="header__wishList col">
                            <a class="wishListPreview" href="#">
                                    <span class="wishListPreview__icon">
                                        <svg width="32px" height="28px">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-heart"></use>
                                        </svg>
                                        <span class="wishListPreview__count">3</span>
                                    </span>
                            </a>
                        </div>
                        <div class="header__cart col">
                            <a class="cartPreview" href="#">
                                    <span class="cartPreview__icon">
                                        <svg width="30px" height="28px">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use>
                                        </svg>
                                        <span class="cartPreview__count">3</span>
                                    </span>
                                <span class="cartPreview__text">Корзина</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>