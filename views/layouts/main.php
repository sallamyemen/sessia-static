<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Spaceless;

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= Url::to('@web/favicon.ico?v=1') ?>" type="image/x-icon" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php Spaceless::begin() ?>

    <?= $content ?>

<?php Spaceless::end() ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
