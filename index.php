<?php include_once("config.php"); ?>

<?php include(ROOT . '/parts/layoutTop.php') ?>

<div class="pHome grayBg">

    <div class="bTool" id="bTool">
        <div class="container">
            <div class="row middle-xs">
                <div class="col-xs-12 col-lg-8 col-xl-9">
                    <div class="bTool__box">
                        <a href="#" class="bTool__catalogBtn">
                            <svg width="20px" height="16px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-menu"></use>
                            </svg>
                            Товары
                        </a>
                        <a href="#" class="bTool__brands">
                            Бренды
                        </a>
                        <form class="bTool__search">
                            <input type="text" name="search" placeholder="Введите название товара">
                            <button type="submit">
                                <svg width="19px" height="18px">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-search"></use>
                                </svg>
                            </button>
                        </form>
                        <a class="bTool__searchBtn" id="bTool__searchBtn">
                            <svg width="19px" height="18px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-search"></use>
                            </svg>
                            Поиск
                        </a>
                        <div class="bTool__cartBtn">
                            <a class="cartPreview" href="#">
                                <span class="cartPreview__icon">
                                    <svg width="26px" height="24px">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cart"></use>
                                    </svg>
                                    <span class="cartPreview__count">3</span>
                                </span>
                                <span class="cartPreview__text">Корзина</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4 col-xl-3">
                    <div class="bTool__links">
                        <div class="row middle-xs center-xs">
                            <div class="col">
                                <a href="#" class="bTool__link">
                                    <svg width="19px" height="16px">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xlink:href="#icon-comments"></use>
                                    </svg>
                                    ТОП обсуждения
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="bTool__link">
                                    <svg width="20px" height="21px">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-cool"></use>
                                    </svg>
                                    Работы крутых мастеров
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-8 col-xl-9">
                <div class="sliderBanners">
                    <ul class="sliderBanners__list" id="sliderBanners__list">
                        <li>
                            <div class="sliderBanners__item"
                                 style="background-image: url('<?= HTTP ?>/assets/images/homeSlider/img-1.jpg')"></div>
                        </li>
                        <li>
                            <div class="sliderBanners__item"
                                 style="background-image: url('<?= HTTP ?>/assets/images/homeSlider/img-1.jpg')"></div>
                        </li>
                        <li>
                            <div class="sliderBanners__item"
                                 style="background-image: url('<?= HTTP ?>/assets/images/homeSlider/img-1.jpg')"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-lg-4 col-xl-3">
                <div class="userPreview">
                    <div class="userPreview__row">
                        <div class="row middle-xs center-xs">
                            <div class="col">
                                <p class="userPreview__label">
                                    <span>
                                        Рейтинг
                                    </span>
                                    <strong>
                                        3467
                                    </strong>
                                </p>
                            </div>
                            <div class="col">
                                <div class="userPreview__avatar">
                                    <p class="userAvatar">
                                        <img src="<?= HTTP ?>/assets/images/placeholder-user.png" alt=""
                                             class="userAvatar__img">
                                        <a href="#" class="userAvatar__editLink">
                                            <svg width="10px" height="10px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-edit"></use>
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <p class="userPreview__label">
                                    <span>
                                        Бонусы
                                    </span>
                                    <strong>
                                        367
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <p class="userPreview__name">
                        Карина Лошадкина
                    </p>
                    <div class="userPreview__text">
                        <p class="userCompleteness__label">
                            Ваша скидка номининта <strong>5%</strong> на <strong>1345</strong> товаров!
                        </p>
                        <p>
                            Успей купить пока тикает счетчик! подробнее
                        </p>
                    </div>
                    <? $banner = 'banner' ?>
                    <? if ($banner == 'countdown') : ?>
                        <div class="userPreview__box--countdown" id="userPreview__box--countdown">
                            <div class="row middle-xs center-xs">
                                <div class="col">
                                    <strong class="days">0</strong>
                                    <span>дня</span>
                                </div>
                                <div class="col">
                                    <strong>:</strong>
                                    <span>&#160;</span>
                                </div>
                                <div class="col">
                                    <strong class="hours">0</strong>
                                    <span>час</span>
                                </div>
                                <div class="col">
                                    <strong>:</strong>
                                    <span>&#160;</span>
                                </div>
                                <div class="col">
                                    <strong class="minutes">0</strong>
                                    <span>мин</span>
                                </div>
                                <div class="col">
                                    <strong>:</strong>
                                    <span>&#160;</span>
                                </div>
                                <div class="col">
                                    <strong class="seconds">0</strong>
                                    <span>сек</span>
                                </div>
                            </div>
                        </div>
                    <? elseif ($banner == 'text') : ?>
                        <div class="userPreview__box--text">
                            <div class="row middle-xs center-xs">
                                <div class="col">
                                    <p>
                                        C ДНЕМ РОЖДЕНИЯ!
                                    </p>
                                </div>
                            </div>
                        </div>
                    <? elseif ($banner == 'banner') : ?>
                        <a href="#" class="userPreview__box--banner"
                           style="background-image: url('<?= HTTP ?>/assets/images/banners/banner-1.jpg')"></a>
                    <? endif ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bModule">
        <div class="bModule__header">
            <div class="container">
                <div class="row middle-xs">
                    <div class="col">
                        <h3 class="bModule__title">Новинки</h3>
                    </div>
                    <div class="col-xs">
                        <ul class="menuHor bModule__menu">
                            <li class="active">
                                <a href="#">
                                    Гель лаки
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Маникюрные наборы
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Пилочки для ногтей
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Инструменты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <a href="#" class="eBtn--black">Все новинки</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <ul class="productsListSlider">
                    <? for ($i = 0; $i < 10; $i++) : ?>
                        <li>
                            <div class="productsListSlider__item">
                                <? include 'parts/productPreview.php' ?>
                            </div>
                        </li>
                    <? endfor ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="bModule">
        <div class="bModule__header">
            <div class="container">
                <div class="row middle-xs">
                    <div class="col">
                        <h3 class="bModule__title">Топ мастера</h3>
                    </div>
                    <div class="col-xs">
                        <p class="bModule__desc">
                            Делитесь полезными советами и отзывами о товарах, получайте признание и баллы
                        </p>
                    </div>
                    <div class="col">
                        <a href="#" class="eBtn--black">Все мастера</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <div class="bMasterTop">
                    <div class="bMasterTop__single">
                        <div>
                            <? $self = true ?>
                            <? include 'parts/masterPreview.php' ?>
                        </div>
                    </div>
                    <div class="bMasterTop__all">
                        <div>
                            <div class="bMasterTop__row">
                                <? $self = false ?>
                                <? for ($i = 0; $i < 4; $i++) : ?>
                                    <div class="bMasterTop__item">
                                        <? include 'parts/masterPreview.php' ?>
                                    </div>
                                <? endfor ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bModule">
        <div class="bModule__header">
            <div class="container">
                <div class="row middle-xs">
                    <div class="col">
                        <h3 class="bModule__title">Лучшие работы</h3>
                    </div>
                    <div class="col-xs">
                        <p class="bModule__desc">
                            Загружайте работы в проект www.nailsoftheday.com, указывайте материалы, которые использовали
                        </p>
                    </div>
                    <div class="col">
                        <a href="#" class="eBtn--black">Все работы</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <div class="bWorksTop">
                    <? for ($i = 0; $i < 5; $i++) : ?>
                    <div class="bWorksTop__item">
                        <? include 'parts/workPreview.php' ?>
                    </div>
                    <? endfor ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bModule">
        <div class="bModule__header">
            <div class="container">
                <div class="row middle-xs">
                    <div class="col">
                        <h3 class="bModule__title">Бестцеллеры</h3>
                    </div>
                    <div class="col-xs">
                        <ul class="menuHor bModule__menu">
                            <li class="active">
                                <a href="#">
                                    Гель лаки
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Маникюрные наборы
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Пилочки для ногтей
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Инструменты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <a href="#" class="eBtn--black">Все хиты</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <ul class="productsListSlider">
                    <? for ($i = 0; $i < 10; $i++) : ?>
                        <li>
                            <div class="productsListSlider__item">
                                <? include 'parts/productPreview.php' ?>
                            </div>
                        </li>
                    <? endfor ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="bModule">
        <div class="bModule__header">
            <div class="container">
                <div class="row middle-xs">
                    <div class="col">
                        <h3 class="bModule__title">ТОП обсуждения</h3>
                    </div>
                    <div class="col-xs">
                        <p class="bModule__desc">
                            Делитесь полезными советами и отзывами о товарах, получайте признание и баллы
                        </p>
                    </div>
                    <div class="col">
                        <a href="#" class="eBtn--black">Все обсуждения</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <div class="bDiscussionTop">
                    <? for ($i = 0; $i < 5; $i++) : ?>
                        <div class="bDiscussionTop__item">
                            <? include 'parts/discussionPreview.php' ?>
                        </div>
                    <? endfor ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bModule">
        <div class="bModule__header">
            <div class="container">
                <div class="row middle-xs">
                    <div class="col">
                        <h3 class="bModule__title">Бестцеллеры</h3>
                    </div>
                    <div class="col-xs">
                        <ul class="menuHor bModule__menu">
                            <li class="active">
                                <a href="#">
                                    Акции
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Маникюрные наборы
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Пилочки для ногтей
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Инструменты
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <a href="#" class="eBtn--black">Все акции</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <ul class="productsListSlider">
                    <? for ($i = 0; $i < 10; $i++) : ?>
                        <li>
                            <div class="productsListSlider__item">
                                <? include 'parts/productPreview.php' ?>
                            </div>
                        </li>
                    <? endfor ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="bModule">
        <div class="bModule__header">
            <div class="container">
                <div class="row middle-xs">
                    <div class="col">
                        <h3 class="bModule__title">
                            Instagram
                            <a href="#">@NAILSOFTHEDAYMARKET</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <div class="bInstagramTop">
                    <? for ($i = 0; $i < 10; $i++) : ?>
                        <div class="bInstagramTop__item">
                            <a href="#">
                                <img src="<?= HTTP ?>/assets/images/demo-image.jpg" alt="">
                            </a>
                        </div>
                    <? endfor ?>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include(ROOT . '/parts/layoutBottom.php') ?>
