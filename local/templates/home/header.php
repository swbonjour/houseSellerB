<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<?php
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
          Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/app.js');
          Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    ?>
</head>
<body>
    <div class="header__wrapper" id="headerWrapper">
        <header class="header" id="header">
        <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="logo" class="logo">
            <nav class="header__navigation">
                <ul class="header__navigation__list">
                    <li class="header__navigation__item">
                        <p>On Sale</p>
                    </li>
                    <li class="header__navigation__item">
                        <p>For Rent</p>
                    </li>
                    <li class="header__navigation__item">
                        <p>New Residential Project</p>
                    </li>
                    <li class="header__navigation__item">
                        <p>Property News</p>
                    </li>
                </ul>
            </nav>
            <nav class="header__burger">
                <div class="header__burger-button" id="burgerButton">
                    <div class="header__burger-button-one" id="burgerLineOne"></div>
                    <div class="header__burger-button-two" id="burgerLineTwo"></div>
                    <div class="header__burger-button-three" id="burgerLineThree"></div>
                </div>
            </nav>
        </header>
        <div class="header__burger-menu" id="burgerMenu">
            <div class="header__burger-menu__item">
                <p class="header__burger-menu__item-text" id="burgerText">On Sale</p>
            </div>
            <div class="header__burger-menu__item">
                <p class="header__burger-menu__item-text" id="burgerText">For Rent</p>
            </div>
            <div class="header__burger-menu__item">
                <p class="header__burger-menu__item-text" id="burgerText">New Residential Project</p>
            </div>
            <div class="header__burger-menu__item">
                <p class="header__burger-menu__item-text" id="burgerText">Property News</p>
            </div>
        </div>
    </div>