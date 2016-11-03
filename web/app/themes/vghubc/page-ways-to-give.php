<?php
/*
Template Name: Ways to Give
*/
?>


<?php get_header(); ?>

  <div class="page-wrap">
<!--    <section class="panel title-only">
      <div class="container">
        <h1 class="section-title"><?php the_title(); ?></h1>
      </div>
    </section> -->


  <section class="panel page-header" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/headers/ways-to-give.jpg);">
    <div class="container">
      <div class="inner-wrap">
        <div class="header-copy">
          <h1><?php the_title(); ?></h1>
          <p class="intro">The foundation is grateful to all donors who help to ensure our hospitals and health care teams deliver BC’s best care.</p>
        </div>
      </div>
    </div>
  </section>



  <section class="panel padded grey-bg donation-panel-tabs">
    <ul class="tabs">
      <li class="active" data-donate-url="https://secure.vghfoundation.ca/site/Donation2?df_id=1620&mfc_pref=T&1620.donation=form1" data-tab="1">One-time Gift</li><li data-donate-url="https://secure.vghfoundation.ca/site/Donation2?df_id=1660&mfc_pref=T&1660.donation=form1" data-tab="2">Monthly Giving</li><li data-donate-url="https://secure.vghfoundation.ca/site/Donation2?df_id=1640&mfc_pref=T&1640.donation=form1" data-tab="3">Tribute</li>
    </ul>
    <div class="container active" data-tab-content="1">
      <div class="inner-wrap">
        <form class="donation-form donation-amounts">
          <span data-donation-level="2081">$1,000</span>
          <span data-donation-level="2084">$500</span>
          <span data-donation-level="2086">$250</span>
          <span data-donation-level="2082">$100</span>
          <span data-donation-level="2083">$50</span>
          <input type="hidden" name="set.DonationLevel" value="2085" />
          <span class="other">$ <input type="text" name="set.Value" value="" /></span><br>
          <input type="submit" value="Make Donation" class="button green" />
          <a href="" target="_blank" id="submit"></a>
        </form>
      </div>
    </div>

    <div class="container" data-tab-content="2">
      <div class="inner-wrap">
        <form class="donation-form donation-amounts">
          <span data-donation-level="2125">$50</span>
          <span data-donation-level="2121">$25</span>
          <span data-donation-level="2123">$10</span>
          <span data-donation-level="2122">$20</span>
          <input type="hidden" name="set.DonationLevel" value="2124" />
          <span class="other">$ <input type="text" name="set.Value" value="" /></span><br>
          <input type="submit" value="Make Donation" class="button green" />
          <a href="" target="_blank" id="submit"></a>
        </form>
      </div>
    </div>

    <div class="container" data-tab-content="3">
      <div class="inner-wrap">
        <form class="donation-form donation-amounts">
          <span data-donation-level="2104">$1,000</span>
          <span data-donation-level="2102">$500</span>
          <span data-donation-level="2101">$250</span>
          <span data-donation-level="2105">$100</span>
          <span data-donation-level="2106">$50</span>
          <input type="hidden" name="set.DonationLevel" value="2103" />
          <span class="other">$ <input type="text" name="set.Value" value="" /></span><br>
          <input type="submit" value="Make Donation" class="button green" />
          <a href="" target="_blank" id="submit"></a>
        </form>
      </div>
    </div>

    <section class="panel padded-top three-column-list active" data-tab-content="1">
      <section class="panel padded slideshow-content-panel slideshow grey-bg">
        <div class="container">
          <div class="inner-wrap">
            <div class="slide-images">
              <div class="slide-bg slide active" style="background-image:url(http://placehold.it/1200x600);"></div>
            </div>
            <div class="slide-content">
              <div class="slide-text active">
                <h3>One-time Gift</h3>
                <p>With a one-time gift, you’ll be helping our medical teams treat patients with the most complex illnesses and injuries from across BC, helping save lives and improve outcomes.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>



    <section class="panel padded-top three-column-list" data-tab-content="2">
      <section class="panel padded slideshow-content-panel slideshow grey-bg">
        <div class="container">
          <div class="inner-wrap">
            <div class="slide-images">
              <div class="slide-bg slide active" style="background-image:url(http://placehold.it/1200x600);"></div>
            </div>
            <div class="slide-content">
              <div class="slide-text active">
                <h3>Monthly Gift</h3>
                <p>Making a monthly donation allows you to conveniently spread out your generosity throughout the year. Just select an amount for each month and an automatic deduction can be made from your bank account or credit card.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>


    <section class="panel padded-top three-column-list" data-tab-content="3">
      <section class="panel padded slideshow-content-panel slideshow grey-bg">
        <div class="container">
          <div class="inner-wrap">
            <div class="slide-images">
              <div class="slide-bg slide active" style="background-image:url(http://placehold.it/1200x600);"></div>
            </div>
            <div class="slide-content">
              <div class="slide-text active">
                <h3>Tribute Gift</h3>
                <p>Making a monthly donation allows you to conveniently spread out your generosity throughout the year. Just select an amount for each month and an automatic deduction can be made from your bank account or credit card.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>


  <section class="panel extra-padded expanding-two-column-list">
    <div class="container">
      <div class="inner-wrap">
        <h2>Other Ways to Give</h2>
        <div class="col-half">
          <p>VGH UBC is world-renowned for providing the highest quality care, and for teaching and research excellence across our key program areas. In each of these areas, we are raising funds to purchase the most advanced equipment, attract the best minds, and support leading-edge research and innovation.</p>
        </div>

        <div class="col-half last">
          <ul class="expanding-list">
            <li><a href="#">Occasions</a></li>
            <li><a href="#">Through Securities</a></li>
            <li><a href="#">Legacy Giving</a></li>
            <li><a href="#">Employee Giving</a></li>
            <li><a href="#">Gifts of Art</a></li>
            <li><a href="#">Door to Door</a></li>
            <li><a href="#">Donate to an Event</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <section class="panel extra-padded grey-bg footer-cta">
    <div class="container">
      <div class="inner-wrap">
        <h2>Your donations help save lives. <span class="green">Give today.</a></h2>
        <p class="center"><a href="#" class="button green donate">Donate</a></p>
      </div>
    </div>
  </section>

<!--
    <?php if( have_rows('layouts') ): $count = 0; ?>
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

        <?php endwhile; ?> -->

    <?php else : ?>
      <section class="main-content panel">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </section>

    <?php endif; ?>
  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
