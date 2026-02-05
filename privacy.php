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
            <h1 class="text-gradient">Политика конфиденциальности</h1>

            <p>
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые студентами и партнерами <strong><?= $domainTitle ?></strong>, как для получения 
                образовательных услуг и доступа к IT-платформе, так и для других взаимодействий в электронном
                формате, а также при участии пользователей в инновационных программах и акциях, оказывая
                техническую поддержку и информационное сопровождение.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц (например, сервисы визуализации Three.js), которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2>Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p>
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных услуг: доступа к учебным материалам,
                участия в практических сессиях по программированию, получения аналитических отчетов о прогрессе и внедрения AI-инструментов. Для
                предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, включая современные протоколы шифрования и стандарты защиты данных ЕС.
            </p>

            <p>
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации в соответствии с архивными нормами. В остальных случаях компания хранит данные клиента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем через запрос на электронную почту.
            </p>

            <p>
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель сбора была достигнута (например, завершение курса) или по прямому запросу клиента.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2>Техническая информация:</h2>
            <ul>
                <li>время доступа и IP-адрес устройства;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы и разделы курсов, посещаемые пользователем;</li>
                <li>просмотры информационных модулей и интерактивных блоков;</li>
                <li>иная техническая информация, предоставляемая браузером (тип ОС, версия браузера);</li>
                <li>номер телефона (в случае звонка по контактам Франции, указанным на сайте).</li>
            </ul>

            <p>
                При регистрации или заполнении форм обратной связи для получения доступа к платформе мы собираем информацию, 
                необходимую для аутентификации и персонализации процесса обучения:
            </p>
            <ul>
                <li>имя пользователя;</li>
                <li>e-mail и номер телефона для оперативной связи с куратором;</li>
            </ul>

            <h2>Информация о действиях пользователя:</h2>
            <ul>
                <li>информация о соглашениях и образовательных контрактах между студентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах, отправленных через формы на сайте;</li>
                <li>сведения о полученных консультациях, пройденных программах и выполненных практических заданиях;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная действующим законодательством Франции и ЕС.</li>
            </ul>

            <h2>Цели обработки персональных данных клиентов:</h2>
            <ul>
                <li>предоставление доступа к образовательной платформе и экспертной поддержке;</li>
                <li>учет пожеланий при разработке новых учебных модулей и AI-практик;</li>
                <li>информирование об акциях, скидках на обучение и новых материалах в блоге через e-mail;</li>
                <li>обеспечение качественной технической поддержки учебного процесса.</li>
            </ul>

            <h2>
                <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:
            </h2>
            <ul>
                <li>получения прямого согласия пользователя на такую передачу;</li>
                <li>по требованию компетентных органов Франции в соответствии с законодательством;</li>
                <li>случаев стратегического слияния или поглощения компании в рамках расширения образовательной сети.</li>
            </ul>

            <h2>Использование файлов cookie и точечных маркеров</h2>
            <p>
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Франция), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным для обучения. Точечные маркеры 
                используются для статистического анализа посещений разделов сайта. Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2>Права пользователя в отношении персональных данных</h2>
            <p>
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами GDPR, 
                пожалуйста, свяжитесь с командой поддержки <strong><?= $domainTitle ?></strong> по адресу: 
                <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
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