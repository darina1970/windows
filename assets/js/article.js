document.addEventListener('DOMContentLoaded', () => {
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
