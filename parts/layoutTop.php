<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">

    <?php include(ROOT . '/parts/icons.php') ?>
    <?php include(ROOT . '/parts/meta.php') ?>

    <style type="text/css">
        #page-preloader {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background: #0A0A0A;
            z-index: 100500;
        }

        #page-preloader .spinner {
            width: 194px;
            height: 98px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>

</head>
<body ontouchstart="">

<div id="page-preloader">
    <span class="spinner">
        <svg width="194px" height="97px">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
        </svg>
    </span>
</div>

<?php include(ROOT . '/parts/svgSprite.php') ?>

<div id="front" class="wrapper">

    <?php include(ROOT . '/parts/header.php') ?>
