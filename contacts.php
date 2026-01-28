<?php
/* Template Name: contacts */
get_header(); ?>

<main>
    <section class="contacts-page page-section">
        <div class="container">
            <h2>Контакты</h2>
            <p class="contacts-top-subtitle">Свяжитесь с нами удобным способом — ответим на вопросы, рассчитаем стоимость и согласуем дату выезда</p>
            <div class="contacts__wrapper">
                <div class="contacts-left">
                    <div class="contacts-left__top">
                        <div class="contacts-item">
                            <p class="contacts-subtitle">Телефоны</p>
                            <a class="contacts-tel" href="tel:+79290022221">+7 (929) 002-22-21</a><br>
                            <a class="contacts-tel" href="tel:+79311073777">+7 (931) 107-37-77</a>
                        </div>
                        <div class="contacts-item">
                            <p class="contacts-subtitle">Монтаж и коммерческое остекление</p>
                            <a class="contacts-tel" href="tel:+79103685127">+7 (910) 368-51-27</a>
                        </div>
                        
                        <a class="contacts-action" href="#">заказать обратный звонок</a>
                    </div>
                    <div class="contacts-item contacts-email-socials--mobile">
                        <div class="contacts-email">
                            <p class="contacts-subtitle">Почта</p>
                            <a class="contacts-email-info" href="mailto:optovka_okon_31@mail.ru">optovka_okon_31@mail.ru</a>
                        </div>
                        <div class="contacts-socials--mobile">
                            <p class="contacts-subtitle">Max, Телеграм, ВК</p>
                            <div class="contacts-socials">
                                <a href="#" aria-label="Telegram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/max-black.svg" alt="Telegram социальная сеть"></a>
                                <a href="#" aria-label="Telegram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tg-black.svg" alt="Telegram социальная сеть"></a>
                                <a href="#" aria-label="VK"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/vk-black.svg" alt="ВК социальная сеть"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contacts-right">
                    <div class="contacts-item">
                        <p class="contacts-subtitle">Адрес</p>
                        <p class="contacts-address">г. Белгород, промышленная 9б, завод Мир Окон</p>
                    </div>
                    <div class="contacts-item">
                        <p class="contacts-subtitle">Время работы</p>
                        <p class="contacts-time-info">Понедельник–пятница<br> c 9:00 до 18:00</p>
                    </div>
                    <div class="contacts-item contacts-socials--desktop">
                        <p class="contacts-subtitle">Max, Телеграм, ВК</p>
                        <div class="contacts-socials">
                            <a href="#" aria-label="Telegram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/max-black.svg" alt="Telegram социальная сеть"></a>
                            <a href="#" aria-label="Telegram"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tg-black.svg" alt="Telegram социальная сеть"></a>
                            <a href="#" aria-label="VK"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/vk-black.svg" alt="ВК социальная сеть"></a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="map" id="map"></div>
        </div>
        
    </section>
</main>
<?php
get_footer();
?>