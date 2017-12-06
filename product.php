<?php include_once("config.php"); ?>

<?php include(ROOT . '/parts/layoutTop.php') ?>

<div class="pProduct grayBg">

    <? include(ROOT . '/parts/header-tools.php') ?>

    <div class="pProduct__container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8 col-xl-9">
                    <div class="pProduct__infoBox">
                        <div class="pProduct__info">
                            <h1 class="pProduct__title">
                                My Nail Gel Lacguer
                            </h1>
                            <p class="pProduct__cat">
                                Гель-лак для ногтей
                            </p>
                            <div class="pProduct__galleryBox">
                                <p class="pProduct__label--blue">
                                    Новинка
                                </p>
                                <div class="pProduct__gallery">
                                    <div class="pProductGallery" id="pProductGallery">
                                        <? for ($i = 0; $i < 10; $i++) : ?>
                                            <div>
                                                <div class="pProductGallery__item">
                                                    <img src="<?= HTTP ?>/assets/images/products/prod-preview-1.jpg"
                                                         alt="">
                                                </div>
                                            </div>
                                        <? endfor ?>
                                    </div>
                                </div>
                                <div class="pProduct__galleryNav">
                                    <div class="pProductGalleryNav" id="pProductGalleryNav">
                                        <? for ($i = 0; $i < 10; $i++) : ?>
                                            <div>
                                                <div class="pProductGalleryNav__item">
                                                    <img src="<?= HTTP ?>/assets/images/demo-image.jpg" alt="">
                                                </div>
                                            </div>
                                        <? endfor ?>
                                    </div>
                                </div>
                            </div>


                            <div class="pProduct__row">
                                <div class="row">
                                    <div class="col-xs-10 col-md-8">
                                        <div class="pProduct__rating">
                                            <svg class="active" width="17px" height="16px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-star"></use>
                                            </svg>
                                            <svg class="active" width="17px" height="16px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-star"></use>
                                            </svg>
                                            <svg class="active" width="17px" height="16px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-star"></use>
                                            </svg>
                                            <svg width="17px" height="16px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-star"></use>
                                            </svg>
                                            <svg width="17px" height="16px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-star"></use>
                                            </svg>
                                            <span class="text">
                                                34 отзыва
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-md-4">
                                        <p class="pProduct__like">
                                            <a href="#">
                                                <svg width="30px" height="26px">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xlink:href="#icon-heart"></use>
                                                </svg>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <ul class="pProduct__features">
                                <li>
                                    Код: <span>12445</span>
                                </li>
                                <li>
                                    Наличие: <span>8.5ml</span>
                                </li>
                                <li>
                                    Объем: <span>профессиональная</span>
                                </li>
                                <li>
                                    Страна ТМ: <span>США</span>
                                </li>
                                <li>
                                    Сделано в: <span>США, Украина</span>
                                </li>
                            </ul>

                            <div class="pProduct__row">
                                <div class="row">
                                    <div class="col">
                                        <div class="eSelect">
                                            <div class="eSelect__value">
                                                <div class="eSelect__option">
                                                    <span class="eSelect__text">Объём</span>
                                                </div>
                                                <span class="arrow">
                                                    <svg width="11px" height="7px">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="#icon-arrowDrop"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="eSelect__list">
                                                <a href="#" class="eSelect__link active">
                                                    <span class="eSelect__option">
                                                        <span class="eSelect__text">8.5 ml</span>
                                                    </span>
                                                </a>
                                                <a href="#" class="eSelect__link">
                                                    <span class="eSelect__option">
                                                        <span class="eSelect__text">8.5 ml</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="eSelect">
                                            <div class="eSelect__value">
                                                <span class="eSelect__option">
                                                    <span class="eSelect__image" style="background-image: url('<?= HTTP ?>/assets/images/demo-image.jpg')"></span>
                                                    <span class="eSelect__text">Название красного товара с изображением</span>
                                                </span>
                                                <span class="arrow">
                                                    <svg width="11px" height="7px">
                                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                             xlink:href="#icon-arrowDrop"></use>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="eSelect__list">
                                                <a href="#" class="eSelect__link active">
                                                    <span class="eSelect__option">
                                                        <span class="eSelect__image" style="background-image: url('<?= HTTP ?>/assets/images/demo-image.jpg')"></span>
                                                        <span class="eSelect__text">Название красного товара с изображением</span>
                                                    </span>
                                                </a>
                                                <a href="#" class="eSelect__link">
                                                    <span class="eSelect__option">
                                                        <span class="eSelect__image" style="background-image: url('<?= HTTP ?>/assets/images/demo-image.jpg')"></span>
                                                        <span class="eSelect__text">Название красного товара с изображением</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pProduct__row">
                                <div class="row middle-xs">
                                    <div class="col-xs-6">
                                        <p class="pProduct__price">
                                            <strong class="current">190 грн</strong>
                                            <span class="old">210 грн</span>
                                        </p>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="pProduct__btn">
                                            <a href="#" class="eBtn--pink eBtn--big">Купить</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <ul class="pProduct__links">
                                <li>
                                    <a href="#">
                                        <span class="icon">
                                            <svg width="28px" height="20px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-shipment"></use>
                                            </svg>
                                        </span>
                                        <span class="text">
                                            Бесплатная доставка
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon">
                                            <svg width="22px" height="22px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-garant"></use>
                                            </svg>
                                        </span>
                                        <span class="text">
                                            Гарантия
                                        </span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4 col-xl-3">
                    <div class="pProduct__rightCol">
                        <div class="pProduct__menu">
                            <ul class="bMenu">
                                <li>
                                    <a href="#">
                                        <span class="icon">
                                            <svg width="22px" height="22px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-works"></use>
                                            </svg>
                                        </span>
                                        Лучшие работы <span class="count">(6)</span>
                                        <span class="arrow">
                                            <svg width="8px" height="12px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-arrowRight"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon star">
                                            <svg width="22px" height="22px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-star"></use>
                                            </svg>
                                        </span>
                                        Отзывы <span class="count">(6)</span>
                                        <span class="arrow">
                                            <svg width="8px" height="12px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-arrowRight"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon">
                                            <svg width="22px" height="22px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-comments"></use>
                                            </svg>
                                        </span>
                                        Вопросы и ответы <span class="count">(6)</span>
                                        <span class="arrow">
                                            <svg width="8px" height="12px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-arrowRight"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon">
                                            <svg width="22px" height="22px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-video"></use>
                                            </svg>
                                        </span>
                                        Видео <span class="count">(6)</span>
                                        <span class="arrow">
                                            <svg width="8px" height="12px">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                     xlink:href="#icon-arrowRight"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="pProduct__desc bDesc">
                            <div class="content">
                                <h3 class="title">
                                    Описание продукта
                                </h3>
                                <p>Новая серия обновленной палитры Komilfo - это высококачественные гель-лаки по
                                    доступной цене,
                                    разработанные мастерами для мастеров!</p>
                                <p>Komilfo Deluxe Series - это очень пигментированные гель-лаки, плотно ложатся, имеют
                                    отличную
                                    износостойкость, удобны в нанесении, самовыравниваются по ногтевой пластине,
                                    легкорастворимые,
                                    ароматизированы и прекрасно совмещаются с продукцией любых производителей!</p>
                                <p>Гель-лак Komilfo Deluxe Series №D005<br>
                                    Цвет: светлый, кремово-розовый, эмаль<br>
                                    Объем: 8 мл</p>
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
                    <div class="col bModule__titleBox">
                        <h3 class="bModule__title">Лучшие работы</h3>
                    </div>
                    <div class="col-xs">
                        <p class="bModule__desc">
                            С использованием My Nail Gel Lacguer
                        </p>
                    </div>
                    <div class="col">
                        <div class="bModule__moreBtn">
                            <div class="row middle-xs between-xs">
                                <div class="col">
                                    <a href="#" class="eLink">Добавить работу</a>
                                </div>
                                <div class="col">
                                    <a href="#" class="eBtn--black">Все работы</a>
                                </div>
                            </div>
                        </div>
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
                    <div class="col bModule__titleBox">
                        <h3 class="bModule__title">Отзывы</h3>
                    </div>
                    <div class="col-xs">
                        <div class="bModule__rating">
                            <svg class="active" width="17px" height="16px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="#icon-star"></use>
                            </svg>
                            <svg class="active" width="17px" height="16px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="#icon-star"></use>
                            </svg>
                            <svg class="active" width="17px" height="16px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="#icon-star"></use>
                            </svg>
                            <svg width="17px" height="16px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="#icon-star"></use>
                            </svg>
                            <svg width="17px" height="16px">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="#icon-star"></use>
                            </svg>
                            <span class="text">
                                4,4 / 5
                            </span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bModule__moreBtn">
                            <div class="row middle-xs between-xs">
                                <div class="col">
                                    <a href="#" class="eLink">Добавить отзыв</a>
                                </div>
                                <div class="col">
                                    <a href="#" class="eBtn--black">Все отзывы</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <div class="bReviewsTop">
                    <? for ($i = 0; $i < 5; $i++) : ?>
                        <div class="bReviewsTop__item">
                            <? include 'parts/reviewPreview.php' ?>
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
                    <div class="col bModule__titleBox">
                        <h3 class="bModule__title">
                            Вопросы и ответы
                            <span class="count">(234)</span>
                        </h3>
                    </div>
                    <div class="col-xs">

                    </div>
                    <div class="col">
                        <div class="bModule__moreBtn">
                            <div class="row middle-xs between-xs">
                                <div class="col">
                                    <a href="#" class="eLink">Задать вопрос</a>
                                </div>
                                <div class="col">
                                    <a href="#" class="eBtn--black">Все вопросы</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <div class="bReviewsTop">
                    <? for ($i = 0; $i < 5; $i++) : ?>
                        <div class="bReviewsTop__item">
                            <? include 'parts/questionPreview.php' ?>
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
                    <div class="col bModule__titleBox">
                        <h3 class="bModule__title">Видео</h3>
                    </div>
                    <div class="col-xs">
                        <p class="bModule__desc">
                            С использованием My Nail Gel Lacguer
                        </p>
                    </div>
                    <div class="col">
                        <div class="bModule__moreBtn">
                            <div class="row middle-xs between-xs">
                                <div class="col">
                                    <a href="#" class="eLink">Добавить видео</a>
                                </div>
                                <div class="col">
                                    <a href="#" class="eBtn--black">Все видео</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bModule__body">
            <div class="container">
                <div class="bWorksTop">
                    <? for ($i = 0; $i < 5; $i++) : ?>
                        <div class="bWorksTop__item">
                            <? include 'parts/videoPreview.php' ?>
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
                    <div class="col bModule__titleBox">
                        <h3 class="bModule__title">С этим товаром покупают</h3>
                    </div>
                    <div class="col-xs">

                    </div>
                    <div class="col">
                        <div class="bModule__moreBtn">
                            <a href="#" class="eBtn--black">Все предложения</a>
                        </div>
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

    <? include 'parts/instagramModule.php' ?>

</div>

<?php include(ROOT . '/parts/layoutBottom.php') ?>
