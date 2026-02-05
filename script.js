document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.menu');

    // Скролл хедера
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Мобильное меню
    burger.addEventListener('click', () => {
        menu.classList.toggle('menu--active');
        burger.classList.toggle('burger--active');
    });

    // Закрытие меню при клике на ссылку
    document.querySelectorAll('.menu__link').forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.remove('menu--active');
        });
    });
    
});
// Интерактивная сетка в стиле Digital Wave
const initHeroGrid = () => {
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    
    const container = document.getElementById('hero-canvas');
    renderer.setSize(window.innerWidth, window.innerHeight);
    container.appendChild(renderer.domElement);

    // Создаем сетку из кубов
    const group = new THREE.Group();
    const size = 30; // количество кубов
    const spacing = 1.5;
    const geometry = new THREE.BoxGeometry(0.8, 0.8, 0.8);
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

    // Свет
    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(5, 10, 7.5);
    scene.add(light);
    scene.add(new THREE.AmbientLight(0x404040));

    camera.position.set(0, 25, 30);
    camera.lookAt(0, 0, 0);

    let mouse = new THREE.Vector2();
    window.addEventListener('mousemove', (e) => {
        mouse.x = (e.clientX / window.innerWidth) * 2 - 1;
        mouse.y = -(e.clientY / window.innerHeight) * 2 + 1;
    });

    function animate() {
        requestAnimationFrame(animate);
        
        cubes.forEach(cube => {
            const dist = Math.sqrt(Math.pow(cube.position.x - mouse.x * 20, 2) + Math.pow(cube.position.z - mouse.y * -20, 2));
            const wave = Math.sin(dist * 0.5 - Date.now() * 0.002) * 2;
            cube.position.y = wave;
            cube.rotation.y += 0.01;
        });

        renderer.render(scene, camera);
    }
    animate();
};

// Эффект печати кода
const initTypewriter = () => {
    new TypeIt("#typewriter", {
        speed: 50,
        waitUntilVisible: true,
        loop: true
    })
    .type("git clone sphere-byte.fit", {delay: 1000})
    .break()
    .type("> Инициализация платформы...")
    .break()
    .type("> Подключение AI-модулей...")
    .pause(500)
    .delete()
    .type("Готовы начать карьеру в IT?")
    .go();
};

initHeroGrid();
initTypewriter();
const initCardsGlow = () => {
    const cards = document.querySelectorAll('.course-card');
    
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            // Динамически меняем положение градиента в псевдоэлементе через переменные
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
            
            // Если нужно более точное управление через JS (альтернатива CSS ::before):
            const glow = card.querySelector('.course-card::before');
            // В данном случае мы используем CSS-эффект, но здесь можно добавить Tilt.js логику
        });
    });
};

initCardsGlow();
const initReviewsSlider = () => {
    new Swiper('.reviews__slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 2 }
        },
        autoplay: { delay: 5000 }
    });
};

initReviewsSlider();
// Инициализация капчи
let captchaAnswer;
const generateCaptcha = () => {
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    captchaAnswer = num1 + num2;
    document.getElementById('captcha-label').innerText = `Решите пример: ${num1} + ${num2} =`;
};

// Валидация телефона (только цифры)
const phoneInput = document.getElementById('phone');
phoneInput?.addEventListener('input', (e) => {
    e.target.value = e.target.value.replace(/[^0-9]/g, '');
});

// AJAX отправка
const contactForm = document.getElementById('ajax-form');
const formMessage = document.getElementById('form-message');

contactForm?.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const userInput = parseInt(document.getElementById('captcha-input').value);

    if (userInput !== captchaAnswer) {
        formMessage.innerText = "Ошибка капчи. Попробуйте снова.";
        formMessage.className = "form__message error";
        generateCaptcha();
        return;
    }

    // Имитация AJAX
    const submitBtn = contactForm.querySelector('button');
    submitBtn.disabled = true;
    submitBtn.innerText = "Отправка...";

    try {
        // Здесь был бы ваш fetch('/send.php', { method: 'POST', body: new FormData(contactForm) });
        await new Promise(resolve => setTimeout(resolve, 1500)); // Имитация задержки сети
        
        formMessage.innerText = "Успешно! Мы свяжемся с вами в ближайшее время.";
        formMessage.className = "form__message success";
        contactForm.reset();
        generateCaptcha();
    } catch (err) {
        formMessage.innerText = "Произошла ошибка. Попробуйте позже.";
        formMessage.className = "form__message error";
    } finally {
        submitBtn.disabled = false;
        submitBtn.innerText = "Запросить доступ";
    }
});

generateCaptcha();