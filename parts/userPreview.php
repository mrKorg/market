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
        <span class="userPreview__location">
            Киев
        </span>
    </p>
    <? $info = 'counts' ?>
    <? if ($info == 'text') : ?>
        <div class="userPreview__text">
            <p class="userCompleteness__label">
                Ваша скидка номининта <strong>5%</strong> на <strong>1345</strong> товаров!
            </p>
            <p>
                Успей купить пока тикает счетчик! подробнее
            </p>
        </div>
    <? elseif ($info == 'counts') : ?>
        <div class="userPreview__counts">
            <div class="row middle-xs center-xs">
                <div class="col-xs-4">
                    <a href="#">
                        <svg width="19px" height="16px">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-comments"></use>
                        </svg>
                        <strong>
                            345
                        </strong>
                        <span>
                            ответов
                        </span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <a href="#">
                        <svg width="17px" height="16px" class="star">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-star"></use>
                        </svg>
                        <strong>
                            345
                        </strong>
                        <span>
                            отзывов
                        </span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <a href="#">
                        <svg width="17px" height="16px">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-works"></use>
                        </svg>
                        <strong>
                            45
                        </strong>
                        <span>
                            работ
                        </span>
                    </a>
                </div>
            </div>
        </div>
    <? endif ?>
    <? $banner = 'portfolio_link' ?>
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
    <? elseif ($banner == 'portfolio_link') : ?>
        <p class="userPreview__box--btn">
            <a href="#" class="eBtn--pink eBtn--big">
                Портфолио и достижения
            </a>
        </p>
    <? endif ?>
</div>