const select = document.querySelector('.city-select');
  const text = document.querySelector('.city-text');

  select.addEventListener('change', () => {
    text.textContent = select.value;
  });