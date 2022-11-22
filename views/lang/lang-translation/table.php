<?php

$this->title = Yii::t('admin', 'Перевод');

?>

<table style="width:100%;">
    <tr>
        <th colspan="2"><h1><?= $category ?></h1></th>
    </tr>
    <tr>
        <th style="width:46%;">ru-RU</th>
        <th style="width:46%;"><?= $lang->locale ?></th>
    </tr>
    <?php foreach ($messages as $message) { ?>
    <tr>
        <td style="<?= empty($translations[$message]) ? 'color: red;' : '' ?>"><pre style="white-space:pre-wrap;margin:1px;"><?= htmlentities($message, ENT_COMPAT, "UTF-8") ?></pre></td>
        <td><pre style="white-space:pre-wrap;margin:1px;"><?= $translations[$message] ?? '' ?></pre></td>
    </tr>
    <?php } ?>
</table>
