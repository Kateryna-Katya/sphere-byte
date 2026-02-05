/**
 * PROJECT: <?= $domainTitle ?> (sphere-byte.fit)
 * VERSION: 1.0.0 (2026)
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. МОБИЛЬНОЕ МЕНЮ ---
    const initMobileMenu = () => {
        const burger = document.querySelector('.burger');
        const menu = document.querySelector('.menu');
        const body = document.body;

        if (!burger || !menu) return;

        burger.addEventListener('click', () => {
            burger.classList.toggle('burger--active');
            menu.classList.toggle('menu--active');
            body.style.overflow = menu.classList.contains('menu--active') ? 'hidden' : '';
        });

        // Закрытие меню при клике на ссылки
        document.querySelectorAll('.menu__link, .btn').forEach(link => {
            link.addEventListener('click', () => {
                burger.classList.remove('burger--active');
                menu.classList.remove('menu--active');
                body.style.overflow = '';
            });
        });
    };

    // --- 2. THREE.JS: HERO GRID (Digital Wave) ---
    const initHeroGrid = () => {
        const container = document.getElementById('hero-canvas');
        if (!container || typeof THREE === 'undefined') return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        const group = new THREE.Group();
        const isMobile = window.innerWidth < 768;
        const size = isMobile ? 15 : 25; 
        const spacing = isMobile ? 2.2 : 1.8;
        const geometry = new THREE.BoxGeometry(0.7, 0.7, 0.7);
        const material = new THREE.MeshPhongMaterial({ color: 0x8b5cf6, shininess: 100 });

        const cubes = [];
        for (let x = 0; x < size; x++) {
            for (let z = 0; z < size; z++) {
                const cube = new THREE.Mesh(geometry, material);
                cube.position.set((x - size/2) * spacing, 0, (z - size/2) * spacing);
                group.add(cube);
                cubes.push(cube);
            }
        }
        scene.add(group);

        const light = new THREE.DirectionalLight(0xffffff, 1);
        light.position.set(5, 10, 7.5);
        scene.add(light);
        scene.add(new THREE.AmbientLight(0x404040));

        camera.position.set(0, 20, 30);
        camera.lookAt(0, 0, 0);

        let mouse = { x: 0, y: 0 };
        window.addEventListener('mousemove', (e) => {
            mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
            mouse.y = -(e.clientY / window.innerHeight) * 2 + 1;
        });

        function animate() {
            requestAnimationFrame(animate);
            const time = Date.now() * 0.002;
            cubes.forEach(cube => {
                const dist = Math.sqrt(Math.pow(cube.position.x - mouse.x * 20, 2) + Math.pow(cube.position.z - mouse.y * -20, 2));
                cube.position.y = Math.sin(dist * 0.5 - time) * 2.5;
                cube.rotation.y += 0.01;
            });
            renderer.render(scene, camera);
        }
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    };

    // --- 3. TYPEIT: ЭФФЕКТ ПЕЧАТИ ---
    const initTypewriter = () => {
        const element = document.getElementById('typewriter');
        if (element && typeof TypeIt !== 'undefined') {
            new TypeIt("#typewriter", {
                speed: 50,
                loop: true,
                waitUntilVisible: true
            })
            .type("git clone <?= $domainSlug ?>.fit", {delay: 1000})
            .break().type("> Loading AI-modules...")
            .pause(1000).delete().type("Готовы начать карьеру в IT?")
            .go();
        }
    };

    // --- 4. SWIPER: ОТЗЫВЫ ---
    const initReviewsSlider = () => {
        if (document.querySelector('.reviews__slider') && typeof Swiper !== 'undefined') {
            new Swiper('.reviews__slider', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: { 
                    el: '.swiper-pagination', 
                    clickable: true,
                    dynamicBullets: true 
                },
                autoplay: { delay: 5000, disableOnInteraction: false },
                breakpoints: {
                    768: { slidesPerView: 2 }
                }
            });
        }
    };

    // --- 5. ФОРМА: ВАЛИДАЦИЯ ТЕЛЕФОНА И КАПЧА ---
    const initFormLogic = () => {
        const form = document.getElementById('ajax-form');
        const phoneInput = document.getElementById('phone');
        const captchaLabel = document.getElementById('captcha-label');
        const captchaInput = document.getElementById('captcha-input');
        const formMessage = document.getElementById('form-message');
        
        let captchaAnswer;

        // Строгая валидация телефона: только цифры
        if (phoneInput) {
            phoneInput.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/\D/g, '');
            });
        }

        // Генерация капчи
        const generateCaptcha = () => {
            if (!captchaLabel) return;
            const n1 = Math.floor(Math.random() * 10) + 1;
            const n2 = Math.floor(Math.random() * 10) + 1;
            captchaAnswer = n1 + n2;
            captchaLabel.innerText = `Подтвердите: ${n1} + ${n2} =`;
        };

        generateCaptcha();

        // Отправка формы (AJAX imitation)
        form?.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            if (parseInt(captchaInput.value) !== captchaAnswer) {
                formMessage.innerText = "Неверная капча. Попробуйте еще раз.";
                formMessage.className = "form__message error";
                generateCaptcha();
                captchaInput.value = '';
                return;
            }

            const btn = form.querySelector('button');
            btn.disabled = true;
            const originalBtnText = btn.innerText;
            btn.innerText = "Отправка...";

            try {
                // Имитация задержки сети
                await new Promise(resolve => setTimeout(resolve, 1500));
                
                formMessage.innerText = "Успешно! Мы свяжемся с вами в ближайшее время.";
                formMessage.className = "form__message success";
                form.reset();
                generateCaptcha();
            } catch (err) {
                formMessage.innerText = "Ошибка при отправке. Попробуйте позже.";
                formMessage.className = "form__message error";
            } finally {
                btn.disabled = false;
                btn.innerText = originalBtnText;
            }
        });
    };

    // --- 6. COOKIE POPUP ---
    const initCookiePopup = () => {
        const popup = document.getElementById('cookie-popup');
        const acceptBtn = document.getElementById('cookie-accept');

        if (!popup || !acceptBtn) return;

        if (!localStorage.getItem('cookie_accepted')) {
            setTimeout(() => {
                popup.classList.add('cookie-popup--active');
            }, 2000);
        }

        acceptBtn.addEventListener('click', () => {
            popup.classList.remove('cookie-popup--active');
            localStorage.setItem('cookie_accepted', 'true');
        });
    };

    // --- ЗАПУСК ВСЕХ МОДУЛЕЙ ---
    initMobileMenu();
    initHeroGrid();
    initTypewriter();
    initReviewsSlider();
    initFormLogic();
    initCookiePopup();

    // Плавный скролл для якорей
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
});