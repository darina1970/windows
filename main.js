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
  const slidesToShow = 3;
  const gap = 24;

  function updateSlider() {
    const slideWidth = slides[0].offsetWidth + gap;
    slider.style.transform = `translateX(-${index * slideWidth}px)`;
  }

  nextBtn.addEventListener('click', () => {
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

  window.addEventListener('resize', updateSlider);