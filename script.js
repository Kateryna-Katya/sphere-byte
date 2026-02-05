import * as THREE from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/0.160.0/three.module.min.js';

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. Инициализация иконок ---
    if (typeof lucide !== 'undefined') lucide.createIcons();

    // --- 2. Мобильное меню («Бургер») ---
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenu = document.querySelector('.mobile-menu__close');
    const menuLinks = document.querySelectorAll('.mobile-menu__link');

    const toggleMenu = () => mobileMenu.classList.toggle('mobile-menu--active');

    burger?.addEventListener('click', toggleMenu);
    closeMenu?.addEventListener('click', toggleMenu);
    menuLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // --- 3. Header Scroll Effect ---
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header?.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // --- 4. Three.js Hero Scene ---
    const initHeroScene = () => {
        const container = document.getElementById('hero-canvas');
        if (!container) return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 2000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        const geometry = new THREE.BufferGeometry();
        const vertices = [];
        for (let i = 0; i < 4000; i++) {
            vertices.push(THREE.MathUtils.randFloatSpread(2000), THREE.MathUtils.randFloatSpread(2000), THREE.MathUtils.randFloatSpread(2000));
        }
        geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));
        const points = new THREE.Points(geometry, new THREE.PointsMaterial({ color: 0x635BFF, size: 2, transparent: true, opacity: 0.6 }));
        scene.add(points);
        camera.position.z = 1000;

        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX - window.innerWidth / 2) / 150;
            mouseY = (e.clientY - window.innerHeight / 2) / 150;
        });

        const animate = () => {
            requestAnimationFrame(animate);
            points.rotation.x += 0.0005; points.rotation.y += 0.0005;
            camera.position.x += (mouseX - camera.position.x) * 0.05;
            camera.position.y += (-mouseY - camera.position.y) * 0.05;
            camera.lookAt(scene.position);
            renderer.render(scene, camera);
        };
        animate();
    };

    // --- 5. Image Morphing (Strategies) ---
    const initStrategyMorph = () => {
        const items = document.querySelectorAll('.strategy-item');
        const morphImg = document.querySelector('.morph-img');
        const shapes = {
            circle: 'circle(45% at 50% 50%)',
            polygon: 'polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%)',
            blob: 'polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%)'
        };
        items.forEach(item => {
            item.addEventListener('mouseenter', () => {
                items.forEach(i => i.classList.remove('active'));
                item.classList.add('active');
                if(morphImg) morphImg.style.clipPath = shapes[item.dataset.shape] || shapes.circle;
            });
        });
    };

    // --- 6. Контактная форма + Валидация телефона + Капча ---
    const initContactForm = () => {
        const form = document.getElementById('ajax-form');
        const phoneInput = document.getElementById('phone');
        const questionEl = document.getElementById('captcha-question');
        const messageEl = document.getElementById('form-message');

        if (!form) return;

        // Валидация телефона (только цифры и +)
        phoneInput?.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d+]/g, '');
        });

        // Генерация капчи
        let n1 = Math.floor(Math.random() * 10), n2 = Math.floor(Math.random() * 10);
        if(questionEl) questionEl.textContent = `${n1} + ${n2}`;

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const answer = parseInt(document.getElementById('captcha-answer').value);
            if (answer !== (n1 + n2)) {
                messageEl.textContent = "Ошибка капчи!";
                messageEl.className = "form-message error";
                return;
            }

            const btn = form.querySelector('button');
            btn.disabled = true; btn.textContent = "Отправка...";

            await new Promise(r => setTimeout(r, 1500)); // Имитация AJAX
            
            messageEl.textContent = "Успешно отправлено!";
            messageEl.className = "form-message success";
            form.reset();
            btn.disabled = false; btn.innerHTML = 'Отправить запрос <i data-lucide="send"></i>';
            if (typeof lucide !== 'undefined') lucide.createIcons();
        });
    };

    // --- 7. Cookie Popup ---
    const initCookiePopup = () => {
        const popup = document.getElementById('cookie-popup');
        const acceptBtn = document.getElementById('cookie-accept');
        if (!localStorage.getItem('cookies_accepted')) {
            setTimeout(() => popup?.classList.add('cookie-popup--active'), 2000);
        }
        acceptBtn?.addEventListener('click', () => {
            localStorage.setItem('cookies_accepted', 'true');
            popup?.classList.remove('cookie-popup--active');
        });
    };

    // --- Запуск ---
    initHeroScene();
    initStrategyMorph();
    initContactForm();
    initCookiePopup();
    if (typeof Swiper !== 'undefined') {
        new Swiper('.insights-slider', {
            slidesPerView: 1, spaceBetween: 30, loop: true,
            navigation: { nextEl: '.swiper-button-next-custom', prevEl: '.swiper-button-prev-custom' },
            breakpoints: { 768: { slidesPerView: 2 }, 1024: { slidesPerView: 3 } }
        });
    }
});