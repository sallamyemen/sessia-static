<?php

use app\widgets\langswitcher\LangSwitcher;
use yii\helpers\Url;
use yii\web\View;

$this->title = 'SESSIA. GET IT RIGHT';

?>

<?= $this->renderFile('@app/views/project/_' . $project . '.php') ?>


<?php

$js = <<<JS

JS;
$this->registerJs($js, View::POS_READY);
