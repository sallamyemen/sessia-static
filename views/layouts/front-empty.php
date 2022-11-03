<?php

use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>

<?php $this->beginContent('@app/views/layouts/main.php') ?>

<?= $content ?>

<?php $this->endContent() ?>
