<?php
// Do not allow directly accessing this file.
/*
Template Name: Контакты
Template Post Type: post, page, event
*/
if (!defined('ABSPATH')) {
    exit('Direct script access denied.');
}
?>

<?php get_header(); ?>

    <main id="planer-main-page">
        <section class="planer-main-section-top planer-layout-section">
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
                <div class="planer-main-wrapper">
                    <div class="planer-title-page">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="planer-contacts-information planer-layout-grid">
                        <div class="planer-footer-info-tel planer-layout-column">
                            <div class="planer-footer-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <a class="planer-footer-info-text-shadow" href="">							
                                <?php
                                    $val = get_option('planer_tel_option'); //option_key - имя опции
                                    echo trim($val);
                                ?>
                            </a>
                            <span class="planer-footer-text-down">Ответим в любое время</span>
                        </div>
                                <!-- <div class="planer-footer-info-time planer-layout-column">
                                    <div class="planer-footer-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <span class="planer-footer-info-text-shadow">9:00 - 18:00</span>
                                    <span class="planer-footer-text-down">Без выходных</span>
                                </div> -->
                        <div class="planer-footer-info-mail planer-layout-column">
                            <div class="planer-footer-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <a class="planer-footer-info-text-shadow" href="">							
                                <?php
                                    $val = get_option('planer_mail_option'); //option_key - имя опции
                                    echo trim($val);
                                ?>
                            </a>
                            <span class="planer-footer-text-down">Вы всегда можете написать нам</span>
                        </div>
                        <div class="planer-footer-info-adress planer-layout-column">
                            <div class="planer-footer-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <span class="planer-footer-info-text-shadow">г. Ростов-на-Дону, ул. Социалистическая, 74 офис 312</span>
                            <a class="planer-footer-text-down" target="_blank" href="https://yandex.ru/maps/?um=constructor%3A84cfd214c5a2664e25f036a58e8f353dd9c5373e5a063abdbef92b8beeb0e672&source=constructorLink">Показать на карте </a>
                        </div>
                    </div>
                    <div class="planer-contacts-this-map">
                        <!--<img src="https://cdnimg.rg.ru/img/content/127/68/58/kartagoogle1000.jpg" alt="map"> -->
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A84cfd214c5a2664e25f036a58e8f353dd9c5373e5a063abdbef92b8beeb0e672&amp;width=550&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
                <div class="planer-back">
                    <?php the_sky_planer(); ?>
                    <div class="planer-city"><img src="<?php echo get_template_directory_uri(); ?>/assets/img//banner/city.png" alt=""></div>
                    <?php the_grass_planer(); ?>
                </div>
            </div>
        </section>
    </main>
        <div class="planer-modal-open">
			<div class="planer-modal-wrapper">
				<button class="planer-modal-close"><i class="fa fa-times"></i></button>
				<form method="post"  class="planer-modal-form">
					<legend>Контактная информация</legend>
					<div class="planer-group"> 
						<input id="pl-client" type="text" name="planer_client" placeholder="Ваше ФИО" minlength="7" maxlength="30" required="required">
					</div>
					<div class="planer-group">
						<input  type="text" name="client_tel" placeholder="Ваш телефон" pattern="/^\d[\d\(\)\ -]{4,14}\d$/" required="required">
					</div>
					<div class="planer-group">
						<input id="planer-email-client" type="mail" name="client_email" placeholder="Ваш email" pattern="/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i" required="required">
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