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
        <?= $domainTitle ?> — IT-школа нового поколения
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect x='20' y='20' width='60' height='60' rx='12' fill='%238b5cf6'/%3E%3Cpath d='M35 40 L50 25 L65 40 L50 55 Z' fill='white' opacity='0.9'/%3E%3Cpath d='M35 60 L50 45 L65 60 L50 75 Z' fill='white' opacity='0.6'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Montserrat:wght@300;400;600;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="./#hero" class="logo">
                    <span class="logo__icon"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>

                <ul class="menu">
                    <li><a href="./#hero" class="menu__link">Главная</a></li>
                    <li><a href="./#courses" class="menu__link">Курсы</a></li>
                    <li><a href="./#method" class="menu__link">Методология</a></li>
                    <li><a href="./#career" class="menu__link">Карьера</a></li>
                    <li><a href="./#reviews" class="menu__link">Отзывы</a></li>
                </ul>

                <a href="./#contact" class="btn btn--outline hide-mobile">Связаться</a>

                <button class="burger" aria-label="Menu">
                    <span></span>
                </button>
            </nav>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container">
            <h1 class="text-gradient">Политика касаемо обработки персональных данных</h1>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных.
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, в том числе защиты прав на
                неприкосновенность частной жизни, личную и семейную тайну.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программ для ЭВМ и баз данных,
                    обеспечивающих их доступность в сети интернет по сетевому адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному или определяемому
                    Пользователю веб-сайта.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие
                    (операция) или совокупность действий (операций), совершаемых с
                    использованием средств автоматизации или без использования таких
                    средств с персональными данными.
                </li>
                <li>
                    <strong>Безопасность персональных данных</strong> — защищенность
                    персональных данных от неправомерного или случайного доступа к
                    ним, уничтожения, изменения или блокирования в соответствии с регламентом GDPR.
                </li>
                <li>
                    <strong>Согласие</strong> — добровольное, информированное и
                    сознательное выражение воли Пользователя на обработку его
                    персональных данных.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li>
                    <strong>Персональные данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя и фамилия;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам Франции).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Также на сайте происходит сбор и обработка обезличенных данных
                            о посетителях (в т.ч. файлов «cookie») с помощью сервисов
                            интернет-статистики (Google Analytics и других). Эти данные включают 
                            IP-адрес, тип браузера, настройки региона и время доступа.
                        </li>
                    </ul>
                </li>
            </ul>
            <p>
                Вышеперечисленные данные далее по тексту Политики <strong><?= $domainTitle ?></strong> объединены общим
                понятием Персональные данные.
            </p>

            <h2>4. Цели обработки персональных данных</h2>
            <ul>
                <li>
                    Идентификация Пользователя для предоставления доступа к личному кабинету и учебным материалам 
                    образовательной платформы.
                </li>
                <li>
                    Установление с Пользователем обратной связи, включая направление
                    уведомлений, запросов, касающихся использования сайта, консультаций по курсам, обработку
                    запросов и заявок.
                </li>
                <li>
                    Заключение и исполнение договоров на предоставление образовательных услуг в ЕС.
                </li>
                <li>
                    Информирование Пользователя о новых программах и апдейтах платформы посредством отправки электронных писем. 
                    Пользователь всегда может отказаться от рассылок, направив
                    Оператору письмо на адрес
                    <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    с пометкой «Отказ от уведомлений».
                </li>
                <li>
                    Улучшение качества работы интерфейса и аналитика использования образовательного контента.
                </li>
            </ul>

            <h2>5. Правовые основания обработки персональных данных</h2>
            <p>
                Оператор обрабатывает персональные данные Пользователя только на
                законных основаниях:
            </p>
            <ul>
                <li>
                    При наличии добровольного согласия Пользователя, выраженного 
                    путем заполнения форм регистрации или обратной связи на сайте <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    При условии, что сохранение файлов «cookie» разрешено в настройках вашего браузера.
                </li>
            </ul>

            <h2>6. Порядок сбора, хранения и безопасности данных</h2>
            <ul>
                <li>
                    Оператор принимает все возможные правовые, организационные и технические меры для
                    защиты данных от неправомерного доступа в соответствии с нормами Общего регламента по защите данных (GDPR).
                </li>
                <li>
                    Персональные данные Пользователя никогда не будут переданы третьим лицам, 
                    за исключением случаев, предусмотренных действующим законодательством Франции и ЕС.
                </li>
                <li>
                    Срок обработки персональных данных является неограниченным, пока сохраняется цель обработки.
                    Пользователь может в любой момент отозвать свое согласие («право на забвение»), направив 
                    Оператору уведомление на email 
                    <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>7. Заключительные положения</h2>
            <ul>
                <li>
                    Пользователь может получить разъяснения по любым вопросам, обратившись к 
                    Оператору по электронной почте 
                    <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                </li>
                <li>
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> находится в свободном 
                    доступе на сайте <strong><?= $fullDomain ?></strong> в разделе юридической информации.
                </li>
            </ul>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__col">
                    <a href="./#hero" class="logo footer__logo">
                        <span class="logo__icon"></span>
                        <span class="logo__text">
                            <?= $domainTitle ?>
                        </span>
                    </a>
                    <p class="footer__description">Инновационная технология обучения, которая меняет правила игры в
                        IT-образовании.</p>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Навигация</h4>
                    <ul class="footer__list">
                        <li><a href="./#courses">Курсы</a></li>
                        <li><a href="./#method">Методология</a></li>
                        <li><a href="./#career">Карьера</a></li>
                        <li><a href="./#contact">Контакты</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h4 class="footer__title">Документы</h4>
                    <ul class="footer__list">
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
                    <ul class="footer__contacts">
                        <li><i class="fa-solid fa-phone"></i> +33189480534</li>
                        <li><i class="fa-solid fa-envelope"></i> hello@
                            <?= $fullDomain ?>
                        </li>
                        <li><i class="fa-solid fa-location-dot"></i> 24 Rue de la Paix, 75002 Paris, France</li>
                    </ul>
                </div>
            </div>

            <div class="footer__bottom">
                <p>&copy; 2026
                    <?= $domainTitle ?>. Все права защищены. Платформа уже доступна в Европе.
                </p>
            </div>
        </div>
    </footer>
<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <div class="cookie-popup__icon"><i class="fa-solid fa-cookie-bite"></i></div>
        <div class="cookie-popup__text">
            Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.
        </div>
        <button id="cookie-accept" class="btn btn--small btn--primary">Принять</button>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.160.0/three.min.js"></script>

<script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="script.js"></script>
</body>

</html>