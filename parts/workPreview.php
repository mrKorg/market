<div class="workPreview">
    <div class="workPreview__box">
        <a href="" class="workPreview__img">
            <img src="<?= HTTP ?>/assets/images/demo-product-preview.jpg" alt="">
        </a>
    </div>
    <? if (isset($user) && $user) : ?>
    <a href="#" class="workPreview__user">
        <img src="<?= HTTP ?>/assets/images/placeholder-user.png" alt="">
        <span class="text">
            Martin Strba PRO
        </span>
    </a>
    <? endif ?>
</div>