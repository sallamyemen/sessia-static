<?php

namespace app\services\lang;

use Symfony\Component\Finder\Finder;
use yii\helpers\Url;

class LangTranslationService
{
    public function messagesOnline($category)
    {
        $path = Url::to('@app');
        $messages = [];

        $stringPattern =
            "[^\w]".                                        // Must not have an alphanumeric before real method
            'Yii::t'.                                       // Must start with one of the functions
            "\(\s*".                                        // Match opening parenthesis
            "'$category', (?P<quote>['\"])".                      // Match " or ' and store in {quote}
            "(?P<string>(?:\\\k{quote}|(?!\k{quote}).)*)".  // Match any string that can be {quote} escaped
            "\k{quote}".                                    // Match " or ' previously matched
            "\s*[\),]";                                     // Close parentheses or new parameter

        // Find all PHP + Twig files in the app folder, except for storage
        $finder = new Finder();
        $finder->in($path)
            ->exclude(['assets','auth','components','config','messages','repositories','runtime','vendor','web'])
            ->name('*.php')
            ->files();

        foreach ($finder as $file) {
            if (!preg_match("(views/auth|views/news/form|admin.php|Country.php|Lang.php|Ticket.php)", $file->getRelativePathname())) {
                if (preg_match("(Yii::t)", $file->getContents())) {
                    if (preg_match_all("/$stringPattern/siU", $file->getContents(), $matches)) {
                        foreach ($matches['string'] as $key) {
                            $messages[] = $key;
                        }
                    }
                }
            }
        }

        $messages = array_unique($messages);

        sort($messages);

        return $messages;
    }
}
