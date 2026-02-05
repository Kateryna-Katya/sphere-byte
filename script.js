document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. МОБИЛЬНОЕ МЕНЮ ---
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.menu');
    const body = document.body;

    burger?.addEventListener('click', () => {
        burger.classList.toggle('burger--active');
        menu.classList.toggle('menu--active');
        body.style.overflow = menu.classList.contains('menu--active') ? 'hidden' : '';
    });

    // Закрытие при клике на ссылку и плавный скролл
    document.querySelectorAll('.menu__link, .btn').forEach(link => {
        link.addEventListener('click', () => {
            burger.classList.remove('burger--active');
            menu.classList.remove('menu--active');
            body.style.overflow = '';
        });
    });

    // --- 2. COOKIE POPUP ---
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('cookie-popup--active');
        }, 2000);
    }

    cookieAccept?.addEventListener('click', () => {
        cookiePopup.classList.remove('cookie-popup--active');
        localStorage.setItem('cookies-accepted', 'true');
    });

    // --- 3. THREE.JS HERO GRID (Digital Wave) ---
    const initHeroGrid = () => {
        const container = document.getElementById('hero-canvas');
        if (!container) return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        const group = new THREE.Group();
        const size = 25; 
        const spacing = 1.8;
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
            cubes.forEach(cube => {
                const dist = Math.sqrt(Math.pow(cube.position.x - mouse.x * 20, 2) + Math.pow(cube.position.z - mouse.y * -20, 2));
                cube.position.y = Math.sin(dist * 0.5 - Date.now() * 0.002) * 2.5;
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

    // --- 4. TYPEWRITER EFFECT ---
    const initTypewriter = () => {
        if (document.getElementById('typewriter')) {
            new TypeIt("#typewriter", {
                speed: 50,
                loop: true,
                waitUntilVisible: true
            })
            .type("git clone <?= $domainSlug ?>.fit", {delay: 1000})
            .break().type("> Loading AI-modules...")
            .pause(1000).delete().type("Готовы изменить свою жизнь?")
            .go();
        }
    };

    // --- 5. CONTACT FORM & CAPTCHA ---
    let captchaAnswer;
    const generateCaptcha = () => {
        const label = document.getElementById('captcha-label');
        if (!label) return;
        const n1 = Math.floor(Math.random() * 10);
        const n2 = Math.floor(Math.random() * 10);
        captchaAnswer = n1 + n2;
        label.innerText = `Подтвердите: ${n1} + ${n2} =`;
    };

    const contactForm = document.getElementById('ajax-form');
    contactForm?.addEventListener('submit', async (e) => {
        e.preventDefault();
        const ans = parseInt(document.getElementById('captcha-input').value);
        const msg = document.getElementById('form-message');

        if (ans !== captchaAnswer) {
            msg.innerText = "Неверная капча!";
            msg.className = "form__message error";
            return;
        }

        const btn = contactForm.querySelector('button');
        btn.disabled = true;
        btn.innerText = "Отправка...";

        await new Promise(r => setTimeout(r, 1500));
        
        msg.innerText = "Заявка принята! Мы скоро свяжемся с вами.";
        msg.className = "form__message success";
        contactForm.reset();
        btn.disabled = false;
        btn.innerText = "Запросить доступ";
        generateCaptcha();
    });

    // --- 6. SWIPER REVIEWS ---
    const initSwiper = () => {
        if (document.querySelector('.swiper')) {
            new Swiper('.swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: { el: '.swiper-pagination', clickable: true },
                autoplay: { delay: 4000 },
                breakpoints: { 768: { slidesPerView: 2 } }
            });
        }
    };

    // Запуск всех систем
    initHeroGrid();
    initTypewriter();
    initSwiper();
    generateCaptcha();
});