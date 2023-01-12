<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;

?>

<section class="project-coffeecell-1" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/bg-1.svg?v=1') ?>')">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="project-coffeecell-1__title wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/logo.svg?v=1') ?>')"></div>
            </div>
        </div>
        <div class="row project-coffeecell-1__description">
            <div class="col-lg-8 offset-lg-2">
                <div class="project-coffeecell-1__info wow fadeInDown">
                    <?= Yii::t('app', 'Официальное приложение для&nbsp;клиентов бренда с&nbsp;функционалом онлайн-магазина, элементами соцсети и&nbsp;интегрированной программой привилегий') ?>
                </div>
                <div class="project-coffeecell-1__image project-coffeecell-1__image_1 wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-1.png?v=1') ?>')"></div>
            </div>
            <div class="col-lg-6">
                <div class="project-coffeecell-1__text-1 wow fadeInDown">
                    <?= Yii::t('app', 'COFFEECELL&nbsp;&mdash; это натуральные продукты и&nbsp;напитки с&nbsp;6-летним белым императорским женьшенем по&nbsp;уникальной рецептуре') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="project-coffeecell-1__text-2-container">
                    <div class="project-coffeecell-1__text-2 wow fadeInDown">
                        <?= Yii::t('app', 'Создан в&nbsp;2007 году и&nbsp;насчитывает более 160&nbsp;000 клиентов в&nbsp; США, Вьетнаме, Германии, Австрии, Узбекистане и&nbsp;других странах Европы и&nbsp;Азии.') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-coffeecell-2" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/bg-2.svg?v=1') ?>')">
    <div class="container">
        <div class="project-coffeecell-2__row-1">
            <div class="row">
                <div class="col-lg-3 offset-lg-5">
                    <div class="project-coffeecell-2__image-1 wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-2-1.png?v=1') ?>')"></div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="project-coffeecell-2__title-first wow fadeInDown">
                        <?= Yii::t('app', 'Маркетплейс') ?>
                    </div>
                    <div class="project-coffeecell-2__text wow fadeInDown">
                        <?= Yii::t('app', 'Покупать с&nbsp;выгодой{br} женьшень и&nbsp;продукты{br} на&nbsp;его основе', ['br' => '<br>']) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-coffeecell-2__row-2">
            <div class="project-coffeecell-2__image-2 wow fadeInDown tablet mobile" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-2-2.png?v=1') ?>')"></div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="project-coffeecell-2__title wow fadeInDown">
                        <?= Yii::t('app', 'Онлайн-отчеты') ?>
                    </div>
                    <div class="project-coffeecell-2__text wow fadeInDown">
                        <?= Yii::t('app', 'Следите за&nbsp;всеми{br} операциями{br} и активностью{br} в&nbsp;приложении', ['br' => '<br>']) ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project-coffeecell-2__image-2 wow fadeInDown desktop laptop" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-2-2.png?v=1') ?>')"></div>
                </div>
            </div>
        </div>
        <div class="project-coffeecell-2__row-3">
            <div class="row">
                <div class="col-lg-3 offset-lg-6">
                    <div class="project-coffeecell-2__image-3 wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-2-3.png?v=1') ?>')"></div>
                </div>
                <div class="col-lg-3">
                    <div class="project-coffeecell-2__title wow fadeInDown">
                        <?= Yii::t('app', 'Программа{br} лояльности', ['br' => '<br>']) ?>
                    </div>
                    <div class="project-coffeecell-2__text wow fadeInDown">
                        <?= Yii::t('app', 'Получать бонусы{br} за&nbsp;свои покупки{br} и рекомендации', ['br' => '<br>']) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-coffeecell-2__row-4">
            <div class="project-coffeecell-2__image-4 wow fadeInDown tablet mobile" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-2-4.png?v=1') ?>')"></div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="project-coffeecell-2__title wow fadeInDown">
                        <?= Yii::t('app', 'Новостная лента') ?>
                    </div>
                    <div class="project-coffeecell-2__text wow fadeInDown">
                        <?= Yii::t('app', 'Первыми{br} узнавать об&nbsp;акциях{br} и&nbsp;скидках бренда', ['br' => '<br>']) ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="project-coffeecell-2__image-4 wow fadeInDown desktop laptop" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-2-4.png?v=1') ?>')"></div>
                </div>
            </div>
        </div>
        <div class="project-coffeecell-2__row-5">
            <div class="row">
                <div class="col-lg-3 offset-lg-6">
                    <div class="project-coffeecell-2__image-5 wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-2-5.png?v=1') ?>')"></div>
                </div>
                <div class="col-lg-3">
                    <div class="project-coffeecell-2__title wow fadeInDown">
                        <?= Yii::t('app', 'Кошелек', ['br' => '<br>']) ?>
                    </div>
                    <div class="project-coffeecell-2__text wow fadeInDown">
                        <?= Yii::t('app', 'Следите за&nbsp;вашим{br} бонусным счетом,{br} снимайте средства', ['br' => '<br>']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-coffeecell-3" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/bg-3.svg?v=1') ?>')">
    <div class="container">
        <div class="project-coffeecell-3__container">
            <div class="row">
                <div class="col-xl-9 col-lg-10">
                    <div class="project-coffeecell-3__title wow fadeInDown">
                        <?= Yii::t('app', 'Универсальный помощник для&nbsp;покупок и&nbsp;общения') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1">
                    <div class="project-coffeecell-3__text wow fadeInDown">
                        <?= Yii::t('app', 'Приложение COFFEECELL помогает клиентам бренда покупать с&nbsp;максимальной выгодой продукты с&nbsp;белым императорским женьшенем, пользоваться преимуществами программы лояльности и&nbsp;раскрывать таланты') ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="project-coffeecell-3__links">
                        <div class="project">
                            <div class="project__links wow fadeInDown">
                                <?= Html::a('', 'https://play.google.com/store/apps/details?id=com.sessia.coffeecell', ['class' => 'project__link project__link_google', 'target' => '_blank']) ?>
                                <div class="project__hr"></div>
                                <?= Html::a('', 'https://apps.apple.com/app/coffeecell/id1643537836', ['class' => 'project__link project__link_apple', 'target' => '_blank']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-coffeecell-3__image-container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-7">
                        <div class="project-coffeecell-3__image wow fadeInDown" style="background-image: url('<?= Url::to('@web/storage/project/coffeecell/image-3.png?v=1') ?>')"></div>
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
