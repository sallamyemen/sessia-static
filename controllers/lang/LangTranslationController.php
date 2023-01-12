<?php

namespace app\controllers\lang;

use app\entities\Lang;
use app\services\lang\LangTranslationService;
use yii\helpers\Url;
use yii\web\Controller;

class LangTranslationController extends Controller
{
    public $layout = 'admin';

    private $langTranslationService;

    public function __construct(
        $id,
        $module,
        LangTranslationService $langTranslationService,
        $config = []
    )
    {
        parent::__construct($id, $module, $config);
        $this->langTranslationService = $langTranslationService;
    }

    /**
     * http://sessia.local/lang/lang-translation/table/?lang=1
     */
    public function actionTable(int $lang = 0, string $category = 'app')
    {
        $langDefault = Lang::getDefaultLocale();
        $lang = Lang::getAll()[$lang];

        $messages = $this->langTranslationService->messagesOnline($category);
        $translations = include(Url::to('@webroot/../messages/' . $lang->locale . '/' . $category . '.php'));

        return $this->renderFile('@app/views/lang/lang-translation/table.php', [
            'category' => $category,
            'lang' => $lang,
            'langDefault' => $langDefault,
            'messages' => $messages,
            'translations' => $translations,
        ]);
    }
}
