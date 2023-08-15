<?php

use yii\helpers\Url;
use yii\web\View;

switch(Yii::$app->language) {
    case "en-US": $path = "@web/storage/project/translate/ume-en/"; break;
    case "de-DE": $path = "@web/storage/project/translate/ume-en/"; break;
    case "vi-VN": $path = "@web/storage/project/translate/ume-en/"; break;
    default: $path = "@web/storage/project/ume/"; break;
}

$url = '@web/storage/project/white/';


?>
    <section class="white">
        <div class="white__title">
            <?= Yii::t('app', 'Услуга White Label') ?>
        </div>

        <div class="white__text">
            <div class="white__offer-text-1">
                <?= Yii::t('app', 'Sessia предлагает вашему бизнесу персональные Whie Label бизнес-решения и мобильные приложения, сделанные по индивидуальному заказу.') ?>
            </div>

            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Вы сможете управлять своим делом, магазинами и покупателями, пользоваться интернет-эквайрингом и получите доступ к прямому маркетингу своего продукта!') ?>
            </div>

            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Благодаря Sessia, вы сможете создать свой онлайн-магазин с продуктовыми карточками, складом и спецификациями.') ?>
            </div>

            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Воспользуйтесь нашей передовой СРМ системой, чтобы управлять продажами и продвигать ваши продукты!') ?>
            </div>

            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Нужны дополнительные возможности и функции? Наши талантливые разработчики готовы настроить платформу Sessia специально для вашего бизнеса!') ?>
            </div>
            <div class="white__offer-text-2">
                <?= Yii::t('app', 'Свяжитесь с нами по адресу info@sessia.com для личной консультации, и чтобы получить ценовое предложение от нашей команды IT-экспертов.') ?>
            </div>
        </div>

        <div class="white__title">
            <?= Yii::t('app', 'Доступные пакеты') ?>
        </div>
        <details class="white__details">
            <summary class="white__summary">Starter <em>// 5M₽</em> </summary>
            <br>
<!--            <p>--><?//= Yii::t('app', 'Предлагаемые услуги:') ?><!--</p>-->
            <br>
            <p><?= Yii::t('app', 'Наш базовый пакет чтобы начать работу с Kicksback включает все, чтобы привлечь новых клиентов.') ?></p>
            <div class="white__content">
                <ul class="white__list">
                    <li><?= Yii::t('app', 'Авторизация/регистрация клиента по SMS') ?></li>
                    <li><?= Yii::t('app', 'Профайл клиента') ?></li>
                    <li><?= Yii::t('app', 'Брендирование логотипом компании-покупателя') ?></li>
                    <li><?= Yii::t('app', 'Брендирование цветовой гаммой компании-покупателя') ?></li>
                    <li><?= Yii::t('app', 'Интернет-эквайринг от Sessia') ?></li>
                    <li><?= Yii::t('app', 'Программа лояльности: Кешбэк за покупку') ?></li>
                    <li>
                        <?= Yii::t('app', 'CRM:') ?>
                        <ul class="white__sub-list">
                            <li><?= Yii::t('app', 'Настройка витрины одного магазина') ?></li>
                            <li><?= Yii::t('app', 'Настройка профайла одного магазина') ?></li>
                            <li><?= Yii::t('app', 'фильтрация клиентов; поиск клиента и просмотр его профайла') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </details>


        <details class="white__details">
            <summary class="white__summary">Plus <em>// 10M₽</em></summary>
            <br>
<!--            <p>--><?//= Yii::t('app', 'Предлагаемые услуги:') ?><!--</p>-->
            <br>
            <p><?= Yii::t('app', 'Наш пакет Plus включает нашу полезную ленту новостей чтобы быть на связи с клиентами 24/7.') ?></p> <br>
            <p><?= Yii::t('app', 'Starter + следующие функции') ?></p>
            <div class="white__content">
                <ul class="white__list">
                    <li><?= Yii::t('app', 'Социальная сеть для клиента:') ?>
                        <ul class="white__sub-list">
                            <li><?= Yii::t('app', 'новостная лента,') ?></li>
                            <li><?= Yii::t('app', 'писать посты,') ?></li>
                            <li><?= Yii::t('app', 'писать комментарии,') ?></li>
                            <li><?= Yii::t('app', 'дружить,')?></li>
                            <li><?= Yii::t('app', 'лайкать посты,')?></li>
                            <li><?= Yii::t('app', 'подписываться на людей и сообщества,')?></li>
                            <li><?= Yii::t('app', 'блокировать нежелательный контент.')?></li>
                        </ul>
                    </li>
                    <li><?= Yii::t('app', 'Социальная сеть для компании: возможность вести свою ленту, на которую клиент автоматически подписан.') ?></li>
                    <li><?= Yii::t('app', 'Web-версия приложения для клиента с ограниченной функциональностью.') ?></li>
                    <li><?= Yii::t('app', 'Программа лояльности: Киксбэк за рекомендацию.') ?></li>
                    <li><?= Yii::t('app', 'Приглашения: друзей, реферальная программа') ?></li>
                    <li><?= Yii::t('app', 'InApp покупки для клиента:') ?>
                        <ul class="white__sub-list">
                            <li><?= Yii::t('app', 'история и пополнение баланса монет;') ?></li>
                            <li><?= Yii::t('app', 'на монеты которые можно покупать стикеры,') ?></li>
                            <li><?= Yii::t('app', 'Магазин стикеров для клиента') ?></li>
                        </ul>
                    </li>
                    <li><?= Yii::t('app', 'Раздел "кошелек" для клиента') ?></li>
                    <li><?= Yii::t('app', 'Мультиязычность приложения для клиента') ?></li>
                    <li><?= Yii::t('app', 'Отчеты в приложении для клиента') ?></li>
                    <li><?= Yii::t('app', 'Уведомления в приложении для клиента') ?></li>
                </ul>
            </div>
        </details>


        <details class="white__details">
            <summary class="white__summary">Pro <em>// 20M₽</em></summary>
            <br>
