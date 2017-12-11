<div class="reviewPreview">
    <div class="reviewPreview__header">
        <a href="#" class="reviewPreview__avatar">
            <img src="<?= HTTP ?>/assets/images/<?= isset($is_user_reviews) ? 'demo-image.jpg' : 'placeholder-user.png' ?>" alt="">
        </a>
        <p class="reviewPreview__name">
            <a href="#"><?= isset($is_user_reviews) ? 'Название товара' : 'Наталья Лошадкина' ?></a>
        </p>
        <div class="row middle-xs between-xs">
            <div class="col-xs">
                <div class="reviewPreview__rating">
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
                </div>
            </div>
            <div class="col-xs">
                <p class="reviewPreview__date">
                    29.11.2017
                </p>
            </div>
        </div>
    </div>
    <div class="reviewPreview__body">
        <div class="reviewPreview__content">
            Брала 5 номер, от цвета в восторге, от качества тоже! Конечно, светлый тон приходится наносить в несколько слоев, но результат очень радует) Девочки, которые жалуются на несоответствие цвета, смотрите палитру...
        </div>
    </div>
    <div class="reviewPreview__footer">
        <div class="row middle-xs between-xs">
            <div class="col">
                <p class="reviewPreview__status">Покупка подтверждена</p>
            </div>
            <div class="col">
                <a href="#" class="reviewPreview__link">
                    <span class="text">
                        Весь отзыв
                    </span>
                    <span class="arrow">
                        <svg width="6px" height="10px">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xlink:href="#icon-arrowRight"></use>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>

</div>