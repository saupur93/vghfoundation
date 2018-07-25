<?php 
/*
 * Template Name: Revised Theme Template (2017)
 * Template Post Type: themes_post
 */

$pagecolor = get_field('theme_color');
?>
<?php get_header(); ?>

<div class="page-wrap">

	<div class="container">
		<div class="inner-wrap">
			<div class="theme-head theme-color-<?php echo $pagecolor; ?>">
				<div class="title"><?php the_title(); ?></div>
				<?php if(get_field('page_tagline')): ?>
					<h1><?php the_field('page_tagline'); ?></h1>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<section class="panel">
		<div class="container">
			<div class="inner-wrap">

				<?php if(get_field('feature_video_id')): ?>
					<div class="theme-video-box">
						<?php $video_thumb = get_field('feature_video_thumb'); ?>
						<div class="cover" style="background-image: url('<?php echo $video_thumb['url']; ?>');" data-video="https://www.youtube.com/embed/<?php the_field('feature_video_id'); ?>?rel=0&controls=0&showinfo=0&autoplay=1">
							<?php the_field('feature_video_title'); ?>
							<div class="theme-video-play-btn">
								<i class="fa fa-play" aria-hidden="true"></i>
							</div>
						</div>
						<iframe width="100%" height="720" src="" frameborder="0" allowfullscreen></iframe>
					</div>
				<?php endif; ?>
				
				<?php if(have_rows('related_stories')): ?>
					<div class="theme-stories">
						<?php while(have_rows('related_stories')): the_row(); ?>
							<?php
							$related_story = get_sub_field('story');
							$story_thumb = get_field('story_thumb',$related_story->ID);
							?>
							<a href="<?php echo get_permalink($related_story->ID); ?>" class="story" style="background-image: url('<?php echo $story_thumb['url']; ?>');">
								<?php echo $related_story->post_title; ?>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</section>

	<section class="panel extra-padded theme-content theme-color-<?php echo $pagecolor; ?>">
		<div class="container">
			<div class="narrow-wrap">
				<?php the_content(); ?>
				<?php if(get_field('the_case_for_support_link')): ?>
					<div class="theme-learn-more">
						Learn more about the <em>Future of Surgery</em>
						<a href="<?php the_field('the_case_for_support_link'); ?>" target="_blank">Download <em>The Case for Support</em></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<?php if(get_field('related_cta')): ?>
		<?php include(locate_template('templates/layouts/layout-call_to_action.php')); ?>
	<?php endif; ?>

	<!-- <section class="panel extra-padded cta-panel bg-color-cta">
		<div class="container">
			<div class="inner-wrap">
				<h2>Give Today. Donate to our Surgery Funds.</h2>
				<p><a class="button white-keyline" target="_blank" href="https://secure.vghfoundation.ca/site/Donation2?df_id=1740&amp;mfc_pref=T&amp;1740.donation=form1">Donate</a></p>
				<p>For more information, please contact 604 875 4676</p>
			</div>
		</div>
	</section> -->

	<?php include(locate_template('templates/partials/footer-cta.php')); ?>

</div>

	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
