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

  const catalogTrigger = document.querySelector('li[data-submenu="catalog"]');
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


  const requestBtn = document.getElementById('request-btn');
  const modal = document.getElementById('request-modal');
  const modalOverlay = modal.querySelector('.modal-overlay');
  const modalClose = modal.querySelector('.modal-close');

  function openModal() {
    modal.classList.add('active');
    document.body.classList.add('modal-open');
  }

  function closeModal() {
    modal.classList.remove('active');
    document.body.classList.remove('modal-open');
  }

  // Открыть
  requestBtn.addEventListener('click', openModal);

  // Закрыть
  modalOverlay.addEventListener('click', closeModal);
  modalClose.addEventListener('click', closeModal);

  // ESC
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('active')) {
      closeModal();
    }
  });


  const form = document.getElementById('request');

  document.querySelectorAll('.custom-select').forEach(select => {
    const trigger = select.querySelector('.custom-select__trigger');
    const value = select.querySelector('.custom-select__value');
    const options = select.querySelectorAll('.custom-option');
    const realSelect = select
      .closest('.custom-select-wrapper')
      .querySelector('select');

    trigger.addEventListener('click', () => {
      select.classList.toggle('active');
    });


    options.forEach(option => {
      option.addEventListener('click', () => {
        value.textContent = option.textContent;
        value.style.opacity = '1';
        realSelect.value = option.dataset.value;


        select.classList.remove('active');
        select.classList.remove('error');


        trigger.style.background = 'var(--color-white)';
        trigger.style.border = '1px solid transparent';
      });
    });


    document.addEventListener('click', e => {
      if (!select.contains(e.target)) {
        select.classList.remove('active');
        trigger.style.background = 'var(--color-white)';
        trigger.style.border = '1px solid transparent';
      }
    });
  });


  form.addEventListener('submit', e => {
    let hasError = false;

    // Проверка input
    form.querySelectorAll('input[required]').forEach(input => {
      if (!input.value.trim()) {
        input.classList.add('error');
        input.style.background = 'rgba(27,27,27,0.08)';
        input.style.border = '1px solid rgba(47,47,47,0.2)';
        hasError = true;
      } else {
        input.classList.remove('error');
        input.style.background = 'var(--color-white)';
        input.style.border = '1px solid transparent';
      }
    });

    // Проверка custom select
    const realSelect = form.querySelector('select[name="client"]');
    const customSelect = form.querySelector('.custom-select');

    if (realSelect && !realSelect.value) {
      customSelect.classList.add('error');
      customSelect.querySelector('.custom-select__trigger').style.background = 'rgba(27,27,27,0.08)';
      customSelect.querySelector('.custom-select__trigger').style.border = '1px solid rgba(47,47,47,0.2)';
      hasError = true;
    } else if (customSelect) {
      customSelect.classList.remove('error');
      customSelect.querySelector('.custom-select__trigger').style.background = 'var(--color-white)';
      customSelect.querySelector('.custom-select__trigger').style.border = '1px solid transparent';
    }

    if (hasError) {
      e.preventDefault();
    }
  });

  /* ===== Clear error on input ===== */
  form.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', () => {
      input.classList.remove('error');
      input.style.background = 'var(--color-white)';
      input.style.border = '1px solid transparent';
    });
  });

  
});
