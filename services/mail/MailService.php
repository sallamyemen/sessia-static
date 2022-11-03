<?php

namespace app\services\mail;

use Yii;

class MailService
{
    public function sendMail($path = null, $params, $from = null, $to = null, $subject, $htmlLayouts = null)
    {
        if (empty($from)) {
            $from = [Yii::$app->params['email-noreply'] => 'No-Reply'];
        }

        $message = Yii::$app->mailer
            ->compose(
                [
                    'html' . $htmlLayouts => $path . '-html',
                    'text' => $path . '-text'
                ],
                $params
            )
            ->setFrom($from)  // От кого
            ->setSubject($subject); // Тема

        // Прикреплённый файл
        if (empty($to)) {
            if (!empty($params['file'])) {
                $message->attach($params['file']);
            }
        }

        // Кому
        if (empty($to)) {
            if (isset($params['name']) && $params['name'] === 'Test') {
                $message
                    ->setTo(['vic.dekh@gmail.com'])
                    ->send();
            } else {
                $message
                    ->setTo([
                        Yii::$app->params['email-info'] => Yii::$app->params['name'],
                        'anna@freedomgroupint.com',
                        'andrey.podshivalov@freedomgroupint.com',
                    ])
                    ->send();
            }
        } else {
            $message
                ->setTo($to)
                ->send();
        }

        if (!$message) {
            throw new \RuntimeException('Sending error.');
        }
    }
}
