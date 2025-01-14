<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

switch(Yii::$app->language) {
    case "en-US": $path = "@web/storage/project/translate/nrk-en/"; break;
    case "de-DE": $path = "@web/storage/project/translate/nrk-en/"; break;
    case "vi-VN": $path = "@web/storage/project/translate/nrk-en/"; break;
    default: $path = "@web/storage/project/nrk/"; break;
}

?>

<section class="project-nrk-1" style="background-image: url('<?= Url::to('@web/storage/project/nrk/bg-1.svg?v=1') ?>')">
    <div class="container">
        <div class="row project-nrk-1__wrap">
            <div class="project-nrk-1__colomn-1" >
                <div class="project-nrk-1__logo-image wow fadeInUp">
                    <img src="<?= Url::to('@web/storage/project/nrk/image-1-1.png?v=1') ?>" alt="">
                </div>
                <div class="project-nrk-1__text">
                    <div class="project-nrk-1__text-info">
                        <?= Yii::t('app', 'NRK87.— это авторская techwear одежда с интегрированными GPS-трекерами, помогающими найти человека и быть с ним на связи') ?>
                    </div>
                    <div class="project-nrk-1__text-info">
                        <?= Yii::t('app', 'NRK87. создает лимитированные коллекции, руководствуясь принципами личной безопасности, ответственным отношением к Земле и планами освоения Марса') ?>
                    </div>
                </div>
            </div>
            <div class="project-nrk-1__colomn-2">
                <div class="project-nrk-1__text-gradient">
                    <?= Yii::t('app', 'Приложение {br} для клиентов бренда с функционалом онлайн-магазина и сервисом поддержки GPS-трекер', ['br' => '<br>']) ?>
                </div>
                <div class="project-nrk-1__logo-phone wow fadeInUp">
                    <img src="<?= Url::to($path .'image-1-2.png?v=1') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-nrk-2" style="background-image: url('<?= Url::to('@web/storage/project/nrk/bg-2.svg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 project-nrk-2__wrap wow fadeInUp">
                <div class="project-nrk-2__big-text-image"><?= Yii::t('app', 'Функционал {br}и возможности', ['br' => '<br>']) ?></div>
            </div>
        </div>
        <div class="row project-nrk-2__wrap">
                <div class="project-nrk-2__colomn-1" >
                    <div class="project-nrk-2__image project-nrk-2__phone-1 wow fadeInUp">
                        <img src="<?= Url::to($path .'image-2-1.png?v=1') ?>" alt="">
                    </div>
                    <div class="project-nrk-2__text-1">
                        <div class="project-nrk-2__title-text"><?= Yii::t('app', 'Онлайн-магазин') ?></div>
                        <div class="project-nrk-2__small-text"><?= Yii::t('app', 'с возможностями быстрой покупки, оплаты и отслеживания истории заказов') ?></div>
                    </div>
                    <div class="project-nrk-2__text-3">
                        <div class="project-nrk-2__title-text"><?= Yii::t('app', 'Приватные звонки для связи с обладателем одежды NRK87., оснащенной GPS-трекером') ?></div>
                    </div>
                    <div class="project-nrk-2__image project-nrk-2__phone-4 wow fadeInUp">
                       <img src="<?= Url::to($path .'image-2-3.png?v=1') ?>" alt="">
                    </div>
                </div>
                <div class="project-nrk-2__colomn-2">
                    <div class="project-nrk-2__text-2">
                        <div class="project-nrk-2__title-text"><?= Yii::t('app', 'GPS-трекинг') ?></div>
                        <div class="project-nrk-2__small-text"><?= Yii::t('app', 'с картой для отслеживания устройства по геопозиции и истории передвижений') ?></div>
                    </div>
                    <div class="project-nrk-2__image project-nrk-2__phone-2 wow fadeInUp">
                        <img src="<?= Url::to($path .'image-2-2.png?v=1') ?>" alt="">
                    </div>
                    <div class="project-nrk-2__image project-nrk-2__phone-3 wow fadeInUp">
                        <img src="<?= Url::to($path .'image-2-4.png?v=1') ?>" alt="">
                    </div>
                    <div class="project-nrk-2__text-4">
                        <div class="project-nrk-2__title-text"><?= Yii::t('app', 'SOS-кнопка') ?></div>
                        <div class="project-nrk-2__small-text"><?= Yii::t('app', 'для оперативного реагирования на экстренную ситуацию и вызова помощи') ?></div>
                    </div>
                </div>
        </div>
        <div class="col-lg-12 project-nrk-2__text-bottom-wrap wow fadeInUp">
            <div class="project-nrk-2__big-text project-nrk-2__text-bottom"><?= Yii::t('app', 'Безопасность{br}под контролем{br}', ['br' => '<br>']) ?><span>24/7</span></div>
        </div>
    </div>
</section>

<section class="project-nrk-3" style="background-image: url('<?= Url::to('@web/storage/project/nrk/bg-3.svg?v=1') ?>')">
    <div class="container">

            <div class="project-nrk-3__text wow fadeInUp">
                <?= Yii::t('app', 'С приложением NRK87. {br} вы не только сможете подчеркнуть индивидуальность своего стиля, но и быть уверенными в безопасности близких людей', ['br' => '<br>']) ?>

            </div>
            <div class="project-nrk-3__stores wow zoomIn">
                <div class="project-nrk-3__link">
                    <?= Html::a('', 'https://nrk87.com', ['class' => 'project__link project__link_site', 'target' => '_blank']) ?>
                </div>
                <div class="project__hr"></div>
                <div class="project-nrk-3__android">
                    <?= Html::a('', 'https://play.google.com/store/apps/details?id=com.sessia.nrk87', ['class' => 'project__link project__link_google', 'target' => '_blank']) ?>
                </div>
                <div class="project__hr"></div>
                <div class="project-nrk-3__apple">
                    <?= Html::a('', 'https://apps.apple.com/ge/app/nrk87/id1602546975', ['class' => 'project__link project__link_apple', 'target' => '_blank']) ?>
                </div>
            </div>

    </div>
</section>

<?php

$js = <<<JS

new WOW().init();

JS;
$this->registerJs($js, View::POS_END);