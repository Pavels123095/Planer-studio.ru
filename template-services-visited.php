<?php
// Do not allow directly accessing this file.
/*
Template Name: visited
Template Post Type: post, event, services, page, cases
*/

if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
the_post();
$id = get_the_ID();
?>

<?php get_header(); ?>

        <main id="planer-main-page post-<?php the_ID(); ?>">
            <section class="planer-section-services planer-main-section-top planer-layout-section">
                <div class="planer-wrapper-main-section-top planer-layout-container">
                    <div class="planer-main-wrapper planer-layout-container">
                        <div class="planer-title-page">
                            <h1><?php the_title(); ?> - Это что?</h1>
                        </div>
                        <div class="planer-first-screen-description planer-description-visited-site">
                            <?php the_content(); ?>
                        </div>
                        <div class="planer-cost-services">
                            <span> от <?php echo get_post_meta($id,'planer_cost_catalog', true ); ?> руб</span>
                            <span class="planer-down-cost"> <?php echo get_post_meta($id,'planer_cost_down', true ); ?> руб</span>
                        </div>
                        <div class="planer-btn-services-call">
                            <button class="btn-planer-buy">Примеры работ</button>
                        </div>
                    </div>
                    <div class="planer-up-down-list planer-down-list">
                        <div class="planer-down-list-wrapper">
                            <i class="fas fa-sort-down"></i><span>листайте вниз</span>
                        </div>
                    </div>
                    <div class="planer-back">
                        <?php the_sky_planer(); ?>
                        <div class="planer-airplane"><?php svg_airplane(); ?></div>
                        <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                        <div class="planer-boy">
                            <?php svg_woman(); ?>
                        </div>
                        <?php the_grass_planer(); ?>
                    </div>
                </div>
            </section>
        </main>
        <section class="planer-section-blur planer-main-section-top planer-visited-section planer-layout-section">
            <div class="planer-wrapper-main-section-top">
                <div class="planer-main-content planer-layout-row">
                    <div class="planer-single-breadcrumbs planer-main-logo">
                        <?php kama_breadcrumbs(' > '); ?>
                    </div>
                    <div class="planer-main-right-content">
                        <div class="planer-main-right-contact">
                            <a class="planer-main-phone" href="">
                                <?php
                                    $val = get_option('planer_tel_option'); //option_key - имя опции
                                    echo trim($val);
                                ?>
                            </a>
                            <a class="planer-main-mail" href="">
                                <?php
                                    $val = get_option('planer_mail_option'); //option_key - имя опции
                                    echo trim($val);
                                ?>
                            </a>
                        </div>
                        <div class="planer-main-modal-btn-show">
                            <button class="planer-main-btn">Оставить заявку</button>
                        </div>
                    </div>
                </div>
                <div class="planer-visited-content-second-wrapper planer-main-wrapper planer-layout-container">
                    <div class="planer-title-page">
                        <h1>На что обратить внимание?</h1>
                    </div>
                    <div class="planer-single-description planer-description-visited-site">
                        <p>
                            При создании сайта-визитки прежде всего нужно делать упор на визуальный аспект:
                            дизайн должен быть запоминающимся и соответствующим современным требованиям.
                            С другой стороны, нужно тщательно продумать информацию,
                            которую вы собираетесь размещать на сайте:
                            она должна быть уникальной и содержать максимальное количество ваших преимуществ.
                        </p>
                    </div>
                    <div class="planer-visited-content-allow">
                        <div class="planer-how-visited-title">
                            <h3>Какие преимущества?</h3>
                        </div>
                        <ul class="planer-ul-visited-about">
                            <li>
                                <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon8.png" alt=""></span>
                                <span class="planer-li-text">Низкая стоимость</span>
                            </li>
                            <li>
                                <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon7.png" alt=""></span>
                                <span class="planer-li-text">Возможность воплотить практически любое дизайнерское решение</span>
                            </li>
                            <li>
                                <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon6.png" alt=""></span>
                                <span class="planer-li-text">Быстрая разработка</span>
                            </li>
                            <li>
                                <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon5.png" alt=""></span>
                                <span class="planer-li-text">Высокая скорость загрузки</span>
                            </li>
                            <li>
                                <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon4.png" alt=""></span>
                                <span class="planer-li-text">Простая и интуитивно-понятная структура</span>
                            </li>
                            <li>
                                <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon3.png" alt=""></span>
                                <span class="planer-li-text">Невысокая стоимость хостинга</span>
                            </li>
                            <li>
                                <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon2.png" alt=""></span>
                                <span class="planer-li-text" >Возможность использования практически любой cms</span>
                            </li>
                            <li>
                                <span class="planer-li-before"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon1.png" alt=""></span>
                                <span class="planer-li-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="planer-down-list">
                    <div class="planer-color-blue planer-down-list-wrapper">
                        <i class="fas fa-sort-down"></i><span>листайте вниз</span>
                    </div>
                </div>
                <div class="planer-back">
                    <?php the_sky_planer(); ?>
                    <div class="planer-airplane"><?php svg_airplane(); ?></div>
                    <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                    <div class="planer-boy">
                        <?php svg_woman(); ?>
                    </div>
                    <?php the_grass_planer(); ?>
                </div>
            </div>
        </section>
        <section data-name="planer-contacts" class="planer-layout-section">
            <footer id="planer-footer" class="planer-case-section-footer planer-footer-section">
                <div class="planer-footer-section-wrapper planer-layout-container">
                    <div class="planer-footer-promotion-wrapper planer-footer-wrapper-info">
                        <div class="planer-footer-content-promotion planer-layout-grid">
                            <div class="planer-title-page planer-layout-column">
                                <h1>Я заказал у вас сайт-визитку. Что произойдёт дальше?</h1>
                            </div>
                            <div class="planer-description-visited-site planer-layout-column">
                                <div class="planer-visited-footer-item-future">
                                    <i class="fas fa-comments"></i>
                                    <span>Мы обсудим все ваши пожелания по дизайну и функционалу.</span>
                                </div>
                                <div class="planer-visited-footer-item-future">
                                    <i class="fas fa-sliders-h"></i>
                                    <span>Выберем оптимальную для ваших задач и функционала CMS.</span>
                                </div>
                                <div class="planer-visited-footer-item-future">
                                    <i class="fas fa-pencil-ruler"></i>
                                    <span>Разработаем уникальный дизайн.</span>
                                </div>
                                <div class="planer-visited-footer-item-future">
                                    <i class="fas fa-file-invoice"></i>
                                    <span>При желании наполним контентом.</span>
                                </div>
                                <div class="planer-visited-footer-item-future">
                                    <i class="fas fa-fire"></i>
                                    <span>
                                        <strong>Готово, вы восхитительны!</strong>
                                        Теперь ваши потенциальные клиенты еще быстрее конвертируются в реальных.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="planer-contact-form-footer">
                        <form method="post" class="planer-question-form-footer">
                            <legend>Свяжитесь со мной</legend>
                            <p>Воспользуйтесь этой формой, чтобы задать нам интересующий вопрос или заказать услугу</p>
                            <div class="planer-form-group-footer">
                                <select name="client_subject_message" id="" required>
                                    <option value="client_question">Я хочу задать вопрос</option>
                                    <option value="">Заказать услугу</option>
                                </select>
                            </div>
                            <div class="planer-form-group-footer">
                                <input id="pl-client-quest" type="text" placeholder="Меня зовут" minlength="3" maxlength="30" name="client_name" required>
                            </div>
                            <div class="planer-form-group-footer">
                                <input id="planer-call-client" type="text" placeholder="Телефон или Эл. Почта" name="client_calls" required>
                            </div>
                            <div class="planer-form-group-footer">
                                <input id="planer-comment-client" type="text" placeholder="Комментарий" name="client_comment">
                            </div>
                            <div class="planer-form-group-footer">
                                <p>Отправляя заявку я даю согласие на обработку моих персональных данных</p>
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="planer-form-group-footer">
                                <button type="submit" class="btn-planer-question">Оставить заявку</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="planer-arrow-pagination-services">
                    <?php planer_post_navigation_services(); ?>
                </div>
            </footer>
        </section>
            <div class="planer-modal-open">
                <div class="planer-modal-wrapper">
                    <button class="planer-modal-close"><i class="fa fa-times"></i></button>
                    <form method="post"  class="planer-modal-form">
                        <legend>Контактная информация</legend>
                        <div class="planer-group"> 
                            <input id="pl-client" type="text" name="planer_client" placeholder="Ваше ФИО" required="required">
                        </div>
                        <div class="planer-group">
                            <input  type="text" id="client-tel" name="client_tel" placeholder="Ваш телефон"  required="required">
                        </div>
                        <div class="planer-group">
                            <input id="planer-email-client" type="mail" name="client_email" placeholder="Ваш email" required="required">
                        </div>
                        <div class="planer-group planer-btn-group planer-btn-group-cancel">
                            <button type="button" class="planer-modal-btn planer-btn-cancel">Отмена</button>
                        </div>
                        <div class="planer-group planer-btn-group planer-btn-group-submit">
                            <button type="submit" name="planer_client_go" class="planer-modal-btn planer-submit-modal">Далее</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="planer-modal-message">
                <div class="planer-modal-wrapper">
                    <button class="planer-modal-close"><i class="fa fa-times"></i></button>
                    <span id="planer-message-text"> </span>
                    <div class="planer-group-messages">
                        <button class="planer-btn-modal planer-btn-message">Ок</button>
                    </div>
                </div>
            </div>
            <?php planer_popup_menu(); ?>
            <?php wp_footer(); ?>
	</body>
</html>