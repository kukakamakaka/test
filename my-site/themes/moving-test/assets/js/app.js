
document.addEventListener('DOMContentLoaded', () => {

    // 1. ШАПКА СКРОЛЛЫ (Бұрынғыша қалады, бұл дұрыс)
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

// 2. МОБИЛЬДІ МӘЗІР (ЖАҢА ТҮЗЕТІЛГЕН НҰСҚА)
const burger = document.getElementById('burger'); // ID арқылы алу
const mobileMenu = document.getElementById('mobileMenu');

if (burger && mobileMenu) {
    burger.addEventListener('click', (e) => {
        e.stopPropagation(); // Басқанда оқиғаның басқа жаққа кетпеуі үшін
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');

        // Мәзір ашылғанда артқы фон (body) скролл болмауы үшін
        if (mobileMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
            document.body.style.touchAction = 'none'; // Мобилкадағы скроллды блоктайды
        } else {
            document.body.style.overflow = 'auto';
            document.body.style.touchAction = 'auto';
        }
    });

    // Мәзірден тыс жерді (экранды) басқанда жабылуы (UX үшін жақсы)
    document.addEventListener('click', (e) => {
        if (mobileMenu.classList.contains('active') && !mobileMenu.contains(e.target) && !burger.contains(e.target)) {
            burger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
}

 // 3. МОБИЛЬДІ АККОРДЕОН (ЖАҚСАРТЫЛҒАН НҰСҚА)
const mobileItems = document.querySelectorAll('.mobile-item');

mobileItems.forEach(item => {
    const link = item.querySelector('.mobile-link');
    const dropdown = item.querySelector('.mobile-dropdown');

    if (dropdown) {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation(); // Оқиғаның жоғары қарай таралмауы үшін

            // БАСҚАЛАРЫН ЖАБУ (Мәзір жинақы тұруы үшін)
            mobileItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('open')) {
                    otherItem.classList.remove('open');
                    const otherSpan = otherItem.querySelector('.mobile-link span');
                    if (otherSpan) otherSpan.textContent = '+';
                }
            });

            // ҚАЗІРГІ ПУНКТТІ АШУ/ЖАБУ
            const isOpen = item.classList.toggle('open');

            // Плюс/Минус белгісін ауыстыру
            const span = link.querySelector('span');
            if (span) {
                span.textContent = isOpen ? '−' : '+';
            }
        });
    }
});

    // 4. ГАЛЕРЕЯ СКРОЛЛ (Өзгеріссіз қалдырдым, бірақ қатеден сақтану үшін тексеріс қостым)
    const gallerySlider = document.querySelector('.gallery__slider');
    const galleryDots = document.querySelectorAll('.gallery__dot');
    const galleryItems = document.querySelectorAll('.gallery__item');

    if (gallerySlider && galleryDots.length > 0 && galleryItems.length > 0) {
        const updateGalleryDots = () => {
            const scrollLeft = gallerySlider.scrollLeft;
            const itemWidth = galleryItems[0].offsetWidth + 40;
            const activeIndex = Math.round(scrollLeft / itemWidth);
            galleryDots.forEach((dot, index) => {
                dot.classList.toggle('gallery__dot--active', index === activeIndex);
            });
        };

        gallerySlider.addEventListener('scroll', updateGalleryDots);

        // Бастапқы позиция (3-ші суретке фокус жасау)
        if (galleryItems.length >= 3) {
            setTimeout(() => {
                const targetItem = galleryItems[2];
                const scrollOffset = targetItem.offsetLeft - (gallerySlider.clientWidth / 2) + (targetItem.offsetWidth / 2);
                gallerySlider.scrollTo({ left: scrollOffset, behavior: 'smooth' });
                updateGalleryDots();
            }, 300);
        }
    }

// 5. SERVICES SLIDER (КҮШТІ НҰСҚА)
const servicesSlider = document.querySelector('.services-slider-wrapper');
const servicesTrack = document.querySelector('.services-track');
const servicesDots = document.querySelectorAll('.services-pagination .dot');

if (servicesSlider && servicesTrack) {
    const cards = servicesTrack.querySelectorAll('.service-card');

    const setInitialPosition = () => {
        if (cards.length >= 3) {
            const targetCard = cards[2]; // 3-ші карточка

            // Нақты ортаға есептеу
            const containerCenter = servicesSlider.offsetWidth / 2;
            const cardCenter = targetCard.offsetLeft + (targetCard.offsetWidth / 2);
            const scrollPos = cardCenter - containerCenter;

            // Snap-ты уақытша алып тастау
            servicesSlider.style.scrollSnapType = 'none';

            // Тікелей жылжыту
            servicesSlider.scrollLeft = scrollPos;

            // Snap-ты 100мс-тан кейін қайта қосу
            setTimeout(() => {
                servicesSlider.style.scrollSnapType = 'x mandatory';
                updateServicesDots();
            }, 100);
        }
    };

    const updateServicesDots = () => {
        const sliderCenter = servicesSlider.scrollLeft + (servicesSlider.offsetWidth / 2);

        let activeIndex = 0;
        let minDiff = Infinity;

        cards.forEach((card, index) => {
            const cardCenter = card.offsetLeft + (card.offsetWidth / 2);
            const diff = Math.abs(cardCenter - sliderCenter);
            if (diff < minDiff) {
                minDiff = diff;
                activeIndex = index;
            }
        });

        servicesDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === activeIndex);
        });
    };

    servicesSlider.addEventListener('scroll', updateServicesDots);

    // Бұл жері маңызды: бет толық жүктелгенше күтеміз
    window.addEventListener('load', setInitialPosition);
    // Қосымша тексеріс
    setTimeout(setInitialPosition, 500);
}



});

