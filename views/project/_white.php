<?php

use yii\helpers\Url;
use yii\web\View;

switch(Yii::$app->language) {
    case "en-US": $path = "@web/storage/project/translate/ume-en/"; break;
    case "de-DE": $path = "@web/storage/project/translate/ume-en/"; break;
    case "vi-VN": $path = "@web/storage/project/translate/ume-en/"; break;
    default: $path = "@web/storage/project/ume/"; break;
}

$url = '@web/storage/project/white/';


?>
    <section class="white">
        <div class="white__title">
            <?= Yii::t('app', 'Услуга White Label') ?>
        </div>

        <div class="white__text">
            <div class="white__offer-text-1">
                <?= Yii::t('app', 'Sessia предлагает вашему бизнесу персональные Whie Label бизнес-решения и мобильные приложения, сделанные по индивидуальному заказу.') ?>
            </div>

            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Вы сможете управлять своим делом, магазинами и покупателями, пользоваться интернет-эквайрингом и получите доступ к прямому маркетингу своего продукта!') ?>
            </div>

            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Благодаря Sessia, вы сможете создать свой онлайн-магазин с продуктовыми карточками, складом и спецификациями.') ?>
            </div>

            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Воспользуйтесь нашей передовой СРМ системой, чтобы управлять продажами и продвигать ваши продукты!') ?>
            </div>

            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Нужны дополнительные возможности и функции? Наши талантливые разработчики готовы настроить платформу Sessia специально для вашего бизнеса!') ?>
            </div>
            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Свяжитесь с нами по адресу info@sessia.com для личной консультации, и чтобы получить ценовое предложение от нашей команды IT-экспертов.') ?>
            </div>
        </div>

        <div class="pay-footer">
            <div class="pay-footer__sys col-lg-2">
                <img src="<?= Url::to($url.'up.svg') ?>">
            </div>
            <div class="pay-footer__sys col-lg-2">
                <img src="<?= Url::to($url.'payment__visa.svg') ?>">
            </div>
            <div class="pay-footer__sys col-lg-2">
                <img src="<?= Url::to($url.'payment__mastercard.svg') ?>">
            </div>
            <div class="pay-footer__sys col-lg-2">
                <img src="<?= Url::to($url.'payment__paypal.svg') ?>">
            </div>
        </div>
    </section>



<?php

$js = <<<JS

new WOW().init();

JS;
$this->registerJs($js, View::POS_END);