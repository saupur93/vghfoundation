	<div class="page-wrap">
		<?php
			$page_header_image = null !== get_field('page_header_image') ? get_field('page_header_image')['url'] : false;
			$page_header_subtitle = null !== get_field('page_header_subtitle') ? get_field('page_header_subtitle') : false;
		?>


		<?php if($page_header_image): ?>
		  <section class="panel page-header" style="background-image:url(<?php print $page_header_image; ?>);">
		    <div class="container">
		      <div class="inner-wrap">
		        <div class="header-copy">
		          <h1><?php the_title(); ?></h1>
		          <p class="intro"><?php print $page_header_subtitle; ?></p>
		        </div>
		      </div>
		    </div>
		  </section>
		<?php else: ?>
			<section class="panel title-only">
				<div class="container">
					<h1 class="section-title"><?php the_title(); ?></h1>
				</div>
			</section>
		<?php endif; ?>

		<?php if(is_page('about')): ?>
			<section class="panel extra-padded overview-panel narrow-basic-content">
				<div class="container">
					<div class="narrow-wrap">
						<p>We raise funds for VGH, UBC Hospital, GF Strong Rehab Centre, Vancouver Coastal Health Research Institute and Vancouver Community Health Services. Together, we deliver the “plus” for a healthy continuum of care known for excellence right across the health care spectrum – from patient care to research, rehabilitation and local community health services.</p>

						<p>And the simple truth is, if you are seriously ill or injured, our hospitals are your best chance. There are few illnesses or injuries our medical teams cannot treat, no matter how complex or rare. VGH is one of two accredited Level 1 Trauma Centres in BC and, together with UBC Hospital and GF Strong, it is the province’s main referral centre. Doctors at the forefront of their specialties care for patients, discover new treatments through internationally acclaimed research, and educate the next generation of health care superstars. With donor support, the Foundation works hard to ensure that excellent care is here when you need it.</p>
					</div>
				</div>
			</section>

			<section class="panel background-v-panel">
				<div class="container">
					<div class="narrow-wrap">
						<h4>Vision</h4>
						<p>Inspiring donors. Transforming health care. Saving lives.</p>

						<h4>Mission</h4>
						<p>Harnessing the power of philanthropy to significantly improve specialized health care and research for British Columbians.</p>

						<h4>Value</h4>
						<p>Initiative & Innovatio<br>
						Integrity & Stewardship<br>
						Teamwork & Engagement</p>
					</div>
				</div>
			</section>


	    <section class="panel padded three-subpages-panel">
	      <div class="container">
	        <div class="inner-wrap">
	          <div class="row">
	            <article class="col-grid-4">
	              <img src="http://placehold.it/363x289" />
	              <div class="copy center">
	                <h3>Executive Leadership</h3>
	              </div>
	              <p class="more"><a href="#" class="read-more">Learn more</a></p>
	            </article>

	            <article class="col-grid-4">
	              <img src="http://placehold.it/363x289" />
	              <div class="copy center">
	                <h3>Board of Directors</h3>
	              </div>
	              <p class="more"><a href="#" class="read-more">Learn more</a></p>
	            </article>

	            <article class="col-grid-4">
	              <img src="http://placehold.it/363x289" />
	              <div class="copy center">
	                <h3>Patrons of Council</h3>
	              </div>
	              <p class="more"><a href="#" class="read-more">Learn more</a></p>
	            </article>
	          </div>
	        </div>
	      </div>
	    </section>


			<section class="panel extra-padded bg-image-cta" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/tmp/vital-bg.jpg);">
			    <div class="container">
			      <div class="inner-wrap">
			        <h2>Read the VGH and UBC 2015 Annual Report: <br>
			        <span class="highlighted-text">The power of philanthrophy.</span></h2>
			        <p><a href="#" class="button white-keyline">Read Now</a></p>
			      </div>
			    </div>
			  </section>


			  <section class="panel extra-padded expanding-two-column-list">
			    <div class="container">
			      <div class="inner-wrap">
			        <h2>Learn More About Us</h2>
			        <div class="col-half">
			          <p>At VGH & UBC Hospital Foundation, we partner with donors to raise essential funds over and above government funding for VGH, UBC Hospital, GF Strong Rehab Centre, Vancouver Coastal Health Research Institute and Vancouver Community Health Services. Together we deliver a healthy continuum of care – from research to patient care, rehabilitation and community health services.</p>
			        </div>

			        <div class="col-half last">
			          <ul class="expanding-list">
			            <li><a href="#">About the Foundation</a></li>
			            <li><a href="#">Our Hospitals</a></li>
			            <li><a href="#">Our Donors</a></li>
			            <li><a href="#">Join Our Team</a></li>
			            <li><a href="#">News & Impact</a></li>
			            <li><a href="#">Contact</a></li>
			          </ul>
			        </div>

			      </div>
			    </div>
			  </section>


				<section class="panel grey-bg extra-padded newsletter-signup">
			    <div class="container">
			        <h2>Find out how <span class="green">your donations</span> make a difference.</h2>
			        <form>
			          <input type="text" placeholder="Name" />
			          <input type="email" placeholder="Email" />
			          <input type="submit" value="Subscribe" />
			        </form>
			      </div>
			  </section>

		<?php elseif(is_page('contact')): ?>

			<section class="panel extra-padded overview-panel narrow-two-column">
				<div class="container">
					<div class="narrow-wrap">
						<div class="col-half">
							<h3>General Inquiries</h3>
							<p>Office hours: 8:30am – 4:30pm Monday to Friday PST<br>
							Phone: 604 875 4676<br>
							Toll free: 1 877 875 4676</p>
						</div>

						<div class="col-half">
							<h3>Mailing Address</h3>
							<p>VGH & UBC Hospital Foundation<br>
							190-855 West 12th Avenue<br>
							Vancouver, BC V5Z 1M9<br>
							Canada</p>
						</div>
					</div>
				</div>
			</section>



			<section class="panel map-panel">
				<div class="container">
			    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkHcoGY-jTWLV14JW-ew9IaKhydZ-mCsQ"></script>
			    <script type="text/javascript">
			    google.maps.event.addDomListener(window, 'load', init);
			    function init() {
			        var mapOptions = {
			            zoom: 14,
			            center: new google.maps.LatLng(49.2611781,-123.1231168)
			        };

			        var mapElement = document.getElementById('map');
			        var map = new google.maps.Map(mapElement, mapOptions);
			        var marker = new google.maps.Marker({
			            position: new google.maps.LatLng(49.2611781,-123.1231168),
			            map: map,
			            title: 'VGH UBC Hospital Foundation'
			        });

			        var infowindow = new google.maps.InfoWindow({
			          content: '<div id="content"><h5>VGH UBC Hospital Foundation</h5><p>190-855 West 12th Avenue<br>Vancouver, BC V5Z 1M9<br>Canada</p></div>'
			        });

			        marker.addListener('click', function() {
			          infowindow.open(map, marker);
			        });
			    }
			    </script>
					<div class="inner-wrap">
					    <div id="map"></div>
					</div>
				</div>
			</section>



			<section class="panel padded narrow-two-column">
				<div class="container">
					<div class="narrow-wrap">
						<h3>Key Foundation Contacts</h3>
						<div class="col-half">
							<p><a href="mailto:barbara.grantham@vghfoundation.ca"><strong>Barbara Grantham</strong></a><br>
							President &amp; CEO</p>
							<p><a href="mailto:brian.dowling@vghfoundation.ca"><strong>Brian Dowling</strong></a><br>
							Sr. Vice President, Finance &amp; Information Systems</p>
							<p><a href="mailto:angela.chapman@vghfoundation.ca"><strong>Angela Chapman</strong></a><br>
							Sr. Vice President, Philanthropy</p>
							<p><a href="mailto:jim.o'Hara@vghfoundation.ca"><strong>Jim O’Hara</strong></a><br>
							Vice President, Leadership Giving</p>
							<p><a href="mailto:candice.tsang@vghfoundation.ca"><strong>Candice Tsang</strong></a><br>
							Vice President, Major Gifts &amp; Gift and Estate Planning</p>
							<p><a href="mailto:mary.prodanovic@vghfoundation.ca " target="_blank"><strong>Mary Prodanovic</strong></a><br>
							Director, Organizational Development &amp; Human Resources</p>
						</div>

						<div class="col-half">
							<p><a href="mailto: shirlyn.baskette@vghfoundation.ca"><strong>Shirlyn Baskette</strong></a><br>
							Director, Annual Programs</p>
							<p><a href="mailto:tiffany.kraus@vghfoundation.ca"><strong>Tiffany Kraus</strong></a><br>
							Director, Marketing &amp; Communications</p>
							<p><a href="mailto:cathy.helliwell@vghfoundation.ca"><strong>Cathy Helliwell</strong></a><br>
							Director,&nbsp;Strategic Partnerships</p>
							<p><a href="mailto:charlene.taylor@vghfoundation.ca"><strong>Charlene Taylor</strong></a><br>
							Associate Director, Gift &amp; Estate Planning</p>
							<p><a href="mailto:stephanie.forgacs@vghfoundation.ca"><strong>Stephanie Forgacs</strong></a><br>
							Associate Director, Major Gifts</p>
							<p><a href="mailto:Tim.Staunton@vghfoundation.ca"><strong>Tim Staunton</strong></a><br>
							Associate Director, Major Gifts</p>
						</div>
					</div>
				</div>
			</section>




			<section class="panel grey-bg extra-padded newsletter-signup">
		    <div class="container">
		        <h2>Find out how <span class="green">your donations</span> make a difference.</h2>
		        <form>
		          <input type="text" placeholder="Name" />
		          <input type="email" placeholder="Email" />
		          <input type="submit" value="Subscribe" />
		        </form>
		      </div>
		  </section>
		<?php else: ?>

						<?php	if( have_rows('layouts') ): $count = 0; ?>
								<?php while ( have_rows('layouts') ) : the_row(); $count++;

										if( get_row_layout() == 'basic_content_area' ): ?>
											<?php include(locate_template('templates/layouts/layout-basic_content_area.php')); ?>

										<?php elseif( get_row_layout() == 'basic_content_area_sidebar' ): ?>
											<?php include(locate_template('templates/layouts/layout-basic_content_area-sidebar.php')); ?>

										<?php elseif( get_row_layout() == 'accordion' ): ?>
											<?php include(locate_template('templates/layouts/layout-accordion.php')); ?>

										<?php elseif( get_row_layout() == 'three_column' ): ?>
											<?php include(locate_template('templates/layouts/layout-three_column.php')); ?>

										<?php elseif( get_row_layout() == 'three_column_sidebar' ): ?>
											<?php include(locate_template('templates/layouts/layout-three_column_sidebar.php')); ?>


										<?php elseif( get_row_layout() == 'raw_html' ): ?>
											<?php include(locate_template('templates/layouts/layout-raw_html.php')); ?>
										<?php endif; ?>

								<?php endwhile; ?>

						<?php else : ?>
							<section class="main-content panel">
								<div class="container">
									<?php the_content(); ?>
								</div>
							</section>
						<?php endif; ?>

		<?php endif; ?>




	</div>