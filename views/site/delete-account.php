<?php
$this->registerCssFile('@web/front/css/instructions.min.css');
//echo "123";
?>
<section class="intro">
    <h1 class="intro__title"><?= Yii::t('app', 'Инструкция') ?></h1>
    <img class="intro__picture" src="../../storage/delete-instructions/instruction-picture.svg" alt="support team girl next to the computer" />
</section>

<section class="self-service">
    <h2 class="section-title">
        <?= Yii::t('app', 'Удаление аккаунта пользователем{br} {span}через самообслуживание{close}', ['br' => '<br>', 'span' => '<span class="section-title_color_yellow">', 'close' => '</span>']) ?>
    </h2>
    <ol class="instructions">
        <li class="instructions__point instructions__point_color_yellow">
            <?= Yii::t('app', 'Открываем боковое меню и переходим в раздел - настройки.') ?></li>
        <li class="instructions__point instructions__point_color_yellow">
            <?= Yii::t('app', 'В пункте {span}"Безопасность"{close} кликаем на {span}"Удалить учетную запись"{close}.', ['span' =>'<span class="instructions__span">', 'close'=>'</span>']) ?>
        <li class="instructions__point instructions__point_color_yellow">
            <?= Yii::t('app', 'После этого пользователю открывается модальное окно с подтверждением, в котором при нажатии на кнопку {span}"Удалить учетную запись"{close}, аккаунт пользователя удаляется.', ['span' =>'<span class="instructions__span">', 'close'=>'</span>']) ?></li>
    </ol>
</section>
<section class="support">
    <h2 class="section-title">
        <?= Yii::t('app', 'Удаление аккаунта {span}через поддержку{close}', ['span' =>'<span class="section-title_color_purple">', 'close'=>'</span>']) ?>
    </h2>
    <ol class="instructions">
        <li class="instructions__point instructions__point_color_purple">
            <?= Yii::t('app', 'Открываем боковое меню и переходим в раздел - поддержка.') ?>
            </li>
        <li class="instructions__point instructions__point_color_purple">
            <?= Yii::t('app', 'После перехода на страницу с поддержкой, нажимаем на кнопку {span}"Создать новый запрос"{close}.', ['span' =>'<span class="instructions__span">', 'close'=>'</span>']) ?>
        </li>
        <li class="instructions__point instructions__point_color_purple">
            <?= Yii::t('app', 'Нам открывается экран с созданием нового запроса в поддержку, где в категории проблемы необходимо выбрать {span}"Другое"{close} и написать примерно следующий текст: {span}"Хочу удалить свою учетную запись"{close}.', ['span' =>'<span class="instructions__span">', 'close'=>'</span>']) ?></li>
        <li class="instructions__point instructions__point_color_purple">
            <?= Yii::t('app', 'Нажимаем кнопку {span}"Отправить"{close}, после чего сотрудник поддержки в порядке очередности запросов вернется с обратной связью.', ['span' =>'<span class="instructions__span">', 'close'=>'</span>']) ?></li>
        <li class="instructions__point instructions__point_color_purple">
            <?= Yii::t('app', 'Сотрудник поддержки спросить вас о ваших точных намерениях удалить свою учетную запись, так как этот процесс нельзя будет восстановить, после вашего окончательного подтверждения о удаление учетной запись, сотрудник поддержки удалит вашу учетную запись.') ?>

            </li>
    </ol>
</section>