<?php

namespace app\components\lang;

use yii\web\UrlManager;
use app\entities\Language;

class LangUrlManager extends UrlManager
{
    public function createUrl($params)
    {
        if (isset($params['lang_id'])) {
            // Если указан идентификатор языка, то делаем попытку найти язык в БД,
            // иначе работаем с языком по умолчанию
            $language = Language::getDefaultLang();
            foreach (Language::getAll() as $val) {
                if ($val->id === $params['lang_id']) {
                    $language = $val;
                    break;
                }
            }
            unset($params['lang_id']);
        } else {
            // Если не указан параметр языка, то работаем с текущим языком
            $language = Language::getCurrent();
        }

        // Получаем сформированный URL(без префикса идентификатора языка)
        $url = parent::createUrl($params);

        // Добавляем к URL префикс - буквенный идентификатор языка
        return str_replace("/en", "", "/" . $language->url) . $url;
    }
}
