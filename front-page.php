<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="hero__wrapper container">
            <div class="hero-content__wrapper">
                <h1 class="hero-heading">
                    <span class="hero-title">Окна и остекление под ключ в </span> 
                    <span class="hero-city">Белгороде</span>
                </h1>
                <p class="hero-subtitle">Производство и монтаж окон ПВХ и алюминий: <br> 
                    от стандартных моделей до панорамных решений</p>
                <button class="btn btn-arrow btn-hero request-btn" id="request-btn" data-modal="request">
                    <p class="hero-btn-text">Рассчитать с монтажом</p>
                    <div class="button-arrow hero-arrow">
                        <svg width="23" height="12" viewBox="0 0 23 12" fill="none">
                            <path d="M22.5303 6.05328C22.8232 5.76039 22.8232 5.28551 22.5303 4.99262L17.7574 0.21965C17.4645 -0.0732435 16.9896 -0.0732436 16.6967 0.21965C16.4038 0.512543 16.4038 0.987417 16.6967 1.28031L20.9393 5.52295L16.6967 9.76559C16.4038 10.0585 16.4038 10.5334 16.6967 10.8263C16.9896 11.1191 17.4645 11.1191 17.7574 10.8263L22.5303 6.05328ZM0 5.52295L-6.55671e-08 6.27295L22 6.27295L22 5.52295L22 4.77295L6.55671e-08 4.77295L0 5.52295Z" fill="currentColor"/>
                        </svg>
                    </div>
                </button>
            </div>
            <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hero-image.jpg" alt="Дом с окнами">
            </div>
        </div>
    </section>
    <section class="numbers">
        <div class="numbers__wrapper container">
            <div class="numbers-content numbers-top">
                <p class="number">10 лет</p>
                <p class="number-text">опыта в индустрии оконных и дверных решений</p>
            </div>
            <div class="numbers-content numbers-middle">
                <p class="number">96%</p>
                <p class="number-text">положительных отзывов — 
                    у нас есть цифры, подтверждающие это</p>
            </div>
            <div class="numbers-content numbers-bottom">
                <p class="number">80%</p>
                <p class="number-text">заказов — это повторные заказы от довольных клиентов</p>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <div class="advantages__wrapper">

                <div class="advantages-content">
                    <div class="advantages-top">
                        <p class="advantages-title">
                        Мы ценим ваше доверие и подкрепляем его высокими стандартами качества.
                        </p>

                        <p class="advantages-text">
                        Гарантируем точность, долговечность и возможность вашего контроля
                        на всех этапах работы
                        </p>
                    </div>
                    

                    <div class="advantages-cards">
                        <div class="adv-card">
                            <svg class="adv-card__icon" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <rect width="12" height="12" fill="#3E6FD0"/>
                            </svg>
                            <h4 class="adv-card__title">Инновации для комфорта</h4>
                            <p>Внедряем передовые 
                                технологии для максимальной энергоэффективности 
                                и долговечности ваших окон и дверей</p>
                        </div>
                        <div class="adv-card">
                            <svg class="adv-card__icon" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" fill="#3E6FD0"/>
                                <rect x="15" y="15" width="12" height="12" fill="#3E6FD0"/>
                            </svg>
                            <h4 class="adv-card__title">Дизайн под ваши правила</h4>
                            <p>Широкий выбор стилей, цветов 
                                и отделок, чтобы изделие идеально соответствовало вашему дому</p>
                        </div>
                        <div class="adv-card">
                            <svg class="adv-card__icon" width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" fill="#3E6FD0"/>
                                <rect x="15" y="15" width="12" height="12" fill="#3E6FD0"/>
                                <rect y="27" width="12" height="12" transform="rotate(-90 0 27)" fill="#3E6FD0"/>
                                <rect x="15" y="12" width="12" height="12" transform="rotate(-90 15 12)" fill="#3E6FD0"/>
                            </svg>
                            <h4 class="adv-card__title">Надежность на годы вперед</h4>
                            <p>Гарантия результата в договоре — прописываем параметры теплозащиты, шумоизоляции 
                                и срок службы фурнитуры</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="catalogue">
        <div class="catalogue__wrapper container">
            <h2>Каталог</h2>
            <div class="catalogue__content">
                <div class="catalogue-item item-1">
                    <div class="catalogue-image__wrapper">
                        <img class="catalogue-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/catalogue-1.jpg" alt="">
                    </div>
                    <div class="catalogue-item__title">
                        <p>Пластиковые окна</p>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8367 0.750047C16.8367 0.335834 16.5009 4.77166e-05 16.0867 4.71898e-05L9.33668 4.8117e-05C8.92247 4.74427e-05 8.58668 0.335834 8.58668 0.750048C8.58668 1.16426 8.92247 1.50005 9.33668 1.50005L15.3367 1.50005L15.3367 7.50005C15.3367 7.91426 15.6725 8.25005 16.0867 8.25005C16.5009 8.25005 16.8367 7.91426 16.8367 7.50005L16.8367 0.750047ZM0.530334 16.3064L1.06066 16.8367L16.617 1.28038L16.0867 0.750048L15.5564 0.219717L4.39584e-06 15.7761L0.530334 16.3064Z" fill="#2F2F2F"/>
                        </svg>
                    </div>
                </div>
                <div class="catalogue-item item-2">
                    <div class="catalogue-image__wrapper">
                        <img class="catalogue-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/catalogue-2.png" alt="">
                    </div>
                    <div class="catalogue-item__title">
                        <p>Алюминиевые окна</p>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8367 0.750047C16.8367 0.335834 16.5009 4.77166e-05 16.0867 4.71898e-05L9.33668 4.8117e-05C8.92247 4.74427e-05 8.58668 0.335834 8.58668 0.750048C8.58668 1.16426 8.92247 1.50005 9.33668 1.50005L15.3367 1.50005L15.3367 7.50005C15.3367 7.91426 15.6725 8.25005 16.0867 8.25005C16.5009 8.25005 16.8367 7.91426 16.8367 7.50005L16.8367 0.750047ZM0.530334 16.3064L1.06066 16.8367L16.617 1.28038L16.0867 0.750048L15.5564 0.219717L4.39584e-06 15.7761L0.530334 16.3064Z" fill="#2F2F2F"/>
                        </svg>
                    </div>
                </div>
                <div class="catalogue-item item-3">
                    <div class="catalogue-image__wrapper">
                        <img class="catalogue-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/catalogue-3.png" alt="">
                    </div>
                    <div class="catalogue-item__title">
                        <p>Алюминиевые двери</p>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8367 0.750047C16.8367 0.335834 16.5009 4.77166e-05 16.0867 4.71898e-05L9.33668 4.8117e-05C8.92247 4.74427e-05 8.58668 0.335834 8.58668 0.750048C8.58668 1.16426 8.92247 1.50005 9.33668 1.50005L15.3367 1.50005L15.3367 7.50005C15.3367 7.91426 15.6725 8.25005 16.0867 8.25005C16.5009 8.25005 16.8367 7.91426 16.8367 7.50005L16.8367 0.750047ZM0.530334 16.3064L1.06066 16.8367L16.617 1.28038L16.0867 0.750048L15.5564 0.219717L4.39584e-06 15.7761L0.530334 16.3064Z" fill="#2F2F2F"/>
                        </svg>
                    </div>
                </div>
                <div class="catalogue-item item-4">
                    <div class="catalogue-image__wrapper">
                        <img class="catalogue-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/catalogue-4.jpg" alt="">
                    </div>
                    <div class="catalogue-item__title">
                        <p>Пластиковые двери</p>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8367 0.750047C16.8367 0.335834 16.5009 4.77166e-05 16.0867 4.71898e-05L9.33668 4.8117e-05C8.92247 4.74427e-05 8.58668 0.335834 8.58668 0.750048C8.58668 1.16426 8.92247 1.50005 9.33668 1.50005L15.3367 1.50005L15.3367 7.50005C15.3367 7.91426 15.6725 8.25005 16.0867 8.25005C16.5009 8.25005 16.8367 7.91426 16.8367 7.50005L16.8367 0.750047ZM0.530334 16.3064L1.06066 16.8367L16.617 1.28038L16.0867 0.750048L15.5564 0.219717L4.39584e-06 15.7761L0.530334 16.3064Z" fill="#2F2F2F"/>
                        </svg>
                    </div>
                </div>
                <div class="catalogue-item item-5">
                    <div class="catalogue-image__wrapper">
                        <img class="catalogue-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/catalogue-5.jpg" alt="">
                    </div>
                    <div class="catalogue-item__title">
                        <p>Алюминиевые раздвижные системы</p>
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.8367 0.750047C16.8367 0.335834 16.5009 4.77166e-05 16.0867 4.71898e-05L9.33668 4.8117e-05C8.92247 4.74427e-05 8.58668 0.335834 8.58668 0.750048C8.58668 1.16426 8.92247 1.50005 9.33668 1.50005L15.3367 1.50005L15.3367 7.50005C15.3367 7.91426 15.6725 8.25005 16.0867 8.25005C16.5009 8.25005 16.8367 7.91426 16.8367 7.50005L16.8367 0.750047ZM0.530334 16.3064L1.06066 16.8367L16.617 1.28038L16.0867 0.750048L15.5564 0.219717L4.39584e-06 15.7761L0.530334 16.3064Z" fill="#2F2F2F"/>
                        </svg>
                    </div>
                </div>
                <div class="catalogue-item item-6">
                    
                    <div class="catalogue-btn__bg">
                        <p>Смотреть все</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="steps">
        <div class="container">

            <div class="steps__wrapper">
                <div class="steps__top">
                    <h3><span class="steps-title--blue">Всего 5 шагов</span> — от заявки <br> до монтажа</h3>
                    <p>Типовые объекты выполняем за 1–2 дня, <br> крупные — по согласованному графику</p>
                </div>
                <div class="steps__bottom">
                    <div class="steps__card steps__card--line">
                        <div class="steps__card-number">
                            <p>1</p>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" fill="#3E6FD0"/>
                            </svg>
                        </div>
                        <div class="steps__card-content">
                            <h5 class="steps__card-title">Заявка</h5>
                            <p class="steps__card-description">Оставляете заявку 
                            на сайте или звоните нам. Консультируем, уточняем задачу и даём первичную оценку стоимости</p>
                        </div>
                    </div>
                    <div class="steps__card steps__card--line">
                        <div class="steps__card-number">
                            <p>2</p>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" fill="#3E6FD0"/>
                            </svg>
                        </div>
                        <div class="steps__card-content">
                            <h5 class="steps__card-title">Бесплатный выезд
                                замерщика </h5>
                            <p class="steps__card-description">Приезжаем в удобное время, делаем точные замеры, показываем варианты 
                                и помогаем выбрать подходящий вариант</p>
                        </div>
                    </div>
                    <div class="steps__card steps__card--line">
                        <div class="steps__card-number">
                            <p>3</p>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" fill="#3E6FD0"/>
                            </svg>
                        </div>
                        <div class="steps__card-content">
                            <h5 class="steps__card-title">Договор и график</h5>
                            <p class="steps__card-description">Фиксируем цену и сроки. Любая удобная оплата — наличная, безналичная или поэтапная. 
                                Для юрлиц готовим договор, счёт и закрывающие документы</p>
                        </div>
                    </div>
                    <div class="steps__card steps__card--line">
                        <div class="steps__card-number">
                            <p>4</p>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" fill="#3E6FD0"/>
                            </svg>
                        </div>
                        <div class="steps__card-content">
                            <h5 class="steps__card-title">Монтаж</h5>
                            <p class="steps__card-description">Работаем максимально аккуратно и чисто: бережно защищаем все прилегающие поверхности 
                                и интерьер, а после установки проводим тщательную уборку. Обычно укладываемся в 1–2 дня</p>
                        </div>
                    </div>
                    <div class="steps__card">
                        <div class="steps__card-number no-line">
                            <p>5</p>
                            <svg width="12" height="13" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" fill="#3E6FD0"/>
                            </svg>
                        </div>
                        <div class="steps__card-content">
                            <h5 class="steps__card-title">Приём работы и гарантия</h5>
                            <p class="steps__card-description">Проверяем результат вместе с вами, получаете инструкции 
                                по эксплуатации. Гарантия на все — 3 года</p>
                        </div>
                        
                    </div>
                </div>

                
            </div>
                        
        </div>
    </section>
    <section class="projects">
        <div class="projects__wrapper container">
            <h2>Наши проекты</h2>
            <div class="projects__content">
                <div class="project-item project-item-1">
                    <div class="project-image__wrapper">
                        <img class="project-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/portfolio-1.jpg" alt="Проект компании">
                    </div>
                    <p class="project-item__title">Остекление лоджии</p>
                </div>
                <div class="project-item project-item-2">
                </div>
                <div class="project-item project-item-3">
                    <div class="project-image__wrapper">
                        <img class="project-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/portfolio-2.jpg" alt="Проект компании">
                    </div>
                    <p class="project-item__title">Раздвижная система в коттедже</p>
                </div>
                <div class="project-item project-item-4">
                    <div class="project-image__wrapper">
                        <img class="project-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/portfolio-3.jpg" alt="Проект компании">
                    </div>
                    <p class="project-item__title">Остекление загородного дома</p>
                </div>
                <div class="project-item project-item-5">
                    <div class="project-image__wrapper">
                        <img class="project-item__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/portfolio-4.jpg" alt="Проект компании">
                    </div>
                    <p class="project-item__title">Остекление склада</p>
                </div>
                <div class="project-item project-item-6">
                    <div class="project-image__wrapper project-btn__wrapper">
                        <div class="project-btn btn">
                            <a href="portfolio.html" class="btn btn-arrow btn-projects">
                                <p>Все проекты</p>
                                <div class="button-arrow header-arrow">
                                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none">
                                        <path d="M11.54 4.03568C11.7353 3.84042 11.7353 3.52384 11.54 3.32858L8.35801 0.146596C8.16275 -0.0486665 7.84617 -0.0486665 7.65091 0.146596C7.45565 0.341858 7.45565 0.65844 7.65091 0.853702L10.4793 3.68213L7.65091 6.51056C7.45565 6.70582 7.45565 7.0224 7.65091 7.21766C7.84617 7.41293 8.16275 7.41293 8.35801 7.21766L11.54 4.03568ZM0 3.68213L-4.37114e-08 4.18213L11.1864 4.18213L11.1864 3.68213L11.1864 3.18213L4.37114e-08 3.18213L0 3.68213Z" fill="currentColor"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews" id="reviews">
        <div class="reviews__wrapper container">
            <h2>Что говорят клиенты</h2>
            <div class="reviews-arrows__wrapper">
                <div class="reviews-arrow prev">
                    <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.175739 3.9941C-0.0585746 4.22841 -0.0585747 4.60831 0.175739 4.84263L3.99412 8.661C4.22843 8.89532 4.60833 8.89532 4.84264 8.661C5.07696 8.42669 5.07696 8.04679 4.84264 7.81248L1.44853 4.41836L4.84265 1.02425C5.07696 0.789936 5.07696 0.410037 4.84265 0.175723C4.60833 -0.058592 4.22843 -0.058592 3.99412 0.175722L0.175739 3.9941ZM16.261 4.41837L16.261 3.81837L0.600004 3.81836L0.600004 4.41836L0.600004 5.01836L16.261 5.01837L16.261 4.41837Z" fill="#2F2F2F"/>
                    </svg>
                </div>
                <div class="reviews-arrow next">
                    <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.0853 4.84263C16.3196 4.60832 16.3196 4.22842 16.0853 3.9941L12.2669 0.175726C12.0326 -0.0585889 11.6527 -0.0585889 11.4184 0.175726C11.1841 0.41004 11.1841 0.789939 11.4184 1.02425L14.8125 4.41837L11.4184 7.81248C11.1841 8.04679 11.1841 8.42669 11.4184 8.66101C11.6527 8.89532 12.0326 8.89532 12.2669 8.66101L16.0853 4.84263ZM0 4.41837L-5.24537e-08 5.01837L15.661 5.01837L15.661 4.41837L15.661 3.81837L5.24537e-08 3.81837L0 4.41837Z" fill="#2F2F2F"/>
                    </svg>
                </div>
            </div>
            <div class="reviews-slider">
                <div class="slider-viewport">
                    <div class="slider-track">
                        <div class="review-card">
                            <p class="review-card__name">Имя</p>
                            <p class="review-card__title">Вид работ</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
                        </div>
                        <div class="review-card">
                            <p class="review-card__name">Имя</p>
                            <p class="review-card__title">Вид работ</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
                        </div>
                        <div class="review-card">
                            <p class="review-card__name">Имя</p>
                            <p class="review-card__title">Вид работ</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
                        </div>
                        <div class="review-card">
                            <p class="review-card__name">Имя</p>
                            <p class="review-card__title">Вид работ</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
                        </div>
                        <div class="review-card">
                            <p class="review-card__name">Имя</p>
                            <p class="review-card__title">Вид работ</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <a class="reviews-link" href="#" target="_blank">Больше отзывов на <span class="reviews-link-title">Авито</span></a>

        </div>
        
    </section>
    <section class="calculator">
        <div class="calculator__wrapper container">
            <div class="calculator-content__wrapper">
                <h2 class="calculator-title">Получите расчет стоимости всего в <span class="calculator-span">пару кликов</span></h2>
                <p class="calculator-subtitle">Получите предварительный расчёт без визита замерщика, а мы гарантируем аккуратную установку в согласованные сроки</p>
                <button class="btn btn-arrow btn-projects request-btn" id="request-btn">
                    <p>Рассчитать с монтажом</p>
                    <div class="button-arrow hero-arrow">
                        <svg width="23" height="12" viewBox="0 0 23 12" fill="none">
                            <path d="M22.5303 6.05328C22.8232 5.76039 22.8232 5.28551 22.5303 4.99262L17.7574 0.21965C17.4645 -0.0732435 16.9896 -0.0732436 16.6967 0.21965C16.4038 0.512543 16.4038 0.987417 16.6967 1.28031L20.9393 5.52295L16.6967 9.76559C16.4038 10.0585 16.4038 10.5334 16.6967 10.8263C16.9896 11.1191 17.4645 11.1191 17.7574 10.8263L22.5303 6.05328ZM0 5.52295L-6.55671e-08 6.27295L22 6.27295L22 5.52295L22 4.77295L6.55671e-08 4.77295L0 5.52295Z" fill="currentColor"/>
                        </svg>
                    </div>
                </button>
            </div>
            <div class="calculator-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/calculator.jpg" alt="Квартира с окнами">
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>