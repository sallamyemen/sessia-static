<?php

use yii\helpers\Url;
use yii\web\View;

//dd($langCurrent);die;

switch(Yii::$app->language) {
    case "en-US": $path = "@web/storage/project/translate/ume-en/"; break;
    case "de-DE": $path = "@web/storage/project/translate/ume-en/"; break;
    case "vi-VN": $path = "@web/storage/project/translate/ume-en/"; break;
    default: $path = "@web/storage/project/ume/"; break;
}

$url = '@web/storage/project/white/';


?>
    <section class="white-1 col-lg-12 col-sm-12 col-md-12">
        <div class="white-1__left col-lg-4 col-sm-12 col-md-12">
            <div class="white-1__left-text">
                <?= Yii::t('app', 'Sessia предлагает вашему бизнесу персональные White Label бизнес-решения и мобильные приложения, сделанные по индивидуальному заказу.')?>
            </div>
            <div class="white-1__btn">
                <a href="#form"><?= Yii::t('app', 'Свяжитесь с нами')?></a>
            </div>
        </div>
        <div class="white-1__right col-lg-8 col-sm-12 col-md-12">
            <div class="white-1__h1">
                <?= Yii::t('app', 'Услуга {br}{span}White Label{close}', ['span' => '<span>', 'close' => '</span>', 'br' => '<br>']) ?>
            </div>
            <div class="white-1__columns">
                <div class="white-1__col-1 col-lg-6">
                    <div class="white-1__h2">
                        <?= Yii::t('app', 'Marketplace и отчетность')?>
                    </div>
                    <div class="white-1__text">
                        <?= Yii::t('app', 'Благодаря Sessia, вы сможете создать свой онлайн-магазин с продуктовыми карточками, складом и спецификациями.', ['br' => '<br>'])?>
                    </div><div class="white-1__text">
                        <?= Yii::t('app', 'Управляйте своим делом, магазинами и покупателями, используйте интернет-эквайрингом и получите доступ к прямому маркетингу своего продукта!', ['br' => '<br>'])?>
                    </div>
                </div>
                <div class="white-1__col-2 col-lg-6">
                    <div class="white-1__h2">
                        <?= Yii::t('app', 'CRM-система и дополнительные функции')?>
                    </div>
                    <div class="white-1__text">
                        <?= Yii::t('app', 'Воспользуйтесь нашей передовой CRM- системой, чтобы управлять продажами и продвигать ваши продукты!', ['br' => '<br>'])?>
                    </div> <div class="white-1__text">
                        <?= Yii::t('app', 'Наши талантливые разработчики готовы настроить платформу Sessia специально для вашего бизнеса!', ['br' => '<br>'])?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="white-2">
        <div class="white-2__h1 offset-lg-2">
            <?= Yii::t('app', 'Доступные пакеты') ?>
        </div>
       <div class="white-2__packages">

           <details class="white-2__details">
               <summary class="white-2__summary offset-lg-1">
                   <p class="col-lg-3 white-2__summary_h1" style="padding-left: 0">Starter</p>
                   <p class="col-lg-6 white-2__summary_text"><?= Yii::t('app', 'Базовый пакет чтобы начать работу с Kicksback включает все, чтобы привлечь новых клиентов.') ?></p>
                   <p class="col-lg-3 white-2__summary_plus">
                       <svg class="control-icon control-icon-expand" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                           <line x1="1" y1="21.8462" x2="44" y2="21.8462" stroke="black" stroke-width="2" stroke-linecap="round"/>
                           <line x1="23.1543" y1="1" x2="23.1543" y2="44" stroke="black" stroke-width="2" stroke-linecap="round"/>
                       </svg>
                       <svg class="control-icon control-icon-close" xmlns="http://www.w3.org/2000/svg" width="45" height="3" viewBox="0 0 45 3" fill="none">
                           <line x1="1" y1="1.84619" x2="44" y2="1.84619" stroke="black" stroke-width="2" stroke-linecap="round"/>
                       </svg>
                   </p>
               </summary>
               <div class="white-2__content">
                   <div class="white-2__price">
                       <?= Yii::t('app', '5М₽') ?>
                   </div>
                   <div class="white-2__detail">
                       <div class="white-2__pack-include col-lg-3 offset-1">
                           <?= Yii::t('app', 'В пакет входит') ?>
                       </div>
                       <ul class="white-2__list col-lg-3" style="padding-left: 0">
                           <li><?= Yii::t('app', 'Авторизация/регистрация клиента по SMS') ?></li>
                           <li><?= Yii::t('app', 'Профайл клиента') ?></li>
                           <li><?= Yii::t('app', 'Брендирование логотипом компании-покупателя') ?></li>
                           <li><?= Yii::t('app', 'Брендирование цветовой гаммой компании-покупателя') ?></li>
                           <li><?= Yii::t('app', 'Интернет-эквайринг от Sessia') ?></li>
                           <li><?= Yii::t('app', 'Программа лояльности: Кешбэк за покупку') ?></li>
                       </ul>
                       <div class="col-lg-3">
                           <?= Yii::t('app', 'CRM:') ?>
                           <ul class="white-2__sub-list">
                               <li>&minus; <?= Yii::t('app', 'Настройка витрины одного магазина') ?></li>
                               <li>&minus; <?= Yii::t('app', 'Настройка профайла одного магазина') ?></li>
                               <li>&minus; <?= Yii::t('app', 'фильтрация клиентов; поиск клиента и просмотр его профайла') ?></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </details>

           <div class="offset-lg-1 col-lg-10" style="padding-left: 150px;"><hr></div>

           <details class="white-2__details">
               <summary class="white-2__summary offset-lg-1">
                   <p class="col-lg-3 white-2__summary_h1" style="padding-left: 0">Plus</p>
                   <p class="col-lg-6 white-2__summary_text"><?= Yii::t('app', 'Наш пакет Plus включает нашу полезную ленту новостей чтобы быть на связи с клиентами 24/7.') ?></p>
                   <p class="col-lg-3 white-2__summary_plus">
                       <svg class="control-icon control-icon-expand" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                           <line x1="1" y1="21.8462" x2="44" y2="21.8462" stroke="black" stroke-width="2" stroke-linecap="round"/>
                           <line x1="23.1543" y1="1" x2="23.1543" y2="44" stroke="black" stroke-width="2" stroke-linecap="round"/>
                       </svg>
                       <svg class="control-icon control-icon-close" xmlns="http://www.w3.org/2000/svg" width="45" height="3" viewBox="0 0 45 3" fill="none">
                           <line x1="1" y1="1.84619" x2="44" y2="1.84619" stroke="black" stroke-width="2" stroke-linecap="round"/>
                       </svg>
                   </p>
               </summary>
               <div class="white-2__price">
                   <?= Yii::t('app', '10М₽') ?>
               </div>
               <div class="white-2__detail">
                   <div class="white-2__pack-include col-lg-3 offset-1">
                       <?= Yii::t('app', 'Пакет Starter + следующие функции') ?>
                   </div>
                   <ul class="white-2__list col-lg-3">
                       <li><?= Yii::t('app', 'Социальная сеть для клиента:') ?>
                           <ul class="white-2__sub-list" style="padding-left: 0">
                               <li>&minus; <?= Yii::t('app', 'новостная лента,') ?></li>
                               <li>&minus; <?= Yii::t('app', 'писать посты,') ?></li>
                               <li>&minus; <?= Yii::t('app', 'писать комментарии,') ?></li>
                               <li>&minus; <?= Yii::t('app', 'дружить,')?></li>
                               <li>&minus; <?= Yii::t('app', 'лайкать посты,')?></li>
                               <li>&minus; <?= Yii::t('app', 'подписываться на людей и сообщества,')?></li>
                               <li>&minus;<?= Yii::t('app', 'блокировать нежелательный контент.')?></li>
                           </ul>
                       </li>
                       <li><?= Yii::t('app', 'Социальная сеть для компании: возможность вести свою ленту, на которую клиент автоматически подписан.') ?></li>
                       <li><?= Yii::t('app', 'Web-версия приложения для клиента с ограниченной функциональностью.') ?></li>
                       <li><?= Yii::t('app', 'Программа лояльности: Киксбэк за рекомендацию.') ?></li>
                       <li><?= Yii::t('app', 'Приглашения: друзей, реферальная программа') ?></li>
                       <li><?= Yii::t('app', 'InApp покупки для клиента:') ?>
                           <ul class="white-2__sub-list">
                               <li>&minus; <?= Yii::t('app', 'история и пополнение баланса монет;') ?></li>
                               <li>&minus; <?= Yii::t('app', 'на монеты которые можно покупать стикеры,') ?></li>
                               <li>&minus; <?= Yii::t('app', 'Магазин стикеров для клиента') ?></li>
                           </ul>
                       </li>
                       <li><?= Yii::t('app', 'Раздел "кошелек" для клиента') ?></li>
                       <li><?= Yii::t('app', 'Мультиязычность приложения для клиента') ?></li>
                       <li><?= Yii::t('app', 'Отчеты в приложении для клиента') ?></li>
                       <li><?= Yii::t('app', 'Уведомления в приложении для клиента') ?></li>
                   </ul>
                   <div class="col-lg-3">
                       <?= Yii::t('app', 'CRM:') ?>
                       <ul class="white-2__sub-list">
                           <li>&minus; <?= Yii::t('app', 'Настройка витрины одного магазина') ?></li>
                           <li>&minus; <?= Yii::t('app', 'Настройка профайла одного магазина') ?></li>
                           <li>&minus; <?= Yii::t('app', 'фильтрация клиентов; поиск клиента и просмотр его профайла') ?></li>
                       </ul>
                   </div>
               </div>
           </details>

           <div class="offset-lg-1 col-lg-10" style="padding-left: 150px;"><hr></div>

           <details class="white-2__details">
               <summary class="white-2__summary offset-lg-1">
                   <p class="col-lg-3 white-2__summary_h1" style="padding-left: 0">Pro</p>
                   <p class="col-lg-6 white-2__summary_text"><?= Yii::t('app', 'Пакет Pro — это наше готовое решение для максимального функционала Kicksback: вознаграждения, календари и управление сотрудниками - все включено. Вы также можете использовать дополнительные функции, как денежные переводы между магазинами!') ?></p>
                   <p class="col-lg-3 white-2__summary_plus">
                       <svg class="control-icon control-icon-expand" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                           <line x1="1" y1="21.8462" x2="44" y2="21.8462" stroke="black" stroke-width="2" stroke-linecap="round"/>
                           <line x1="23.1543" y1="1" x2="23.1543" y2="44" stroke="black" stroke-width="2" stroke-linecap="round"/>
                       </svg>
                       <svg class="control-icon control-icon-close" xmlns="http://www.w3.org/2000/svg" width="45" height="3" viewBox="0 0 45 3" fill="none">
                           <line x1="1" y1="1.84619" x2="44" y2="1.84619" stroke="black" stroke-width="2" stroke-linecap="round"/>
                       </svg>
                   </p>
               </summary>
               <div class="white-2__price">
                   <?= Yii::t('app', '20М₽') ?>
               </div>
               <div class="white-2__detail">
                   <div class="white-2__pack-include col-lg-3 offset-1">
                       <?= Yii::t('app', 'Plus + следующие функции') ?>
                   </div>
                   <ul class="white-2__list col-lg-3" style="padding-left: 0">
                       <li><?= Yii::t('app', 'Календарь событий от бизнеса в приложении клиента') ?></li>
                       <li><?= Yii::t('app', 'Доступ к бизнес-версии приложения') ?>
                           <ul class="white-2__sub-list">
                               <li>&minus; <?= Yii::t('app', 'Настройка профайла компании') ?>
                                   <br>&nbsp;&nbsp;<?= Yii::t('app', '(или нескольких)') ?>
                               </li>
                               <li>&minus; <?= Yii::t('app', 'Настройка профайла магазина') ?>
                                   <br>&nbsp;&nbsp;<?= Yii::t('app', '(или нескольких)') ?>
                               </li>
                               <li>&minus; <?= Yii::t('app', 'Управление учётными записями сотрудников компании') ?></li>
                               <li>&minus; <?= Yii::t('app', 'Перевод денег между магазинами')?></li>
                               <li>&minus; <?= Yii::t('app', 'POS-материалы')?></li>
                           </ul>
                       </li>
                       <li><?= Yii::t('app', 'Программа лояльности: Подарок клиенту за визит') ?></li>
