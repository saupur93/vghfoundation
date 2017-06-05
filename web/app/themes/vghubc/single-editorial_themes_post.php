<?php 
/*
 * Template Name: Simplified Template (2017)
 * Template Post Type: themes_post
 */

?>
<?php get_header(); ?>

<div class="page-wrap">

	<div class="container">
		<div class="inner-wrap">
			<div class="theme-head surgery">
				<div class="title">surgery</div>
				<!-- <div class="tagline">Future of Surgery</div> -->
				<h1>Our goal is to create a state-of-the-art, efficient and <br />effective surgical program across VGH and UBC Hospital</h1>
			</div>
		</div>
	</div>

	<section class="panel">
		<div class="container">
			<div class="inner-wrap">
				<div class="theme-video-box">
					<div class="cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/surgery-video-cover.jpg');" data-video="https://www.youtube.com/embed/Uz2C7hCGD-U?controls=0&showinfo=0&autoplay=1">
						<i class="fa fa-play" aria-hidden="true"></i>
					</div>
					<iframe width="100%" height="720" src="" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="theme-stories">
					<a href="<?php echo site_url(); ?>/2017/05/31/willies-story/" class="story" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/story-01-thumb.png');">
						Willie's Story
					</a>
          <a href="" class="story" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/story-02-thumb.png');">
            Giving back to health care
          </a>
          <a href="" class="story" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/story-03-thumb.jpg');">
            The Future of Surgery
          </a>
				</div>
			</div>
		</div>
	</section>

	<section class="panel extra-padded">
		<div class="container">
			<div class="narrow-wrap">
				<p>
					Together, Vancouver General Hospital (VGH) and UBC Hospital are the cornerstones of surgical excellence in this province. Whether you are dealing with tumours, traumas, or transplants, we’re often the only place that can help. The <em>Future of Surgery</em> strengthens the resources of VGH and UBC Hospital as a single, state-of-the-art, efficient, and effective surgical program.
				</p>
				<p>
					We are raising funds to purchase the most advanced equipment, attract the best minds, and support leading-edge research and innovation.
				</p>
				<ul>
					<li>Hybrid operating room at VGH</li>
					<li>16 new, optimally sized operating rooms and a 40-bed peri-operative care unit at VGH</li>
					<li>Eight bed high acuity unit at UBC Hospital</li>
					<li>Enhanced inpatient units at UBC Hospital</li>
				</ul>
				<div class="theme-learn-more">
					Learn More about the <em>Future of Surgery</em>
					<a href="" target="_blank">Download <em>The Case for Support</em></a>
				</div>
			</div>
		</div>
	</section>

	<section class="panel extra-padded cta-panel bg-color-cta">
		<div class="container">
			<div class="inner-wrap">
				<h2>Give Today. Donate to our Surgery Funds.</h2>
				<p><a class="button white-keyline" href="https://secure.vghfoundation.ca/site/Donation2?df_id=1740&amp;mfc_pref=T&amp;1740.donation=form1">Donate</a></p>
				<p>For more information, please contact <a href="tel:6048754676">604 875 4676</a></p>
			</div>
		</div>
	</section>

</div>

	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
