<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__wrapper container">
            <div class="header__wrapper-left">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.svg" alt="logo" /></a>
                <div class="city-select-wrapper">
                    <span class="city-text">Белгород</span>
                    <svg width="11" height="19" viewBox="0 0 11 19" fill="none">
                        <g clip-path="url(#clip0_479_2463)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.08999 15.7855L10.776 11.2605C11.0747 10.9721 11.0747 10.5046 10.776 10.2163C10.4774 9.92791 9.99326 9.92791 9.69464 10.2163L5.49945 14.2659L1.30536 10.2163C1.00674 9.92791 0.522583 9.92791 0.223964 10.2163C-0.0746548 10.5046 -0.0746548 10.9721 0.223964 11.2605L4.91001 15.7855C5.04574 15.9166 5.21998 16 5.47566 16C5.73638 16 5.95019 15.9205 6.08999 15.7855Z" fill="#2F2F2F"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_479_2463">
                        <rect width="11" height="19" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <select class="city-select">
                        <option>Белгород</option>
                        <option>Курск</option>
                        <option>Воронеж</option>
                        <option>Орёл</option>
                        <option>Брянск</option>
                        <option>Липецк</option>
                    </select>
                </div>
            </div>
            
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="nav-list__item"><a href="<?php echo esc_url(home_url('/catalogue')); ?>">Каталог</a></li>
                    <li class="nav-list__item"><a href="<?php echo esc_url(home_url('/portfolio')); ?>">Проекты</a></li>
                    <li class="nav-list__item"><a href="#reviews">Отзывы</a></li>
                    <li class="nav-list__item"><a href="<?php echo esc_url(home_url('/delivery')); ?>">Доставка</a></li>
                    <li class="nav-list__item"><a href="<?php echo esc_url(home_url('/contacts')); ?>">Контакты</a></li>
                    <li class="nav-list__item"><a href="<?php echo esc_url(home_url('/blog')); ?>">Блог</a></li>
                </ul>
            </nav>
            <button class="btn btn-arrow btn-header request-btn" id="request-btn" data-modal="request">
                <span>Оставить заявку</span>
                <div class="button-arrow header-arrow">
                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M11.54 4.03568C11.7353 3.84042 11.7353 3.52384 11.54 3.32858L8.35801 0.146596C8.16275 -0.0486665 7.84617 -0.0486665 7.65091 0.146596C7.45565 0.341858 7.45565 0.65844 7.65091 0.853702L10.4793 3.68213L7.65091 6.51056C7.45565 6.70582 7.45565 7.0224 7.65091 7.21766C7.84617 7.41293 8.16275 7.41293 8.35801 7.21766L11.54 4.03568ZM0 3.68213L-4.37114e-08 4.18213L11.1864 4.18213L11.1864 3.68213L11.1864 3.18213L4.37114e-08 3.18213L0 3.68213Z" fill="currentColor"/>
                    </svg>
                </div>
            </button>
            <div class="header__burger" aria-label="menu" role="button" tabindex="0">
                <span class="line line--top"></span>
                <span class="line line--bottom"></span>
            </div>
            
        </div>
        
    </header>
    <div class="burger-overlay"></div>
    <div class="burger-menu">
        
        <div class="burger-menu__level burger-menu__level--main active">

            <ul class="burger-menu__list">
                <li data-submenu="catalog">
                    Каталог
                    <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                        <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                    </svg>
                </li>
                <li>
                    <a href="portfolio.html">
                        Проекты
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#reviews">
                        Отзывы
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="delivery.html">
                        Доставка
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="contacts.html">
                        Контакты
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="blog.html">
                        Блог
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
            </ul>

            <button class="btn btn-arrow btn-header request-btn" id="request-btn" data-modal="request">
                <p>Оставить заявку</p>
                <div class="button-arrow header-arrow">
                    <svg width="12" height="8" viewBox="0 0 12 8" fill="none">
                        <path d="M11.54 4.03568C11.7353 3.84042 11.7353 3.52384 11.54 3.32858L8.35801 0.146596C8.16275 -0.0486665 7.84617 -0.0486665 7.65091 0.146596C7.45565 0.341858 7.45565 0.65844 7.65091 0.853702L10.4793 3.68213L7.65091 6.51056C7.45565 6.70582 7.45565 7.0224 7.65091 7.21766C7.84617 7.41293 8.16275 7.41293 8.35801 7.21766L11.54 4.03568ZM0 3.68213L-4.37114e-08 4.18213L11.1864 4.18213L11.1864 3.68213L11.1864 3.18213L4.37114e-08 3.18213L0 3.68213Z" fill="currentColor"/>
                    </svg>
                </div>
            </button>

            <div class="burger-contacts">
                <div class="burger-tels">
                    <p class="footer-subtitle">Телефоны</p>
                    <a class="footer-tel" href="tel:+79290022221">+7 (929) 002-22-21</a><br>
                    <a class="footer-tel" href="tel:+79311073777">+7 (931) 107-37-77</a>
                </div>
                <div class="burger-socials">
                    <p class="footer-subtitle">Max, Телеграм, ВК</p>
                    <div class="burger-socials__wrapper">
                        <a href="#" aria-label="Telegram"><img class="burger-social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/max-black.svg" alt="Telegram социальная сеть"></a>
                        <a href="#" aria-label="Telegram"><img class="burger-social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tg-black.svg" alt="Telegram социальная сеть"></a>
                        <a href="#" aria-label="VK"><img class="burger-social-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/vk-black.svg" alt="ВК социальная сеть"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="burger-menu__level burger-menu__level--catalog">
            <button class="burger-back">Каталог</button>

            <ul class="burger-menu__list">
                <li>
                    <a href="catalogue.html">
                        Пластиковые окна
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                                <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="catalogue.html">
                    Алюминиевые окна
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="catalogue.html">
                        Пластиковые двери
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                                <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="catalogue.html">
                        Алюминиевые двери
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="catalogue.html">
                        Алюминиевые конструкции
                        <svg width="6" height="11" viewBox="0 0 6 11" fill="none">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M5.78552 4.91001L1.2605 0.223964C0.972145 -0.0746555 0.504625 -0.0746555 0.216268 0.223964C-0.0720894 0.522583 -0.0720894 1.00674 0.216268 1.30536L4.2659 5.50055L0.216268 9.69464C-0.0720894 9.99326 -0.0720894 10.4774 0.216268 10.776C0.504625 11.0747 0.972145 11.0747 1.2605 10.776L5.78552 6.08999C5.91659 5.95426 6 5.78002 6 5.52434C6 5.26362 5.92052 5.04981 5.78552 4.91001Z" fill="#2F2F2F"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

    </div>