<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

?>

<section class="project-kicksback-1" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/bg-1.svg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="project-kicksback-1__title" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/logo.svg?v=1') ?>')"></div>
                <div class="project-kicksback-1__subtitle wow fadeInDown">
                    <?= Yii::t('admin', 'Business') ?>
                </div>
            </div>
        </div>
        <div class="row project-kicksback-1__description">
            <div class="col-xl-3 offset-xl-1 col-lg-4">
                <div class="project-kicksback-1__text-1 wow fadeInDown">
                    <?= Yii::t('app', 'Больше {br}никаких {br}посредников {br}и&nbsp;предоплаты {br}за&nbsp;рекламу', ['br' => '<br>']) ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="project-kicksback-1__image-container">
                    <div class="project-kicksback-1__image wow fadeIn" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/image-1.png?v=1') ?>')"></div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-4">
                <div class="project-kicksback-1__text-2 wow fadeInDown">
                    <?= Yii::t('app', 'На&nbsp;основе умных алгоритмов {firstline} угадывает желания клиентов и&nbsp;показывает заведения, товары и&nbsp;услуги, которые интересны именно&nbsp;иму', [
                        'firstline' => '<span>FIRSTLINE</span>',
                    ]) ?>
                </div>
                <div class="project-kicksback-1__text-3 wow fadeInDown">
                    <?= Yii::t('app', 'KICKSBACK дает возможность каждому бизнесу легально получить аналитические данные конкурентов, использовать собственные кассовые чеки для сохранения текущих клиентов и&nbsp;получения новых с&nbsp;уникальной платформой рекомендаций FIRSTLINE') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-kicksback-2" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/bg-2.png?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
                <div class="project-kicksback-2__title wow fadeInDown 1">
                    <?= Yii::t('app', 'Что такое кикcбэк?') ?>
                </div>
                <div class="project-kicksback-2__text wow fadeInDown">
                    <?= Yii::t('app', 'Это бонус, который выплачивается клиенту за&nbsp;приведенного друга. Вы&nbsp;создаете в&nbsp;нашем приложении программу лояльности, и&nbsp;число ваших постоянных клиентов начинает быстро расти.') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-kicksback-3" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/bg-3.jpg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="project-kicksback-3__subtitle wow fadeInDown">
                    <?= Yii::t('app', 'Успешный бизнес {br}вместе с&nbsp;приложением', ['br' => '<br>']) ?>
                </div>
                <div class="project-kicksback-3__title wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/kicksback/image-3.svg?v=1') ?>')"></div>
                <div class="project-kicksback-3__info">
                    <div class="project-kicksback-3__links wow fadeInDown">
                        <?= Html::a('', 'https://kicksback.app/', ['class' => 'project-kicksback-3__link project-kicksback-3__link_site', 'target' => '_blank']) ?>
                        <div class="project-kicksback-3__hr"></div>
                        <?= Html::a('', 'https://play.google.com/store/apps/details?id=com.sessia.kickbacks', ['class' => 'project-kicksback-3__link project-kicksback-3__link_google', 'target' => '_blank']) ?>
                        <div class="project-kicksback-3__hr"></div>
                        <?= Html::a('', 'https://apps.apple.com/app/kicksback-cashback-and-gifts/id1546115424', ['class' => 'project-kicksback-3__link project-kicksback-3__link_apple', 'target' => '_blank']) ?>
                    </div>
                    <div class="project-kicksback-3__text wow fadeInDown">
                        <?= Yii::t('app', 'Бесплатное приложение для&nbsp;привлечения новых клиентов и&nbsp;увеличения лояльной аудитории') ?>
                    </div>
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
