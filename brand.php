<?php include_once("config.php"); ?>

<?php include(ROOT . '/parts/layoutTop.php') ?>

<div class="pBrand grayBg">

    <? include(ROOT . '/parts/header-tools.php') ?>

    <div class="pBrand__container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8 col-xl-9">
                    <div class="pBrand__infoBox">
                        <? include 'parts/brandPreview.php' ?>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4 col-xl-3">
                    <div class="pBrand__menu">
                        <ul class="bMenu">
                            <li>
                                <a href="#">
                                    <span class="icon">
                                        <svg width="22px" height="22px">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xlink:href="#icon-works"></use>
                                        </svg>
                                    </span>
                                    Работы <span class="count">(6)</span>
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
                                                 xlink:href="#icon-users"></use>
                                        </svg>
                                    </span>
                                    Мастераа <span class="count">(6)</span>
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
                                    Отызы о бренде <span class="count">(6)</span>
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
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="pBrand__desc bDesc">
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
                            <? $user = true; ?>
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

    <? include 'parts/instagramModule.php' ?>

</div>

<?php include(ROOT . '/parts/layoutBottom.php') ?>