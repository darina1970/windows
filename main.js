document.addEventListener('DOMContentLoaded', () => {
  const select = document.querySelector('.city-select');
  const text = document.querySelector('.city-text');

  select.addEventListener('change', () => {
    text.textContent = select.value;
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
