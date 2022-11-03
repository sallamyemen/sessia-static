<?php

namespace app\widgets\langswitcher;

use app\entities\Language;
use Yii;
use yii\base\Widget;

class LangSwitcher extends Widget
{
    public function run()
    {
        $langs = Language::getAll();
        $langCurrent = '';
        foreach ($langs as $key => $lang) {
            if ($lang->locale === Yii::$app->language) {
                $langCurrent = $lang->name;
                unset($langs[$key]);
            }
        }

        return $this->render('@app/widgets/langswitcher/views/view.php', [
            'langCurrent' => $langCurrent,
            'langs' => $langs,
        ]);
    }
}
