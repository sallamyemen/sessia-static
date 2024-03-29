<?php $this->beginContent('@app/views/layouts/main.php') ?>

<div class="app">
    <div class="app__wrapper">
        <div class="app__content">
            <?= $content ?>
        </div>
    </div>
    <footer class="app__footer footer">
        <div class="container">
            <div class="row-nav">
<!--                --><?//= Html::a(Html::img(Url::to('@web/front/img/logo.svg?v=1'), ['class' => 'row-nav__logo-img']), ['/site/index'], ['class' => 'row-nav__logo']) ?>
             </div>
        </div>
    </footer>
</div>

<?php $this->endContent() ?>
