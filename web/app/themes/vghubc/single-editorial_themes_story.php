<?php 
/*
 * Template Name: Theme Story
 * Template Post Type: post
 */

?>
<?php get_header(); ?>

<div class="theme-story-head">
	<div class="layer-bg">
		<video width="100%" height="100%" autoplay loop>
			<source src="<?php echo get_template_directory_uri(); ?>/assets/img/willie/videobg.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>
	<div class="layer-1">
		<div class="container">
			<div class="inner-wrap">
				<div class="title">vital</div>
			</div>
		</div>
	</div>
	<div class="layer-2">
		<div class="container">
			<div class="inner-wrap">
				<div class="tagline">Future of Surgery</div>
				<h1>Willie's Story</h1>
			</div>
		</div>
	</div>
	<div id="movewithmouse" class="layer-3">
		<span class="text">Scroll</span>
		<div class="bar-container">
			<span class="bar"></span>
		</div>
	</div>
	<div class="layer-4 theme-story-video">
		<div class="theme-video-play-btn">
			<i class="fa fa-play" aria-hidden="true" data-video="https://www.youtube.com/embed/ky4wepA0S5Y?rel=0&controls=0&showinfo=0&autoplay=1"></i>
		</div>
		<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div id="cta-message">
	<div class="cta-message-content">
		<div class="close">
			<span></span>
			<span></span>
		</div>
		<div class="text-block">
			<h2>Enjoy Father’s Day brunch on us!</h2>
			<p>
				Celebrate the gift of health and create more memories with the dads in your life by signing up to win a $100 VISA Gift Card.
			</p>
			<p class="thank-you hidden">You've successfully registered for a chance to win. We'll be in touch via email to let you know more details.</p>
			<div class="fb-buttons">
				<span class="share-btn fb-login btn facebook" onclick="FacebookLogin.login(this);">Register with Facebook</span>
			</div>

			<?php print do_shortcode('[luminate_form form_id="1560" submit_text="Register with Email" js_callback="FacebookLogin.submitLuminateSurveyCallback" form_class="facebook-luminate hidden"]'); ?>
		</div>
		<div class="img-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/willie/brunch.png');"></div>
	</div>
</div>

<section class="panel theme-story-row text-right" data-transition="fadeUp">
	<div class="img-block"></div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<h3>VGH team saves father of three</h3>
				<p>
					At one point, Willie Dalagan didn’t think he would have very much time with his family.
					In spring of 2016, Willie’s health rapidly declined and he was in urgent need of a lung transplant.
				</p>
				<p>
					“A patient with this disease only has two to five years to live,” he says. “I’d look at my kids and started thinking about, ‘Ok, what’s going to happen here?’”
				</p>
				<p>
					The 44-year old was admitted to Vancouver General Hospital (VGH) with respiratory failure. He was previously diagnosed with Idiopathic Pulmonary Fibrosis – a disease that causes scarring of the lungs.
				</p>
				<p>
					He needed new lungs and he needed them quickly.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="panel theme-story-row text-right" data-transition="fadeUp">
	<div class="img-block">
		<!-- <video width="100%" height="100%" autoplay loop>
			<source src="<?php echo get_template_directory_uri(); ?>/assets/img/willie/videobg.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video> -->
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/willie/willie.jpg" alt="">
	</div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<h3>Dire situation</h3>
			</div>
		</div>
	</div>
</section>

<section class="panel theme-story-row text-right" data-transition="fadeUp">
	<div class="img-block"></div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<p>
					While waiting, Willie’s condition suddenly deteriorated. Doctors at VGH needed to keep him alive until they found a suitable transplant. 
				</p>
			</div>
		</div>
	</div>
</section>

<section class="panel theme-story-row theme-full-width-img" data-transition="fadeUp">
	<div class="img-block">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/willie/fullwidth01.jpg" alt="">
	</div>
</section>

<section class="panel theme-story-row text-left" data-transition="fadeUp">
	<div class="img-block"></div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<p>
					They used the novel ECMO machine – a portable “heart-lung” machine, a device that extracts and oxygenates a patient’s blood before re-infusing it.
				</p>
			</div>
		</div>
	</div>
</section>

<section class="panel theme-story-row text-left" data-transition="fadeUp">
	<div class="img-block">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/willie/surgery.jpg" alt="">
	</div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<h3>"I have to live"</h3>
			</div>
		</div>
	</div>
</section>

<section class="panel theme-story-row text-left" data-transition="fadeUp">
	<div class="img-block"></div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<p>
					Thankfully, VGH found new lungs for the dying man. The double-lung transplant took about seven hours and he was discharged less than a month later. This was a testament to Willie’s strength and the world class care at VGH. 
				</p>
				<p>
					The construction manager doesn’t remember much while recovering in the ICU.
				</p>
				<p>
					“I remember asking myself, ‘Have I done enough for my family; created enough good memories?’ And my answer was ‘No. I have to live. I l have to live fill those gaps.’”
				</p>
			</div>
		</div>
	</div>
</section>

<section class="panel theme-story-row text-right" data-transition="fadeUp">
	<div class="img-block">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/willie/instruments.jpg" alt="">
	</div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<h3>Appreciation everyday</h3>
			</div>
		</div>
	</div>
</section>

<section class="panel theme-story-row text-right" data-transition="fadeUp">
	<div class="img-block"></div>
	<div class="text-block">
		<div class="container">
			<div class="inner-wrap">
				<p>
					Willie is thankful, every day, for the care he received at VGH.
				</p>
				<p>
					“The team at Vancouver General Hospital made it possible for me to have a second lease on life,” he says, “and I’m not going to waste it.”
				</p>
				<p>
					“I want to go for it.”
				</p>
			</div>
		</div>
	</div>
</section>

<section class="panel theme-story-row theme-full-width-img last" data-transition="fadeUp">
	<div class="img-block">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/willie/fullwidth02.jpg" alt="">
	</div>
</section>

<section class="panel extra-padded theme-sharing-panel">
	<div class="container">
		<div class="inner-wrap">
			<div class="text-block">
				<h2>Enjoy Father’s Day brunch on us!</h2>
				<p class="message">
					Celebrate the gift of health and create more memories with the dads in your life by signing up to win a $100 VISA Gift Card.
				</p>
				<p class="thank-you hidden">You've successfully registered for a chance to win. We'll be in touch via email to let you know more details.</p>
				<div class="fb-buttons">
					<span class="share-btn fb-login btn facebook" onclick="FacebookLogin.login(this);">Register with Facebook</span> <span class="share-btn btn email-signup" onclick="FacebookLogin.showEmailForm(this);">Register with Email</span>
				</div>

				<?php print do_shortcode('[luminate_form form_id="1560" submit_text="Submit Entry" js_callback="FacebookLogin.submitLuminateSurveyCallback" form_class="facebook-luminate hidden"]'); ?>
			</div>
			<div class="img-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/willie/brunch.png');"></div>
		</div>
	</div>
</section>

<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
