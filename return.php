<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Экспертный консалтинг и стратегии роста
    </title>
<link rel="icon"
    href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cdefs%3E%3ClinearGradient id='grad' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' style='stop-color:%23635BFF;stop-opacity:1' /%3E%3Cstop offset='100%25' style='stop-color:%230A2540;stop-opacity:1' /%3E%3C/linearGradient%3E%3C/defs%3E%3Cpath d='M4 16H9L12 6L18 26L21 16H28' stroke='url(%23grad)' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'/%3E%3Ccircle cx='28' cy='16' r='3' fill='%23635BFF' /%3E%3C/svg%3E"
    type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Manrope:wght@500;800&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__icon"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategies" class="nav__link">Стратегии</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--outline header__cta">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container">
            <h1>Политика возврата средств</h1>
            
            <h2>Условия для оформления возврата</h2>
            <p>
                Вы можете претендовать на полный или частичный возврат средств в
                следующих ситуациях:
            </p>
            <ul>
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание
                    предоставленной консультации или экспертного материала существенно отличается от программы,
                    заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При
                    возникновении критических технических проблем на платформе
                    <strong><?= $fullDomain ?></strong>, которые делают доступ к материалам или сессиям невозможным и не были
                    устранены нашей командой в разумные сроки.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Если вы
                    решили отказаться от участия в программе в течение 14 (четырнадцати) календарных
                    дней с момента оплаты, при условии, что вы еще не получили доступ
                    к значительному объему материалов (см. раздел «Исключения»).
                </li>
            </ul>

            <h2>Процедура запроса на возврат</h2>
            <p>
                Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                следующие шаги:
            </p>
            <ol class="custom-list">
                <li>
                    Составьте письмо и отправьте его на наш официальный email:
                    <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма обязательно укажите: «Запрос на возврат средств».
                </li>
                <li>
                    В теле письма предоставьте полную информацию: ваше имя и фамилию,
                    email, который использовался при регистрации, и точное название выбранной программы.
                </li>
                <li>
                    Четко и подробно опишите причину, по которой вы запрашиваете
                    возврат, со ссылкой на один из пунктов наших условий.
                </li>
                <li>
                    После получения письма наша служба поддержки рассмотрит ваш запрос
                    и свяжется с вами для предоставления дальнейших инструкций в течение 3-х рабочих дней.
                </li>
            </ol>

            <h2>Сроки и способ возврата</h2>
            <p>
                После одобрения вашего запроса, возврат денежных средств будет
                произведен в течение 7–14 рабочих дней. Средства будут возвращены
                тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                может зависеть от регламента работы вашего банка или платежной системы в <strong>Германии</strong> или стране вашего пребывания.
            </p>

            <h2>Исключения и ограничения</h2>
            <p>Возврат средств не может быть осуществлен, если:</p>
            <ul>
                <li>
                    Запрос подан по истечении 14 календарных дней с момента оплаты.
                </li>
                <li>
                    Вы уже изучили, просмотрели или скачали более 50% материалов программы, независимо
                    от времени, прошедшего с момента покупки.
                </li>
                <li>
                    Причиной невозможности пройти обучение являются технические
                    проблемы на стороне пользователя (например, проблемы с интернет-соединением или ПО).
                </li>
                <li>
                    Были нарушены другие условия Пользовательского соглашения <strong><?= $domainTitle ?></strong> с вашей
                    стороны.
                </li>
            </ul>

            <h2>Изменения в политике</h2>
            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую
                Политику возврата. Актуальная версия всегда доступна на этой
                странице <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>Свяжитесь с нами</h2>
            <p>
                По всем вопросам, связанным с возвратом средств или условиями
                консультаций, пожалуйста, обращайтесь в нашу службу поддержки:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+390697639457">+390697639457</a>
            </p>
        </div>
    </section>
</main>




     <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__icon"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">Технологии нового поколения для вашего бизнеса. Переосмыслите подход к
                    развитию вместе с экспертной поддержкой.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategies">Стратегии</a></li>
                    <li><a href="./#expertise">Экспертиза</a></li>
                    <li><a href="./#insights">Инсайты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact">
                    <li><i data-lucide="phone" class="icon-sm"></i> +390697639457</li>
                    <li><i data-lucide="mail" class="icon-sm"></i> hello@
                        <?= $fullDomain ?>
                    </li>
                    <li><i data-lucide="map-pin" class="icon-sm"></i> Kurfürstendamm 21, 10719 Berlin, Germany</li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
<div class="mobile-menu">
    <button class="mobile-menu__close"><i data-lucide="x"></i></button>
    <ul class="mobile-menu__list">
        <li><a href="./#hero" class="mobile-menu__link">Главная</a></li>
        <li><a href="./#strategies" class="mobile-menu__link">Стратегии</a></li>
        <li><a href="./#expertise" class="mobile-menu__link">Экспертиза</a></li>
        <li><a href="./#insights" class="mobile-menu__link">Инсайты</a></li>
        <li><a href="./#reviews" class="mobile-menu__link">Отзывы</a></li>
        <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
    </ul>
</div>

<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--accent-sm">Принять</button>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script type="module" src="script.js"></script>    
 
    
</body>

</html>