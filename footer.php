		<section data-name="planer-contacts" class="planer-layout-section">
		    <footer id="planer-footer" class="planer-footer-section">
		        <div class="planer-footer-section-wrapper planer-layout-container">
					<div class="planer-footer-wrapper-info">
						<div class="planer-footer-logo planer-layout-row">
							<a href="<?php echo get_home_url(); ?>" class="footer-logo">
								<?php
									$footer_logo = get_theme_mod('footer_logo');
									$img = wp_get_attachment_image_src($footer_logo, 'full');
									if ($img) :?>
									<img src="<?php echo $img[0]; ?>" alt="">
								<?php endif; ?>
							</a>
							<div class="planer-footer-navigation">
								<?php
									wp_nav_menu(array(
										'theme_location' => 'footer_menu',
										'container' => null,
										'menu_class' => 'planer-footer-nav planer-layout-inline-template',
										'menu_id' => 'planer-footer-nav'
									));
								?>
							</div>
						</div>
						<div class="planer-footer-description-text">
                                    <?php $option_footer = get_option('footer_text');
                                    echo $option_footer['footer_text_down']; ?>
						</div>
						<div class="planer-footer-content-info-contact planer-layout-grid">
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
						<div class="planer-footer-private-politic planer-layout-container">
		            		<span>2019 © Planer Studio</span>
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