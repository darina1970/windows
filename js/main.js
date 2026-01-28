document.addEventListener('DOMContentLoaded', () => {

  // Фиксируем высоту вьюпорта
  const setModalHeight = () => {
    document.documentElement.style.setProperty(
      '--vh',
      `${window.innerHeight * 0.01}px`
    );
  };
  setModalHeight();
  window.addEventListener('resize', setModalHeight);

  // Выбор города, определение констант 
  const DEFAULT_CITY = 'Белгород';
  const STORAGE_KEY = 'selectedCity';

  const MODAL_CONTENT = {
    request: {
      title: 'Рассчитать стоимость',
      subtitle:
        'Оставьте заявку и наш менеджер перезвонит, чтобы уточнить детали и подготовить точный расчёт под ваш проект',
    },
    callback: {
      title: 'Обратный звонок',
      subtitle:
        'Оставьте заявку и наш менеджер перезвонит вам в течение дня',
    },
    measure: {
      title: 'Вызвать замерщика',
      subtitle:
        'Услуга доступна в Белгороде и в радиусе 100 км от города. Специалист приедет в удобное для вас время',
    },

  };


  const citySelect = document.querySelector('.city-select');
  const cityText = document.querySelector('.city-text');

  const saveCity = (city) => localStorage.setItem(STORAGE_KEY, city);
  const loadCity = () => localStorage.getItem(STORAGE_KEY) || DEFAULT_CITY;


  // Секция HERO
  const heroTitle = document.querySelector('.hero-title');
  const heroCity = document.querySelector('.hero-city');
  const heroBtnText = document.querySelector('.hero-btn-text');

  const updateHeroByCity = (city) => {
    if (!heroTitle || !heroCity || !heroBtnText) return;

    if (city === DEFAULT_CITY) {
      heroTitle.textContent = 'Окна и остекление под ключ в';
      heroCity.textContent = 'Белгороде';
      heroBtnText.textContent = 'Рассчитать с монтажом';
    } else {
      heroTitle.textContent = 'Поставка окон напрямую с производства. ';
      heroCity.textContent = 'Оптовые цены';
      heroBtnText.textContent = 'Оптовый прайс';
    }
  };

  // Footer
  const measureBtns = document.querySelectorAll('.measure-btn');
  const updateMeasureButtonByCity = (city) => {
    measureBtns.forEach(btn => {
      btn.hidden = (city !== DEFAULT_CITY);
    })
  };

  // Бургер меню
  const burger = document.querySelector('.header__burger');
  const burgerMenu = document.querySelector('.burger-menu');
  const burgerOverlay = document.querySelector('.burger-overlay');
  const burgerLinks = document.querySelectorAll('.burger-menu a');

  const openBurger = () => {
    burger.classList.add('active');
    burgerMenu.classList.add('open');
    burgerOverlay.classList.add('active');
  };

  const closeBurger = () => {
    burger.classList.remove('active');
    burgerMenu.classList.remove('open');
    burgerOverlay.classList.remove('active');
  };

  burger.addEventListener('click', () => {
    burgerMenu.classList.contains('open') ? closeBurger() : openBurger();
  });

  burgerOverlay.addEventListener('click', closeBurger);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && burgerMenu.classList.contains('open')) {
      closeBurger();
    }
  });

  burgerLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      if (
        link.classList.contains('request-btn') ||
        link.classList.contains('callback-request')
      ) return;

      const href = link.getAttribute('href');
      closeBurger();

      if (href.startsWith('#')) {
        e.preventDefault();
        const target = document.querySelector(href);
        if (!target) return;

        const headerHeight = document.querySelector('.header').offsetHeight;
        const top =
          target.getBoundingClientRect().top +
          window.scrollY -
          headerHeight;

        window.scrollTo({ top, behavior: 'smooth' });
      } else {
        window.location.href = href;
      }
    });
  });

  // Бургер субменю
  const catalogTrigger = document.querySelector('li[data-submenu="catalog"]');
  const catalogLevel = document.querySelector('.burger-menu__level--catalog');
  const mainLevel = document.querySelector('.burger-menu__level--main');
  const backButtons = document.querySelectorAll('.burger-back');

  catalogTrigger?.addEventListener('click', () => {
    mainLevel.classList.remove('active');
    catalogLevel.classList.add('active');
  });

  backButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      catalogLevel.classList.remove('active');
      mainLevel.classList.add('active');
    });
  });

  // Модалка
  const modal = document.getElementById('request-modal');
  const modalOverlay = modal.querySelector('.modal-overlay');
  const modalClose = modal.querySelector('.modal-close');
  const modalTitle = modal.querySelector('.form-title');
  const modalSubtitle = modal.querySelector('.form-subtitle');

  const promoField = modal.querySelector('.promo-field');
  const promoInput = promoField?.querySelector('input');

  const openModal = () => {
    modal.classList.add('is-active');
    document.body.classList.add('modal-open');
  };

  const closeModal = () => {
    modal.classList.remove('is-active');
    document.body.classList.remove('modal-open');
  };

  const setModalContent = (type) => {
    const content = MODAL_CONTENT[type];
    if (!content) return;

    modalTitle.textContent = content.title;
    modalSubtitle.textContent = content.subtitle;
  };

  const updateFormByCity = (city) => {
    if (!promoField) return;

    if (city === DEFAULT_CITY) {
      promoField.hidden = true;
      promoInput.value = '';
    } else {
      promoField.hidden = false;
    }
  };

  const openModalWithBurgerCheck = () => {
    const city = citySelect.value || DEFAULT_CITY;
    updateFormByCity(city);

    if (burgerMenu.classList.contains('open')) {
      closeBurger();
      burgerMenu.addEventListener(
        'transitionend',
        () => openModal(),
        { once: true }
      );
    } else {
      openModal();
    }
  };

  // Кнопки, открывающие модалку
  
  document.querySelectorAll('.request-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      setModalContent('request');
      openModalWithBurgerCheck();
    });
  });

  document.querySelectorAll('.callback-request').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      setModalContent('callback');
      openModalWithBurgerCheck();
    });
  });

  document.querySelectorAll('.measure-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      setModalContent('measure');
      openModalWithBurgerCheck();
    });
  });

  modalClose.addEventListener('click', closeModal);
  modalOverlay.addEventListener('click', closeModal);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('is-active')) {
      closeModal();
    }
  });

  // Смена города
  citySelect.addEventListener('change', () => {
    const city = citySelect.value;
    cityText.textContent = city;
    saveCity(city);
    updateHeroByCity(city);
    updateFormByCity(city);
    updateMeasureButtonByCity(city);
  });

  const savedCity = loadCity();
  citySelect.value = savedCity;
  cityText.textContent = savedCity;
  updateHeroByCity(savedCity);
  updateFormByCity(savedCity);
  updateMeasureButtonByCity(savedCity);

  // Слайдер
  const viewport = document.querySelector('.slider-viewport');
  const track = document.querySelector('.slider-track');
  const slides = document.querySelectorAll('.review-card');
  const prevBtn = document.querySelector('.reviews-arrow.prev');
  const nextBtn = document.querySelector('.reviews-arrow.next');

  const GAP = 24;
  let index = 0;

  function getSlidesToShow() {
    if (window.innerWidth <= 650) return 1;
    if (window.innerWidth < 1024) return 2;
    return 3;
  }

  function getSlideWidth() {
    return slides[0].offsetWidth + GAP;
  }

  function getMaxIndex() {
    return slides.length - getSlidesToShow();
  }

  function updateSlider(animate = true) {
    if (index < 0) index = 0;
    if (index > getMaxIndex()) index = getMaxIndex();

    track.style.transition = animate ? 'transform 0.3s ease' : 'none';
    track.style.transform = `translateX(-${index * getSlideWidth()}px)`;
  }

  nextBtn.addEventListener('click', () => {
    if (index < getMaxIndex()) {
      index++;
      updateSlider();
    }
  });

  prevBtn.addEventListener('click', () => {
    if (index > 0) {
      index--;
      updateSlider();
    }
  });

  let startX = 0;
  let currentX = 0;
  let isSwiping = false;

  viewport.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
    currentX = startX;
    isSwiping = true;
    track.style.transition = 'none';
  });

  viewport.addEventListener('touchmove', (e) => {
    if (!isSwiping) return;

    currentX = e.touches[0].clientX;
    const diff = startX - currentX;
    const offset = index * getSlideWidth() + diff;

    const maxOffset = getMaxIndex() * getSlideWidth();
    const limitedOffset = Math.max(0, Math.min(offset, maxOffset));

    track.style.transform = `translateX(-${limitedOffset}px)`;
  });

  viewport.addEventListener('touchend', () => {
    if (!isSwiping) return;

    const diff = startX - currentX;

    if (diff > 50 && index < getMaxIndex()) {
      index++;
    } else if (diff < -50 && index > 0) {
      index--;
    }

    updateSlider();
    isSwiping = false;
  });

  window.addEventListener('resize', () => {
    updateSlider(false);
  });


  updateSlider();
});