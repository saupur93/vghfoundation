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
          <p>The foundation is grateful to all of its donors who generously help to ensure our hospitals and health care teams deliver BC’s best care for adults. VGH UBC is pleased to recognize those who have donated $10,000 or more to advance healthcare, now and for generations to come.</p>
        </div>
      </div>
    </div>
  </section>


  <section class="panel padded extra-padded overview-panel">
    <div class="container">
      <div class="narrow-wrap">
        <h2>Give today.</h2>
        <p class="intro">VGH UBC is world-renowned for providing the highest quality care, and for teaching and research excellence across our key program areas. In each of these areas, we are raising funds to purchase the most advanced equipment, attract the best minds, and support leading-edge research and innovation.</p>
      </div>
    </div>
  </section>


  <section class="panel grey-bg donation-panel-tabs">
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
          <input type="submit" value="Make Donation" class="button grey" />
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
          <input type="submit" value="Make Donation" class="button grey" />
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
          <input type="submit" value="Make Donation" class="button grey" />
          <a href="" target="_blank" id="submit"></a>
        </form>
      </div>
    </div>

    <section class="panel padded three-column-list active" data-tab-content="1">
      <article class="col-grid-4">
        <img src="http://placehold.it/427x350" />
        <div class="copy">
          <h3>$50 One-time</h3>
          <p><a href="https://secure.vghfoundation.ca/site/Donation2?df_id=1620&mfc_pref=T&1620.donation=form1&set.DonationLevel=2083" class="button green-keyline" target="_blank">Donate</a></p>
        </div>
      </article>

      <article class="col-grid-4">
        <img src="http://placehold.it/427x350/333333" />
        <div class="copy">
          <h3>$100 One-time</h3>
          <p><a href="https://secure.vghfoundation.ca/site/Donation2?df_id=1620&mfc_pref=T&1620.donation=form1&set.DonationLevel=2082" class="button green-keyline" target="_blank">Donate</a></p>
        </div>
      </article>

      <article class="col-grid-4">
        <img src="http://placehold.it/427x350" />
        <div class="copy">
          <h3>$250 One-time</h3>
          <p><a href="https://secure.vghfoundation.ca/site/Donation2?df_id=1620&mfc_pref=T&1620.donation=form1&set.DonationLevel=2086" class="button green-keyline" target="_blank">Donate</a></p>
        </div>
      </article>
    </section>



    <section class="panel padded three-column-list" data-tab-content="2">
      <article class="col-grid-4">
        <img src="http://placehold.it/427x350" />
        <div class="copy">
          <h3>$X Monthly</h3>
          <p><a href="#" class="button green-keyline">Donate</a></p>
        </div>
      </article>

      <article class="col-grid-4">
        <img src="http://placehold.it/427x350/333333" />
        <div class="copy">
          <h3>$X Monthly</h3>
          <p><a href="#" class="button green-keyline">Donate</a></p>
        </div>
      </article>

      <article class="col-grid-4">
        <img src="http://placehold.it/427x350" />
        <div class="copy">
          <h3>$X Monthly</h3>
          <p><a href="#" class="button green-keyline">Donate</a></p>
        </div>
      </article>
    </section>


    <section class="panel padded three-column-list" data-tab-content="3">
      <article class="col-grid-4">
        <img src="http://placehold.it/427x350" />
        <div class="copy">
          <h3>$X In Tribute</h3>
          <p><a href="#" class="button green-keyline">Donate</a></p>
        </div>
      </article>

      <article class="col-grid-4">
        <img src="http://placehold.it/427x350/333333" />
        <div class="copy">
          <h3>$X In Tribute</h3>
          <p><a href="#" class="button green-keyline">Donate</a></p>
        </div>
      </article>

      <article class="col-grid-4">
        <img src="http://placehold.it/427x350" />
        <div class="copy">
          <h3>$X In Tribute</h3>
          <p><a href="#" class="button green-keyline">Donate</a></p>
        </div>
      </article>
    </section>
  </section>

  <section class="panel padded three-column-boxes">
    <div class="container">
      <div class="inner-wrap">
        <h2 class="section-title">Other Ways to Give</h2>
        <article class="col-third">
          <h3>Occasions</h3>
          <p>Celebrate your birthday, anniversary, or retirement with donations to VGH & UBC Hospital Foundation in lieu of gifts.</p>
          <p class="bottom"><a href="#" class="read-more">Donate</a></p>
        </article>

        <article class="col-third">
          <h3>Corporate Giving</h3>
          <p>Celebrate your birthday, anniversary, or retirement with donations to VGH & UBC Hospital Foundation in lieu of gifts.</p>
          <p class="bottom"><a href="#" class="read-more">Donate</a></p>
        </article>

        <article class="col-third">
          <h3>Employee Giving</h3>
          <p>Celebrate your birthday, anniversary, or retirement with donations to VGH & UBC Hospital Foundation in lieu of gifts.</p>
          <p class="bottom"><a href="#" class="read-more">Donate</a></p>
        </article>

        <article class="col-third">
          <h3>Through Securities</h3>
          <p>Celebrate your birthday, anniversary, or retirement with donations to VGH & UBC Hospital Foundation in lieu of gifts.</p>
          <p class="bottom"><a href="#" class="read-more">Donate</a></p>
        </article>

        <article class="col-third">
          <h3>Gifts of Art</h3>
          <p>Celebrate your birthday, anniversary, or retirement with donations to VGH & UBC Hospital Foundation in lieu of gifts.</p>
          <p class="bottom"><a href="#" class="read-more">Donate</a></p>
        </article>

        <article class="col-third">
          <h3>Door to Door</h3>
          <p>Celebrate your birthday, anniversary, or retirement with donations to VGH & UBC Hospital Foundation in lieu of gifts.</p>
          <p class="bottom"><a href="#" class="read-more">Donate</a></p>
        </article>

        <article class="col-third">
          <h3>Legacy Giving</h3>
          <p>Celebrate your birthday, anniversary, or retirement with donations to VGH & UBC Hospital Foundation in lieu of gifts.</p>
          <p class="bottom"><a href="#" class="read-more">Donate</a></p>
        </article>

        <article class="col-third">
          <h3>Donate to an Event</h3>
          <p>Celebrate your birthday, anniversary, or retirement with donations to VGH & UBC Hospital Foundation in lieu of gifts.</p>
          <p class="bottom"><a href="#" class="read-more">Donate</a></p>
        </article>
      </div>
    </div>
  </section>


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

        <?php endwhile; ?>

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
