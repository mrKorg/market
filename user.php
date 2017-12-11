<?php include_once("config.php"); ?>

<?php include(ROOT . '/parts/layoutTop.php') ?>

<div class="pUser grayBg">

    <? include(ROOT . '/parts/header-tools.php') ?>

    <div class="pUser__container">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8 col-xl-9">
                    <? include 'parts/sliderBanners.php' ?>
                </div>
                <div class="col-xs-12 col-lg-4 first-lg col-xl-3 first-xl">
                    <? include 'parts/userPreview.php' ?>
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
                            Ответы марии
                            <span class="count">(34)</span>
                        </h3>
                    </div>
                    <div class="col-xs">

                    </div>
                    <div class="col">
                        <div class="bModule__moreBtn">
                            <a href="#" class="eBtn--black">Все ответы</a>
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
                            <? $is_user_reviews = true; ?>
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
                            Отзывы Марии
                            <span class="count">(34)</span>
                        </h3>
                    </div>
                    <div class="col-xs">

                    </div>
                    <div class="col">
                        <div class="bModule__moreBtn">
                            <a href="#" class="eBtn--black">Все отзывы</a>
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
                        <h3 class="bModule__title">Работы Марии</h3>
                    </div>
                    <div class="col-xs">

                    </div>
                    <div class="col">
                        <div class="bModule__moreBtn">
                            <a href="#" class="eBtn--black">Все работы</a>
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
                            <? $user = false; ?>
                            <? include 'parts/workPreview.php' ?>
                        </div>
                    <? endfor ?>
                </div>
            </div>
        </div>
    </div>

    <? include 'parts/instagramModule.php' ?>

</div>

<?php include(ROOT . '/parts/layoutBottom.php') ?>