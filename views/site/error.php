<?php

use yii\helpers\Html;

$this->title = $name;

?>

<section class="error">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="error__title app__title"><?= Yii::t('app', 'Ошибка {number}', ['number' => $exception->statusCode]) ?></h1>
                <div class="error__subtitle fz1"><?= nl2br(Html::encode($message)) ?></div>
                <div class="error__text">
                    <?= Yii::t('app', 'Откройте {the_homepage} сайта и попробуйте самостоятельно найти нужную вам страницу.', [
                        'the_homepage'=>Html::a(Yii::t('app', '{open} главную страницу', ['open'=>'']), ['/site/index']),
                    ]) ?>
                    <?= Yii::t('app', 'Или кликните кнопку {back} вашего браузера, чтобы вернуться к предыдущей странице.', [
                        'back' => Html::a(Yii::t('app', 'Назад (Back)'), 'javascript:history.back()'),
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</section>
