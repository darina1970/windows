document.addEventListener('DOMContentLoaded', () => {
  const select = document.querySelector('.city-select');
  const text = document.querySelector('.city-text');

  select.addEventListener('change', () => {
    text.textContent = select.value;
  });

  const burger = document.querySelector('.header__burger');
  const burgerMenu = document.querySelector('.burger-menu');
  const overlay = document.querySelector('.burger-overlay');
  const burgerLinks = document.querySelectorAll('.burger-menu a');

  // Функция открытия/закрытия меню
  function toggleMenu() {
    burger.classList.toggle('active');
    burgerMenu.classList.toggle('open');
    overlay.classList.toggle('active');
  }

  // Клик по бургеру
  burger.addEventListener('click', toggleMenu);

  // Клик по overlay
  overlay.addEventListener('click', toggleMenu);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && burgerMenu.classList.contains('open')) {
      toggleMenu();
    }
  });

  burgerLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');

      if (href.startsWith('#')) {
        e.preventDefault();
        toggleMenu();

        const target = document.querySelector(href);
        if (target) {
          const headerHeight = document.querySelector('.header').offsetHeight;
          const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight;

          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      } else {
        toggleMenu();
        window.location.href = href;
      }
    });
  });

  const catalogTrigger = document.querySelector('li[data-submenu="catalog"]'); // Главный пункт "Каталог"
  const catalogLevel = document.querySelector('.burger-menu__level--catalog');
  const mainLevel = document.querySelector('.burger-menu__level--main');
  const backButtons = document.querySelectorAll('.burger-back');

  catalogTrigger.addEventListener('click', () => {
    mainLevel.classList.remove('active');
    catalogLevel.classList.add('active'); 
  });

  backButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      catalogLevel.classList.remove('active');
      mainLevel.classList.add('active');
    });
  });

  const slider = document.querySelector('.slider__wrapper');
  const slides = document.querySelectorAll('.review-card');
  const prevBtn = document.querySelector('.reviews-arrow.prev');
  const nextBtn = document.querySelector('.reviews-arrow.next');

  let index = 0;
  const gap = 24;

  function getSlidesToShow() {
    if (window.innerWidth <= 650) return 1;
    if (window.innerWidth < 1024) return 2;
    return 3;
  }

  function updateSlider() {
    const slidesToShow = getSlidesToShow();
    const slideWidth = slides[0].offsetWidth + gap;
    const maxIndex = slides.length - slidesToShow;

    if (index > maxIndex) index = maxIndex < 0 ? 0 : maxIndex;

    slider.style.transform = `translateX(-${index * slideWidth}px)`;
  }

  nextBtn.addEventListener('click', () => {
    const slidesToShow = getSlidesToShow();
    if (index < slides.length - slidesToShow) {
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

  slider.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
    isSwiping = true;
  });

  slider.addEventListener('touchmove', (e) => {
    if (!isSwiping) return;
    currentX = e.touches[0].clientX;
  });

  slider.addEventListener('touchend', () => {
    const diff = startX - currentX;
    const slidesToShow = getSlidesToShow();

    if (diff > 50 && index < slides.length - slidesToShow) {
      index++;
    } else if (diff < -50 && index > 0) {
      index--;
    }

    updateSlider();
    isSwiping = false;
  });


  window.addEventListener('resize', updateSlider);
  updateSlider();

  
});
