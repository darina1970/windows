document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.catalog-tab');
    const cards = document.querySelectorAll('.catalog-card');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {

            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const filter = tab.dataset.filter;

            cards.forEach(card => {
            if (filter === 'all' || card.dataset.category === filter) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
            });

        });
    });
});

