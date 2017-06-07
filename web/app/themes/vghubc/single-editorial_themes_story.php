<?php 
/*
 * Template Name: Theme Story
 * Template Post Type: post
 */

$relatedthemes = get_field('related_theme');
$relatedthemeID = $relatedthemes[0]->ID;
$pagecolor = get_field('theme_color', $relatedthemeID);

?>
<?php get_header(); ?>

<div class="theme-story-head theme-color-<?php echo $pagecolor; ?>">
	<?php $storyheaderimg = get_field('story_header_image'); ?>
	<div class="layer-bg" style="background-image:url(<?php echo $storyheaderimg['url']; ?>);">
		<?php if(is_single(24126)): ?>
			<video width="100%" height="100%" autoplay loop>
				<source src="<?php echo get_template_directory_uri(); ?>/assets/img/willie/videobg.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
		<?php endif; ?>
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
				<?php if(get_field('story_tagline')): ?>
					<div class="tagline"><?php the_field('story_tagline'); ?></div>
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<div id="movewithmouse" class="layer-3">
		<span class="text">Scroll</span>
		<div class="bar-container">
			<span class="bar"></span>
		</div>
	</div>
	<?php if(get_field('story_feature_video')): ?>
		<div class="layer-4 theme-story-video">
			<div class="theme-video-play-btn">
				<i class="fa fa-play" aria-hidden="true" data-video="https://www.youtube.com/embed/<?php the_field('story_feature_video'); ?>?rel=0&controls=0&showinfo=0&autoplay=1"></i>
			</div>
			<iframe width="1280" height="720" src="" frameborder="0" allowfullscreen></iframe>
		</div>
	<?php endif; ?>
</div>


<div id="cta-message" class="register-panel">
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
			<div class="fb-buttons">
				<span class="share-btn fb-login btn facebook" onclick="FacebookLogin.login(this);">Register with Facebook</span> <span class="share-btn btn email-signup" onclick="FacebookLogin.showEmailForm(this);">Register with Email</span>
			</div>

			<?php //print do_shortcode('[luminate_form form_id="1560" submit_text="Submit Entry" js_callback="FacebookLogin.submitLuminateSurveyCallback" form_class="facebook-luminate hidden"]'); ?>
		</div>
		<div class="img-block" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/willie/brunch.png');"></div>
	</div>
</div>


<?php
if( have_rows('story_content') ):
	while ( have_rows('story_content') ) : the_row();

	if( get_row_layout() == 'text_with_image' ):

		include(locate_template('templates/layouts/layout-story_text_with_image.php'));

	elseif( get_row_layout() == 'full_width_image' ): 

		include(locate_template('templates/layouts/layout-story_full_width_image.php'));

	endif;

	endwhile;
endif;

?>

<section class="panel extra-padded theme-sharing-panel register-panel">
	<div class="container">
		<div class="inner-wrap">
			<div class="text-block">
				<h2>Create more memories with your dad!</h2>
				<p class="message">
					Enjoy Father’s Day brunch on us by signing up to win a $100 VISA Gift Card.
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
