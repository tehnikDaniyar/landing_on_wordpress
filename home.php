<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?> 
<div class="observerMarker"></div>
		<main class="page">
			<section class="page__top top" id="top">
				<div class="top__container _container">
					<div class="top__slider">
						<!-- Slider main container -->
						<div class="swiper">
							<h1 class="top__title title"><?php the_field('main_title'); ?></h1>

							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<?php
										global $post;

										$myposts = get_posts([ 
											'numberposts' => -1,
											// 'offset'      => 1,
											'category'    => 2
										]);

										if( $myposts ){
											foreach( $myposts as $post ){
												setup_postdata( $post );
												?>
												
												<div class="swiper-slide _ibg">
													<h2 class="swiper-slide__title"><?php the_title(); ?></h2>
													<?php the_post_thumbnail(); ?>
												</div>


												<?php 
											}
										} else {
											// Постов не найдено
										}

										wp_reset_postdata(); // Сбрасываем $post
									?>
							</div>
							<div class="swiper-scrollbar"></div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__services services" id="services">
				<div class="services__container _container">
					<h2 class="services__title title">Услуги</h2>
					<div class="services__body">
						<div class="services__item item-services">
							<div class="item-services__icon _ibg">
								<img src="<?php the_field('service-video-icon'); ?>" alt="иконка видеонаблюдение">
							</div>
							<?php the_field('service-video'); ?>
						</div>
						<div class="services__item item-services">
							<div class="item-services__icon">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/services/video.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/services/video.jpg" alt="иконка видеонаблюдение"></picture>
							</div>
									<?php the_field('service-alarmSystem'); ?>
						</div>
						<div class="services__item item-services">
							<div class="item-services__icon">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/services/video.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/services/video.jpg" alt="иконка видеонаблюдение"></picture>
							</div>
							<?php the_field('service-accesControl'); ?>
						</div>
					</div>
				</div>
			</section>
			<section class="page__prices prices" id="prices">
				<div class="prices__container _container">
					<h2 class="prices__title title">Расценки на услуги</h2>
					<div class="prices__body">
						<div class="prices__choose-categoryes">
							<select name="category" id="selector">
								<option value="start" selected disabled>выберите категорию</option>
								<option value="video">видеонаблюдение</option>
								<option value="alarm-system">сигнализация</option>
								<option value="acces-control">контроль доступа</option>
							</select>
						</div>
						<div class="prices__categoryes categoryes">
							<div class="categoryes__item" id="prices-video"
								data-src="<?php get_template_directory_uri() . '/assets/files/priceAlarmySystem.json'?>">
								<div class="categoryes__wrapper">
									<div class="categoryes__inner">
										<label class="categoryes__label" for="amountIndoorCameras">Укажите количество внутренних
											камер</label>
										<input class="categoryes__input" value="1" type="number" id="amountIndoorCameras" min="1"
											max="32">
									</div>
									<div class="categoryes__inner">
										<label class="categoryes__label" for="amountOutdoorCameras">Укажите количество уличных
											камер
											камер</label>
										<input class="categoryes__input" value="0" type="number" id="amountOutdoorCameras" min="0"
											max="32">
									</div>
									<div class="categoryes__inner">
										<div class="categoryes__options">
											<label class="categoryes__label" for="installationMethod">Выбирете способ монтажа
												кабеля</label>
											<select class="categoryes__select" id="installationMethod">
												<option class="categoryes__option" value="open">Открытый способ</option>
												<option class="categoryes__option" value="amstrong">За фальш-потолком</option>
												<option class="categoryes__option" value="decor">В кабельных каналах</option>
												<option class="categoryes__option" value="combined">Коминированный из всех
													перечисленых
												</option>
											</select>
										</div>
									</div>
									<div class="categoryes__inner">
										<div class="categoryes__additional additional">
											<div class="additional__title">Выбирите дополнительные опции</div>
											<div class="additional__item">
												<label class="categoryes__label" for="height8m">Установка на высоте более 8
													метров</label>
												<input class="categoryes__input" type="checkbox" id="height8m">
											</div>
											<div class="additional__item">
												<label class="categoryes__label" for="street">Протяжка улиного кабеля по опорам на
													стальном троссе</label>
												<input class="categoryes__input" type="checkbox" id="street">
											</div>
											<div class="additional__item">
												<label class="categoryes__label" for="undeground">Уклада кабеля в траншеи или по
													подземным коммуникациям</label>
												<input class="categoryes__input" type="checkbox" id="undeground">
											</div>
										</div>
									</div>
									<div class="categoryes__res">
										<div id="resVideo"></div>
									</div>
									<button class="categoryes__closeButton" type="button"></button>
								</div>
							</div>
							<div class="categoryes__item" id="prices-alarmSystem">
								<div class="categoryes__wrapper">
									<div class="categoryes__inner">
										<label class="categoryes__label" for="amountRooms">Укажите количество
											комнат</label>
										<input class="categoryes__input" type="number" id="amountRooms" min="1" value="1">
									</div>
									<div class="categoryes__inner">
										<label class="categoryes__label" for="amountWindows">Укажите количество
											окон</label>
										<input class="categoryes__input" type="number" id="amountWindows" min="1" value="1">
									</div>
									<div class="categoryes__inner">
										<label class="categoryes__label" for="amountDoors">Укажите количество
											дверей</label>
										<input class="categoryes__input" type="number" id="amountDoors" min="1" value="1">
									</div>
									<div class="categoryes__inner">
										<div class="categoryes__options">
											<label class="categoryes__label" for="installationMethodAlarm">Выбирите способ
												прокладки
												кабеля</label>
											<select class="categoryes__select" id="installationMethodAlarm">
												<option class="categoryes__option" value="open">Открытым способом</option>
												<option class="categoryes__option" value="decore">В кабельных каналах</option>
												<option class="categoryes__option" value="armstrong">За фальш потолком</option>
												<option class="categoryes__option" value="combo">Коминированный</option>
											</select>
										</div>
									</div>
									<div class="categoryes__inner">
										<div class="categoryes__additional additional">
											<div class="additional__title">Выбирите дополнительные опции</div>
											<div class="additional__item">
												<label class="categoryes__label" for="hidden">Штробление</label>
												<input class="categoryes__input" type="checkbox" class="options__input" id="hidden">
											</div>
											<div class="additional__item">
												<label class="categoryes__label" class="options__label" for="height">Высота
													помещений более
													5метров</label>
												<input class="categoryes__input" type="checkbox" id="height">
											</div>
											<div class="additional__item">
												<label class="categoryes__label" for="expencive">Дорогой ремонт
													помещения</label>
												<input class="categoryes__input" type="checkbox" id="expencive">
											</div>
										</div>
									</div>
									<div class="categoryes__res">
										<div id="resAlarmSysytem"></div>
									</div>
									<button class="categoryes__closeButton" type="button"></button>
								</div>
							</div>
							<div class="categoryes__item" id="prices-accesControl">
								acces-control
								<button class="categoryes__closeButton" type="button"></button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page__feedback feedback" id="feedback">
				<div class="feedback__container _container">
					<h2 class="feedback__title title">Вы можете оставить нам заявку</h2>
					<form action="http://daniyardev.atwebpages.com/files/sendmailer.php" method="post"
						class="feedback__form">
						<div class="feedback__inner">
							<input type="text" class="feedback__input" id="name" name="name" placeholder="Введите ваше имя *">
							<div class="feedback__errorMessage">Имя не может быть пустым</div>
						</div>
						<div class="feedback__inner">
							<input type="tel" class="feedback__input" id="tel" name="tel"
								placeholder="Укажите ваш номер телефона *">
							<div class="feedback__errorMessage">Возможно вы забыли добавить + к 996, или ввели
								неверное количество
								цифр</div>
						</div>
						<div class="feedback__inner">
							<select id="select" class="feedback__select" name="select">
								<option value="none" disabled selected>Выбирите категорию работ *</option>
								<option value="video">Видеонаблюдение</option>
								<option value="alarm">Сигнализация</option>
								<option value="acces-control">СКУД</option>
							</select>
							<div class="feedback__errorMessage">Необходимо выбрать категорию</div>
						</div>
						<textarea class="feedback__message" name="message" id="message"
							placeholder="Опишите вкратце что нужно сделать"></textarea>
						<div class="feedback__inner">
							<input class="feedback__checkbox" type="checkbox" name="checkbox" id="agreement" checked>
							<label class="feedback__label" for="agreement">Я согласен на обработку персональных данных</label>
							<div class="feedback__errorMessage">Отметте чтобы проолжить</div>
						</div>
						<button class="feedback__button" type="submit">Отправить</button>
						<div class="feedback__confirmation feedback__confirmation_ok">Спасибо!!! Наш менеджер свяжется с вами
							в ближайшее время</div>
						<div class="feedback__confirmation feedback__confirmation_error">Произошла ошибка, попробуйте позже
						</div>
					</form>
				</div>
			</section>
			<section class="page__gallery gallery" id="gallery">
				<h2 class="gallery__title title">Наши работы</h2>
				<div class="gallery__body">
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php the_field('first_img_webp'); ?>" type="image/webp"><img src="<?php the_field('first_img_jpg'); ?>" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/02.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/02.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/03.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/03.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/04.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/04.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/05.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/05.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/06.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/06.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/07.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/07.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/08.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/08.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/09.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/09.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/10.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/10.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/11.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/11.jpg" alt="work"></picture>
						</div>
					</div>
					<div class="gallery__item">
						<div class="gallery__image _ibg">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/gallery/12.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/12.jpg" alt="work"></picture>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?> 
