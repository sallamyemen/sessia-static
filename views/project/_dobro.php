<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
use app\assets\AppOldAsset;

switch(Yii::$app->language) {
    case "en-US": $path = "@web/storage/project/translate/dobro-en/"; $class = "eng-lang";break;
    case "de-DE": $path = "@web/storage/project/translate/dobro-en/"; $class = "de-lang";break;
    case "vi-VN": $path = "@web/storage/project/translate/dobro-en/"; $class = "vi-lang";break;
    default: $path = "@web/storage/project/dobro/"; $class = ""; break;
}

?>

<section class="dobro-1" style="background-image: url('<?= Url::to($path . 'bgr.svg?v=1')?>')">
    <div class="container">
        <div class="row dobro-1__row">
            <div class="dobro-1__text-big">
                <?= Yii::t('app', 'Добро.') ?><span><?= Yii::t('app', 'Будильник') ?></span>
            </div>
        </div>
        <div class="row dobro-1__columns" >
            <div class="offset-lg-1 dobro-1__image-1 wow fadeInDown">
                <img src="<?= Url::to($path . 'image-1-1.png?v=1') ?>" alt="">
            </div>
            <div class="dobro-1__text">
                <?= Yii::t('app', 'Это мобильное приложение помогает сделать первые шаги в благотворительности и превратить добрые дела в полезную привычку') ?>
            </div>
        </div>
        <div class="row dobro-1__single-phone">
            <div class="dobro-1__image-2 wow fadeInDown" data-wow-delay="1s">
                <img src="<?= Url::to($path . 'image-1-2.png?v=1') ?>" alt="">
            </div>
        </div>
        <div class="dobro-1__wrap" style="background-image: url('<?= Url::to($path.'bg-4h.svg?v=1')?>')">
            <div class="col-lg-8 dobro-1__text-info">
                <?= Yii::t('app', 'Добро. Будильник — социальный проект фонда поддержки благотворительности «Взрослеем вместе»') ?>
            </div>
            <div class="col-lg-7 dobro-1__text-small">
                <?= Yii::t('app', 'Его цель — увеличить долю людей, которые занимаются благотворительностью на регулярной основе, и суммарный объем пожертвований, упростить и автоматизировать этот процесс.') ?>
            </div>
        </div>
    </div>
</section>

<section class="dobro-2">
    <object data="<?= Url::to($path . 'image-2-1.svg?v=1')?>" type="image/svg+xml" width="100%"  class="mylogo"></object>
    <div class=" dobro-2__ccontainer" style="background-image: url('<?= Url::to($path.'bg-3h.svg?v=1')?>'),
            url('<?= Url::to($path.'bg-4.svg?v=1')?>')">
        <div class="container">
            <div class="dobro-2__wrap">
                <div class="col-lg-7 dobro-2__text-big dobro-2__<?=$class?>">
                    <?= Yii::t('app', 'Как это {br}работает', ['br' => '<br>']) ?>
                </div>
                <div class="col-lg-5  dobro-2__text-info">
                    <ul>
                        <li><?= Yii::t('app', 'Настройте будильник и укажите {br} сумму для пожертвований', ['br' => '<br>']) ?></li>
                        <li><?= Yii::t('app', 'Выберите благотворительный фонд — {br} в приложении их более 200', ['br' => '<br>']) ?></li>
                        <li><?= Yii::t('app', 'Отложили будильник? Указанная сумма {br} будет перечислена автоматически', ['br' => '<br>']) ?></li>
                        <li><?= Yii::t('app', 'Установите даты для пожертвований {br} в календаре добрых дел', ['br' => '<br>']) ?></li>
                        <li><?= Yii::t('app', 'Следите за статистикой вашей благотворительности в личном {br} кабинете', ['br' => '<br>']) ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dobro-3" style="background-image: url('<?= Url::to($path . 'bg-7.svg?v=1')?>')">
    <div class="container">
        <div class="dobro-3__text-big">
            <?= Yii::t('app', 'Время правильных {br}поступков', ['br' => '<br>']) ?>
        </div>
        <div class="dobro-3__text">
            <?= Yii::t('app', 'Установите Добро. Будильник {br}и начинайте каждый день с добрых дел!', ['br' => '<br>']) ?>
        </div>
        <div class="dobro-3__stores wow fadeInDown">
            <div class="dobro-3__link">
                <?= Html::a('', '#!', ['class' => 'project__link project__link_site', 'target' => '_blank']) ?>
            </div>
            <div class="project__hr"></div>
            <div class="dobro-3__android">
                <?= Html::a('', 'https://play.google.com/store/apps/details?id=com.sessia.alarm', ['class' => 'project__link project__link_google', 'target' => '_blank']) ?>
            </div>
            <div class="project__hr"></div>
            <div class="dobro-3__apple">
                <?= Html::a('', '#!', ['class' => 'project__link project__link_apple', 'target' => '_blank']) ?>
            </div>
        </div>

    </div>
</section>
<?php
$js = <<<JS

new WOW().init();

JS;
$this->registerJs($js, View::POS_END);