<!--            <p>--><?//= Yii::t('app', 'Предлагаемые услуги:') ?><!--</p>-->
            <br>
            <p><?= Yii::t('app', 'Пакет Pro — это наше готовое решение для максимального функционала Kicksback: вознаграждения, календари и управление сотрудниками - все включено. Вы также можете использовать дополнительные функции, как денежные переводы между магазинами!') ?></p>
            <br>
            <p><?= Yii::t('app', 'Plus + следующие функции:') ?></p>
            <div class="white__content">
                <ul class="white__list">
                    <li><?= Yii::t('app', 'Календарь событий от бизнеса в приложении клиента') ?></li>
                    <li><?= Yii::t('app', 'Доступ к бизнес-версии приложения') ?>
                        <ul class="white__sub-list">
                            <li><?= Yii::t('app', 'Настройка профайла компании (или нескольких)') ?></li>
                            <li><?= Yii::t('app', 'Настройка профайла магазина (или нескольких)') ?></li>
                            <li><?= Yii::t('app', 'Управление учётными записями сотрудников компании') ?></li>
                            <li><?= Yii::t('app', 'Перевод денег между магазинами')?></li>
                            <li><?= Yii::t('app', 'POS-материалы')?></li>
                        </ul>
                    </li>
                    <li><?= Yii::t('app', 'Программа лояльности: Подарок клиенту за визит') ?></li>
                    <li><?= Yii::t('app', 'Подключение своего интернет эквайринга. Сейчас доступны:') ?>
                        <ul class="white__sub-list">
                            <li><?= Yii::t('app', 'Тинькофф') ?></li>
                            <li><?= Yii::t('app', 'Газпромбанк') ?></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </details>

        <details class="white__details">
            <summary class="white__summary"><?= Yii::t('app', 'Дополнительные услуги {em}(приобретаются отдельно){cl}', ['em'=>'<em>', 'cl'=>'</em>']) ?></summary>
            <br>
            <p><?= Yii::t('app', 'Нужны дополнительные настройки? Наши талантливые разработчики готовы настроить Kicksback специально для вашего бизнеса!') ?></p>
            <div class="white__content">
                <ul class="white__list">
                    <li><?= Yii::t('app', 'Час разработки доп. функций за 10k₽') ?></li>
                    <li><?= Yii::t('app', 'Дополнительная техническая поддержка от Sessia (при штатной работе приложения)') ?></li>
                    <li><?= Yii::t('app', 'Чат с клиентом') ?></li>
                    <li><?= Yii::t('app', 'возможность 2FA для клиентов') ?></li>
                    <li><?= Yii::t('app', 'Миграция Starter → Plus за 7M₽') ?></li>
                    <li><?= Yii::t('app', 'Миграция Plus → Pro за 14M₽') ?></li>
                </ul>
            </div>
        </details>

        <div class="pay-footer">
            <div class="pay-footer__sys col-lg-2">
                <img src="<?= Url::to($url.'up.svg') ?>">
            </div>
            <div class="pay-footer__sys col-lg-2">
                <img src="<?= Url::to($url.'payment__visa.svg') ?>">
            </div>
            <div class="pay-footer__sys col-lg-2">
                <img src="<?= Url::to($url.'payment__mastercard.svg') ?>">
            </div>
            <div class="pay-footer__sys col-lg-2">
                <img src="<?= Url::to($url.'payment__paypal.svg') ?>">
            </div>
        </div>
    </section>



<?php

$js = <<<JS

new WOW().init();

JS;
$this->registerJs($js, View::POS_END);