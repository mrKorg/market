<div class="masterPreview">
    <? if ($self) : ?>
    <a href="#" class="masterPreview__increase">
        <svg width="23px" height="20px">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-increase"></use>
        </svg>
        <span>
            повысить
        </span>
    </a>
    <? endif ?>
    <div class="masterPreview__box row">
        <div class="col-xs-12 last-lg last-xl">
            <p class="masterPreview__name">
                <a href="#">
                    Карина Лошадкина
                </a>
            </p>
        </div>
        <div class="col-xs-12">
            <div class="masterPreview__row">
                <p class="masterPreview__label">
                    <strong>
                        3467
                    </strong>
                    <span>
                        рейтинг
                    </span>
                </p>
                <p class="masterPreview__avatar">
                    <a href="#">
                        <img src="<?= HTTP ?>/assets/images/placeholder-user.png" alt="">
                    </a>
                </p>
                <p class="masterPreview__icon">
                    <span>
                        <img src="<?= HTTP ?>/assets/images/test-icon.jpg" alt="">
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="masterPreview__comments">
        <div class="row middle-xs center-xs">
            <div class="col-xs-6">
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
            <div class="col-xs-6">
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
        </div>
    </div>
    <div class="masterPreview__gallery">
        <div class="row">
            <? for ($image = 0; $image < 3; $image++) : ?>
                <div class="col-xs-4">
                    <a href="#">
                        <img src="<?= HTTP ?>/assets/images/demo-image.jpg" alt="">
                    </a>
                </div>
            <? endfor ?>
        </div>
    </div>
</div>