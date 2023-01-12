<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

?>

<section class="project-ume-1" style="background-image: url('<?= Url::to('@web/storage/project/ume/bg-1.svg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 info-parent">
                <div class="project-ume-1__image "style="background-image: url('<?= Url::to('@web/storage/project/ume/image-1-3.png?v=1') ?>')"></div>
                <div class="project-ume-1__image dog-hand" style="background-image: url('<?= Url::to('@web/storage/project/ume/image-1-2.png?v=1') ?>')"></div>
            </div>

        </div>
    </div>
</section>

<section class="project-ume-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="project-ume-2__image wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/ume/image-2-1.png?v=1') ?>')"></div>
            </div>
            <div class="info-flex">
                <div class="col-lg-6 info wow fadeInDown">
                    <div class="info-img"><img src="<?= Url::to('@web/storage/project/ume/image-2-2.png?v=1') ?>" alt=""></div>
                </div>
                <div class="col-lg-6"><p class="project-ume-2__text"><?= Yii::t('app', 'Приложение, благодаря которому владелец и питомец смогут лучше понимать друг друга, с функционалом онлайн-магазина, элементами соцсети, интегрированной программой лояльности и картой услуг для питомцев') ?></p></div>
            </div>
        </div>
    </div>
</section>

<section class="project-ume-3" style="background-image: url('<?= Url::to('@web/storage/project/ume/bg-3-1.svg?v=1') ?>'),
                                                        url('<?= Url::to('@web/storage/project/ume/bg-3-2.svg?v=1') ?>')   ">
    <div class="container">
        <div class="row project-ume-3__row-img">
            <div class="project-ume-3__image wow fadeInDown">
                <img src="<?= Url::to('@web/storage/project/ume/image-3-1.png?v=1') ?>" alt="">
            </div>
            <div class="project-ume-3__flex wow fadeInDown">
                <p class="project-ume-3__text-big project-ume-3__left">
                    <?= Yii::t('app', 'UME — {br}это премиальные корма с добавлением гипоаллергенного белка насекомых и корня шестилетнего белого императорского женьшеня', ['br' => '<br>']) ?>
                </p>
                <p class="project-ume-3__text-small project-ume-3__right">
                    <?= Yii::t('app', 'Проект стартует в РФ с 2022 г.
                    До 2025 года запланировал выход на рынки 10 стран, включая государства ЕС и СНГ, Вьетнам и Сингапур') ?>
                    </p>
            </div>
        </div>
    </div>
</section>

<section class="project-ume-4" style="background-image: url('<?= Url::to('@web/storage/project/ume/bg-4.svg?v=1') ?>') ">
    <div class="container">
        <div class="row project-ume-4__row-1 wow fadeInUp">
            <div class="project-ume-4__text-left">
                <p class="project-ume-4__text-title"><?= Yii::t('app', 'Соцсеть') ?></p>
                <p class="project-ume-4__text-info"><?= Yii::t('app', 'приглашайте друзей своего питомца и ведите ленту с его постами') ?></p>
            </div>
            <div class="project-ume-4__phone-1">
                <img src="<?= Url::to('@web/storage/project/ume/image-4-1.png?v=1') ?>" alt="">
            </div>
            <div class="project-ume-4__text-right">
                <p class="project-ume-4__text-title"><?= Yii::t('app', 'Маркетплейс') ?></p>
                <p class="project-ume-4__text-info"><?= Yii::t('app', 'покупайте с выгодой премиальные продукты для питомцев') ?></p>
            </div>
            <div class="project-ume-4__1st-flex"></div>
        </div>
        <div class="row project-ume-4__row-2 wow fadeInUp">
            <div class="project-ume-4__phone-2">
                <img src="<?= Url::to('@web/storage/project/ume/image-4-3.png?v=1') ?>" alt="">
            </div>
            <div class="project-ume-4__info-right">
                <div class="project-ume-4__image-right">
                    <img src="<?= Url::to('@web/storage/project/ume/image-4-2.png?v=1') ?>" alt="">
                </div>
                <p class="project-ume-4__text-title"><?= Yii::t('app', 'Программа лояльности') ?></p>
                <p class="project-ume-4__text-info"><?= Yii::t('app', 'получайте бонусы за покупки и подписки, накапливайте баллы  UME, повышайте статус и получайте дополнительные  услуги для питомца') ?></p>
            </div>
        </div>
        <div class="row project-ume-4__row-3 wow fadeInUp">
            <div class="project-ume-4__phone-3">
                <img src="<?= Url::to('@web/storage/project/ume/image-4-4.png?v=1') ?>" alt="">
            </div>
            <div class="project-ume-4__info-left">
                <p class="project-ume-4__text-title"><?= Yii::t('app', 'Консьерж') ?></p>
                <p class="project-ume-4__text-info"><?= Yii::t('app', 'быстро находите профессиональные зооуслуги и сервисы') ?></p>
            </div>
        </div>
        <div class="row project-ume-4__row-4 wow fadeInUp">
            <div class="project-ume-4__phone-4">
                <img src="<?= Url::to('@web/storage/project/ume/image-4-5.png?v=1') ?>" alt="">
            </div>
            <div class="project-ume-4__info-right-2">
                <p class="project-ume-4__text-title"><?= Yii::t('app', 'Документы') ?></p>
                <p class="project-ume-4__text-info"><?= Yii::t('app', 'храните все документы в одном месте и держите их всегда под рукой') ?></p>
            </div>
        </div>
    </div>
</section>

<section class="project-ume-5" style="background-image: url('<?= Url::to('@web/storage/project/ume/bg-5.svg?v=1') ?>') ">
    <div class="container">
        <div class="project-ume-5__rows">
            <p class="project-ume-5__text-info wow fadeInDown"><?= Yii::t('app', 'Приложение UME помогает лучше{br}понимать своих четвероногих друзей{br}и подбирать для них всё самое лучшее', ['br' => '<br>']) ?></p>
            <p class="project-ume-5__text-big wow fadeInDown"><?= Yii::t('app', 'Ведь они{br}совсем как мы', ['br' => '<br>']) ?></p>
            <div class="project-ume-5__stores wow fadeInDown">
                <div class="project-ume-5__android">
                    <a href="#!"><img src="<?= Url::to('@web/storage/project/icon-google.svg?v=1') ?>" alt="android"></a>
                </div>
                <div class="project-ume-5__apple">
                    <a href="#!"><img src="<?= Url::to('@web/storage/project/icon-apple.svg?v=1') ?>" alt="apple"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$js = <<<JS

new WOW().init();

JS;
$this->registerJs($js, View::POS_END);