<!--                       <li>--><?//= Yii::t('app', 'Подключение своего интернет эквайринга. Сейчас доступны:') ?>
<!--                           <ul class="white-2__sub-list">-->
<!--<!--                               <li>&minus; --><?////= Yii::t('app', 'Тинькофф') ?><!--</li>-->
<!--<!--                               <li>&minus; --><?////= Yii::t('app', 'Газпромбанк') ?><!--</li>-->
<!--                               <li> <img src="--><?//= Url::to($url . 'tinkoff.png') ?><!--" alt=""></li>-->
<!--                               <li> <img src="--><?//= Url::to($url . 'gazprom.png') ?><!--" alt=""></li>-->
<!--                           </ul>-->
<!--                       </li>-->
                   </ul>
<!--                   <div class="col-lg-3">-->
<!--                      <div class="white-2__tinkoff">-->
<!--                          <img src="--><?//= Url::to($url . 'tinkoff.png') ?><!--" alt="">-->
<!--                      </div>-->
<!--                      <div class="white-2__gazprom">-->
<!--                          <img src="--><?//= Url::to($url . 'gazprom.png') ?><!--" alt="">-->
<!--                      </div>-->
<!--                   </div>-->
               </div>
           </details>

           <div class="offset-lg-1 col-lg-10" style="padding-left: 150px;"><hr></div>

           <details class="white-2__details dop">
               <summary class="white-2__summary offset-lg-1 dop__summary">
                   <p class="col-lg-3 white-2__summary_h1" style="padding-left: 0"><?= Yii::t('app', 'Дополнительные услуги') ?></p>
                   <p class="col-lg-6 white-2__summary_text"><?= Yii::t('app', 'Нужны дополнительные настройки? Наши талантливые разработчики готовы настроить Kicksback специально для вашего бизнеса!') ?></p>
                   <p class="col-lg-3 white-2__summary_plus">
                       <svg class="control-icon control-icon-expand" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                           <line x1="1" y1="21.8462" x2="44" y2="21.8462" stroke="black" stroke-width="2" stroke-linecap="round"/>
                           <line x1="23.1543" y1="1" x2="23.1543" y2="44" stroke="black" stroke-width="2" stroke-linecap="round"/>
                       </svg>
                       <svg class="control-icon control-icon-close" xmlns="http://www.w3.org/2000/svg" width="45" height="3" viewBox="0 0 45 3" fill="none">
                           <line x1="1" y1="1.84619" x2="44" y2="1.84619" stroke="black" stroke-width="2" stroke-linecap="round"/>
                       </svg>
                   </p>
               </summary>
               <div class="white-2__detail dop__detail">
                   <div class="white-2__pack-include offset-lg-1 col-lg-3">
                       <?= Yii::t('app', 'Приобретаются отдельно') ?>
                   </div>
                   <ul class="white-2__list offset-lg-1 col-lg-3" style="margin-left: 0; padding-left: 0">
                       <li><?= Yii::t('app', 'Час разработки доп. функций за {strong}10k₽{close}', ['strong' => '<strong>', 'close' => '</strong>']) ?></li>
                       <li><?= Yii::t('app', 'Дополнительная техническая поддержка от Sessia (при штатной работе приложения)') ?></li>
                       <li><?= Yii::t('app', 'Чат с клиентом') ?></li>
                       <li><?= Yii::t('app', 'возможность 2FA для клиентов') ?></li>
                       <li><?= Yii::t('app', 'Миграция Starter → Plus за {strong}7M₽{close}', ['strong' => '<strong>', 'close' => '</strong>']) ?></li>
                       <li><?= Yii::t('app', 'Миграция Plus → Pro за {strong}14M₽{close}', ['strong' => '<strong>', 'close' => '</strong>']) ?></li>
                   </ul>
               </div>
           </details>
       </div>
    </section>

    <section id="form" class="white-3" style="position: relative; background-image: url('<?= Url::to('@web/front/img-main/ellipse.png?v=1') ?>')">
            <div class="white-3__wrap">
                <div class="white-3__text wow fadeIn col-lg-4"><?= Yii::t('app', 'для личной консультации, и чтобы получить ценовое предложение от нашей команды IT-экспертов') ?></div>
                <div class="white-3__header wow fadeIn col-lg-4"><?= Yii::t('app', 'Свяжитесь с нами') ?></div>
                <div class="white-3__form form wow fadeIn col-lg-8">
                    <form class="" action="" method="">
                        <input type="text" placeholder="<?= Yii::t('app', 'Как к Вам обращаться') ?>" class="input">
                        <input type="text" placeholder="<?= Yii::t('app', 'Как с Вами связаться') ?>" class="input"><br>
                        <input type="text" placeholder="<?= Yii::t('app', 'Ваше сообщение') ?>" class="input-text">

                        <button class="white-3__send"><?= Yii::t('app', 'Отправить') ?></button>
                    </form>
                </div>
<!--                <img class="white-3__circle" src="" alt=""/>-->
            </div>
    </section>

<?php

$js = <<<JS

new WOW().init();

$('a[href*="#"]:not([href="#"]):not(.fancybox)').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top-55
				}, 1000);
				return false;
			}
		}
	});

JS;
$this->registerJs($js, View::POS_END);