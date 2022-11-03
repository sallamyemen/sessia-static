<?php

use app\assets\AppOldAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppOldAsset::register($this);

?>

<?php $this->beginContent('@app/views/layouts/main.php') ?>

<?= $content ?>

<?php $this->endContent() ?>
