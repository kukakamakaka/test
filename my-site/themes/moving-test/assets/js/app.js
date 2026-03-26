
document.addEventListener('DOMContentLoaded', () => {

    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('scrolled', window.scrollY > 50);
    });

const burger = document.getElementById('burger'); // ID арқылы алу
const mobileMenu = document.getElementById('mobileMenu');

if (burger && mobileMenu) {
    burger.addEventListener('click', (e) => {
        e.stopPropagation();
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');

        if (mobileMenu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
            document.body.style.touchAction = 'none';
        } else {
            document.body.style.overflow = 'auto';
            document.body.style.touchAction = 'auto';
        }
    });

    document.addEventListener('click', (e) => {
        if (mobileMenu.classList.contains('active') && !mobileMenu.contains(e.target) && !burger.contains(e.target)) {
            burger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
}

const mobileItems = document.querySelectorAll('.mobile-item');

mobileItems.forEach(item => {
    const link = item.querySelector('.mobile-link');
    const dropdown = item.querySelector('.mobile-dropdown');

    if (dropdown) {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();

            mobileItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('open')) {
                    otherItem.classList.remove('open');
                    const otherSpan = otherItem.querySelector('.mobile-link span');
                    if (otherSpan) otherSpan.textContent = '+';
                }
            });

            const isOpen = item.classList.toggle('open');

            const span = link.querySelector('span');
            if (span) {
                span.textContent = isOpen ? '−' : '+';
            }
        });
    }
});

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

        if (galleryItems.length >= 3) {
            setTimeout(() => {
                const targetItem = galleryItems[2];
                const scrollOffset = targetItem.offsetLeft - (gallerySlider.clientWidth / 2) + (targetItem.offsetWidth / 2);
                gallerySlider.scrollTo({ left: scrollOffset, behavior: 'smooth' });
                updateGalleryDots();
            }, 300);
        }
    }

// 5. SERVICES SLIDER
const servicesSlider = document.querySelector('.services-slider-wrapper');
const servicesTrack = document.querySelector('.services-track');
const servicesDots = document.querySelectorAll('.services-pagination .dot');

if (servicesSlider && servicesTrack) {
    const cards = servicesTrack.querySelectorAll('.service-card');

    const setInitialPosition = () => {
        if (cards.length >= 3) {
            const targetCard = cards[2]; // 3-ші карточка

            const containerCenter = servicesSlider.offsetWidth / 2;
            const cardCenter = targetCard.offsetLeft + (targetCard.offsetWidth / 2);
            const scrollPos = cardCenter - containerCenter;

            servicesSlider.style.scrollSnapType = 'none';

            servicesSlider.scrollLeft = scrollPos;

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

    window.addEventListener('load', setInitialPosition);
    setTimeout(setInitialPosition, 500);
}

// MOVERS SLIDER LOGIC
const moversSlider = document.querySelector('.movers-slider-wrapper');
const moversTrack = document.querySelector('.movers-track');

if (moversSlider && moversTrack) {
    const mCards = moversTrack.querySelectorAll('.mover-card');

    const setMoversPosition = () => {
        if (mCards.length >= 3) {
            const targetMover = mCards[2];

            const mContainerCenter = moversSlider.offsetWidth / 2;
            const mCardCenter = targetMover.offsetLeft + (targetMover.offsetWidth / 2);
            const mScrollPos = mCardCenter - mContainerCenter;

            moversSlider.style.scrollSnapType = 'none';

            moversSlider.scrollLeft = mScrollPos;

            setTimeout(() => {
                moversSlider.style.scrollSnapType = 'x mandatory';
            }, 100);
        }
    };

    // Services
    window.addEventListener('load', setMoversPosition);
    setTimeout(setMoversPosition, 500);
    window.addEventListener('resize', setMoversPosition);
}
// MOVERS PAGINATION LOGIC
const mDots = document.querySelectorAll('.movers-pagination .m-dot');

if (moversSlider && moversTrack && mDots.length > 0) {
    const mCards = moversTrack.querySelectorAll('.mover-card');

    const updateMoversDots = () => {
        const sliderCenter = moversSlider.scrollLeft + (moversSlider.offsetWidth / 2);

        let activeIndex = 0;
        let minDiff = Infinity;

        mCards.forEach((card, index) => {
            const cardCenter = card.offsetLeft + (card.offsetWidth / 2);
            const diff = Math.abs(cardCenter - sliderCenter);
            if (diff < minDiff) {
                minDiff = diff;
                activeIndex = index;
            }
        });

        mDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === activeIndex);
        });
    };

    moversSlider.addEventListener('scroll', updateMoversDots);

    mDots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            const targetCard = mCards[index];
            const scrollPos = targetCard.offsetLeft - (moversSlider.offsetWidth / 2) + (targetCard.offsetWidth / 2);

            moversSlider.scrollTo({
                left: scrollPos,
                behavior: 'smooth'
            });
        });
    });
}

// MODAL LOGIC (Тек класс арқылы басқару)
    const modal = document.getElementById('quoteModal');
    const closeBtn = document.querySelector('.close-modal');
    const quoteButtons = document.querySelectorAll('#openQuote, .footer-btn, .hero-btn, .contact-submit-btn');

    if (modal) {
        const openModal = (e) => {
            e.preventDefault();
            modal.classList.add('show'); // CSS-тегі opacity: 1 мен visibility: visible іске қосылады
            document.body.style.overflow = 'hidden'; // Артқы жақтың скроллын жабу
        };

        const closeModal = () => {
            modal.classList.remove('show');
            document.body.style.overflow = 'auto'; // Скроллды қайта қосу
        };

        // Барлық батырмаларға тыңдаушы қосу
        quoteButtons.forEach(btn => {
            btn.addEventListener('click', openModal);
        });

        // Жабу батырмасы
        if (closeBtn) {
            closeBtn.addEventListener('click', closeModal);
        }

        // Фонды (модалканың сыртын) басқанда жабу
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeModal();
            }
        });
    }


});

