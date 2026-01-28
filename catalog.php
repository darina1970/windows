<?php
/* Template Name: catalog */
get_header(); ?>

<main>
    <section class="catalogue-main page-section">
        <div class="container">
            <h2>Каталог</h2>
            <div class="catalogue-main__wrapper">
                <div class="catalog-tabs">
                    <button class="catalog-tab active" data-filter="all">Все</button>
                    <button class="catalog-tab" data-filter="plastic-windows">Пластиковые окна</button>
                    <button class="catalog-tab" data-filter="aluminium-windows">Алюминиевые окна</button>
                    <button class="catalog-tab" data-filter="plastic-doors">Пластиковые двери</button>
                    <button class="catalog-tab" data-filter="aluminium-doors">Алюминиевые двери</button>
                    <button class="catalog-tab" data-filter="aluminium-structures">Алюминиевые конструкции</button>
                </div>

                <div class="catalog-grid">

                    <article class="catalog-card" data-category="plastic-windows">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/catalogue-1.jpg" alt="">
                        </div>
                        
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>

                    <article class="catalog-card" data-category="aluminium-windows">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>

                    <article class="catalog-card" data-category="plastic-doors">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>
                    <article class="catalog-card" data-category="plastic-doors">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>
                    <article class="catalog-card" data-category="plastic-doors">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>
                    <article class="catalog-card" data-category="plastic-doors">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>
                    <article class="catalog-card" data-category="plastic-doors">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>
                    <article class="catalog-card" data-category="plastic-doors">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>

                    <article class="catalog-card" data-category="aluminium-doors">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>

                    <article class="catalog-card" data-category="aluminium-structures">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>
                    <article class="catalog-card" data-category="aluminium-structures">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>
                    <article class="catalog-card" data-category="aluminium-structures">
                        <div class="catalog-card-image__wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/catalogue/catalogue-item-1.jpg" alt="">
                        </div>
                        <h4 class="catalog-card__title">КВЕ 58 Engine</h3>
                        <a href="product-card.html" class="catalog-btn">Подробнее</a>
                    </article>

                </div>

            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>