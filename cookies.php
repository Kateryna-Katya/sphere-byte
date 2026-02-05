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
            <h1 class="text-gradient">Политика использования файлов cookie</h1>

            <p>
                Добро пожаловать в IT-школу <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                взаимодействия с нашей платформой, обеспечить её корректную работу и
                анализировать активность пользователей, мы используем файлы cookie и
                схожие технологии. Настоящая политика подробно объясняет, какие
                именно технологии мы применяем, для каких целей, и как вы можете ими
                управлять.
            </p>

            <h2>Что такое файлы cookie?</h2>
            <p>
                Файл cookie — это небольшой фрагмент данных (текстовый файл),
                который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                или смартфоне), когда вы его посещаете. Это позволяет платформе 
                <strong><?= $domainTitle ?></strong> "помнить" ваши действия и предпочтения 
                (например, выбранный курс, язык интерфейса, настройки региона Франция и другие параметры) 
                в течение определенного времени, чтобы вам не приходилось вводить их 
                повторно при каждом визите.
            </p>

            <h2>Какие типы файлов cookie мы используем?</h2>
            <p>
                Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                следующим категориям:
            </p>
            <ul>
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Эти файлы
                    критически важны для функционирования сайта. Они позволяют вам
                    перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать его базовые возможности, такие как доступ к учебным материалам. 
                </li>
                <li>
                    <strong>Аналитические и производительные файлы cookie:</strong>
                    Эти файлы собирают анонимную информацию о том, как посетители
                    используют наш сайт, помогая нам улучшать контент и структуру обучения.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Эти файлы позволяют
                    сайту запоминать ваш выбор для предоставления более
                    персонализированного опыта в рамках наших образовательных программ.
                </li>
                <li>
                    <strong>Рекламные (маркетинговые) файлы cookie:</strong> Эти файлы
                    используются для доставки объявлений, соответствующих вашим профессиональным интересам в сфере IT.
                </li>
            </ul>

            <h2>Зачем мы используем файлы cookie?</h2>
            <p>Основные цели использования файлов cookie на сайте <strong><?= $domainTitle ?></strong>:</p>
            <ul>
                <li>Обеспечение стабильной и безопасной работы платформы.</li>
                <li>Анализ пользовательского поведения для оптимизации процесса обучения.</li>
                <li>Персонализация контента и настроек для удобства пользователей в Европе.</li>
                <li>Предоставление актуальной информации о новых курсах и скидках.</li>
            </ul>

            <h2>Ваш выбор и как управлять файлами cookie</h2>
            <p>
                Вы имеете полный контроль над файлами cookie. Вы можете в любой
                момент изменить свои настройки в браузере или через наш Cookie popup. Однако, обратите
                внимание: отключение строго необходимых cookie может привести к
                некорректной работе некоторых интерактивных функций нашего сайта.
            </p>

            <h2>Файлы cookie третьих сторон</h2>
            <p>
                На некоторых страницах <strong><?= $domainTitle ?></strong> мы можем использовать сервисы
                сторонних компаний, например, Google Analytics для аналитики или Three.js для визуализаций в Hero-секции. 
                Мы рекомендуем вам ознакомиться с их политиками конфиденциальности отдельно.
            </p>

            <h2>Обновления настоящей политики</h2>
            <p>
                Мы можем время от времени обновлять эту Политику, чтобы отразить изменения в технологиях обучения или
                законодательстве ЕС. Продолжение использования нашего сайта будет означать ваше согласие с обновленными условиями.
            </p>

            <h2>Контактная информация</h2>
            <p>
                Если у вас возникли какие-либо вопросы касательно нашей политики
                использования файлов cookie на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с нами:
                <br><br>
                Email: <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+33189480534">+33189480534</a><br>
                Адрес: 24 Rue de la Paix, 75002 Paris, France
            </p>
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