<?php
// Do not allow directly accessing this file.
/*
Template Name: promotion
Template Post Type: post, event, services, page, cases
*/
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}

$id = get_the_ID();
?>

<?php get_header(); ?>
    <main id="planer-main-page post-<?php the_ID(); ?>">
        <section class="planer-main-section-top planer-layout-section">
            <div class="planer-wrapper-main-section-top planer-layout-container">
                <div class="planer-promotion planer-main-content planer-layout-row">
                    <div class="planer-main-right-content">
                        <div class="planer-single-breadcrumbs planer-main-logo">
                            <?php kama_breadcrumbs(' > '); ?>
                        </div>
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
                <div class="planer-promotion-content planer-main-wrapper planer-layout-container">
                    <div class="planer-title-page">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="planer-first-screen-description planer-description-visited-site planer-description-promotion-site">
                        <?php the_content(); ?>
                    </div>
                    <!-- <div class="planer-promotion-how-work">
                        <div class="planer-how-work-title">
                            <h3>Как это работает?</h3>
                        </div>
                        <div class="planer-how-work-content">
                            <div class="planer-how-work-item">
                                <i class="fas fa-search"></i> <span>Технический аудит и веб-аналитика</span>
                            </div>
                            <div class="planer-how-work-item">
                                <i class="far fa-flag"></i> <span>Разработка стратегии </span>
                            </div>
                            <div class="planer-how-work-item">
                                <i class="fas fa-link"></i> <span>Формирование ссылочного окружения</span>
                            </div>
                            <div class="planer-how-work-item">
                                <i class="fas fa-comment"></i><span>Подбор ключевых фраз и создание контента</span>
                            </div>
                            <div class="planer-how-work-item">
                                <i class="fas fa-sync-alt"></i> <span>Оптимизация структуры сайта</span>
                            </div>
                            <div class="planer-how-work-item">
                                <i class="fas fa-file"></i><span>Предоставление отчётов</span>
                            </div>
                        </div>
                    </div> -->
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
                    <div class="planer-boy"><?php svg_woman(); ?></div>
                    <?php the_grass_planer(); ?>
                </div>
            </div>
        </section>
    </main>
    <section data-name="planer-contacts" class="planer-layout-section">
        <footer id="planer-footer" class="planer-case-section-footer planer-footer-section">
            <div class="planer-footer-section-wrapper planer-layout-container">
                <div class="planer-footer-promotion-wrapper planer-footer-wrapper-info">
                    <div class="planer-footer-content-promotion planer-layout-grid">
                        <div class="planer-title-page planer-layout-column">
                            <h1>Почему стоит обратиться к вам за продвижением?</h1>
                        </div>
                        <div class="planer-description-promotion planer-layout-column">
                            <p>
                                Мы заботимся о том, чтобы каждый клиент знал, за что он платит, и несём солидарную ответственность за развитие проекта. 
                            </p>
                            <p>
                                Если вы так же, как и мы, придерживаетесь прозрачных профессиональных отношений и готовы к тому,
                                что на вашем сайте будет в несколько раз больше потенциальных клиентов,
                                закажите комплексное продвижение сайта в поисковых системах прямо сейчас.
                            </p>
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
				<span id="planer-message-text"> Спасибо за заявку. Наш менеджер перезвонит вам </span>
				<div class="planer-group-messages">
					<button class="planer-btn-modal planer-btn-message">Ок</button>
				</div>
			</div>
		</div>
		<?php planer_popup_menu(); ?>
		<?php wp_footer(); ?>
	</body>
</html>