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
            <h1 class="text-gradient">Контактная информация</h1>

            <p class="pages__intro">
                Мы всегда открыты для новых талантов и профессиональных дискуссий. 
                Свяжитесь с командой <strong><?= $domainTitle ?></strong> любым удобным для вас способом. 
                Наши специалисты в Париже готовы ответить на ваши вопросы по будням с 09:00 до 18:00 (CET).
            </p>

            <div class="contact-cards">
                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <h2>Пишите нам</h2>
                    <p>Для общих вопросов, предложений и запросов по обучению:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="contact-link">hello@<?= $fullDomain ?></a>
                </div>

                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h2>Звоните</h2>
                    <p>Прямая линия поддержки студентов и экспертных консультаций:</p>
                    <a href="tel:+33189480534" class="contact-link">+33189480534</a>
                </div>

                <div class="contact-card">
                    <div class="contact-card__icon">
                        <i class="fa-solid fa-location-crosshairs"></i>
                    </div>
                    <h2>Наш кампус</h2>
                    <p>Главный офис и учебный центр <?= $domainTitle ?> расположен по адресу:</p>
                    <address class="contact-address">
                        24 Rue de la Paix,<br>
                        75002 Paris,<br>
                        France
                    </address>
                </div>
            </div>

            <div class="contact-extra">
                <p>
                    Вы также можете воспользоваться формой обратной связи на 
                    <a href="./#contact" class="accent-link">главной странице</a> для быстрой отправки запроса и оценки ваших перспектив в IT.
                </p>
            </div>
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