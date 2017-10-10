<?php
/*
Template Name: Annual Report
*/
$pdf_download = get_field('pdf_download')['url'];
$cover_intro = get_field('cover_intro');
$president_intro = get_field('presidents_message_intro');
$president_full = get_field('presidents_message_full');
$surgery_intro = get_field('surgery_story_intro');
$surgery_full = get_field('surgery_story_full');
$cancer_intro = get_field('cancer_story_intro');
$cancer_full = get_field('cancer_story_full');
$lung_intro = get_field('lung_story_intro');
$lung_full = get_field('lung_story_full');
$innovation_intro = get_field('innovation_story_intro');
$innovation_full = get_field('innovation_story_full');
$community_intro = get_field('community_story_intro');
$community_full = get_field('community_story_full');
$brain_intro = get_field('brain_story_intro');
$brain_full = get_field('brain_story_full');
$legacy_intro = get_field('legacy_story_intro');
$legacy_full = get_field('legacy_story_full');
?>


<?php get_header(); ?>

  <header class="panel ar-main-header cover" data-headerColor>
    <div class="container">
      <h5>2016 - 2017 ANNUAL REPORT</h5>
      <h3>the power of giving</h3>
    </div>
  </header>

  <div class="page-wrap" id="annual-report">
    <section class="panel ar-intro-cover full-panel active">
      <div class="container">
        <div class="inner-wrap">
        <h2 class="animate-down">
            <div class="stay">annual report</div>
            <div class="keep-going">surgery<br>
            cancer<br>
            heart and lung<br>
            innovation<br>
            brain health<br>
            community</div>
          </h2>


          <div class="intro-copy">
            <div class="col-half first">
              <h2><span class="initial-show">2016 - 2017</span></h2>
            </div>
            <div class="col-half second">
             <?php print $cover_intro; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>

    </section>

    <section class="panel ar-section ar-section-1 full-panel">
      <header class="panel ar-main-header-image">
        <div class="container">

          <h3>&nbsp;</h3>
        </div>
      </header>
      <div class="container">
        <div class="inner-wrap">
        <div class="animated-content">
          <div class="item item-1 active">
            <h2 class="green-header">You are playing a vital role in the future of health care in BC.</h2>

            <div class="col-quarter">
              <span class="large-number">$113 million in 2016-17.<br/> Thanks to you, <br/> our donors.</span>
            </div>
            <div class="col-rest">
              <p>VITAL is the important work of VGH & UBC Hospital Foundation. It is the crucial link that makes good health care better, enabling us to build new facilities, invest in new equipment and technologies, better meet patient demands and take advantage of new treatments and procedures. While government funds the day-to-day operations of our hospitals and health care services, philanthropy helps us accomplish our vision of exemplary care and enables us to act on what we know is possible.</p>
            </div>
          </div>


        </div>
        </div>
      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>


    <section class="panel ar-section ar-section-2 full-panel">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>Board & president’s message</h3>
        </div>
      </header>
      <div class="container2">
        <div class="inner-wrap">
          <div class="row">
        <div class="col-2-right facts-president" style="overflow:hidden;">
         <?php print $president_intro; ?>
         <p><a href="#" class="read-more" id="president-message">read president’s message</a></p>

         <div class="hide message-html">
           <div class="container">
             <div class="inner-wrap">
              <?php print $president_full; ?>


             </div>
           </div>
         </div>
       </div>
       <div class="col-2-right facts">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/tmp/board&president.jpg" class="img" />

         </div>
        </div>
      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>


    <section class="panel ar-section ar-section-3 full-panel">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>philanthropic pillars</h3>
        </div>
      </header>
      <div class="container">
        <div class="narrow-wrap">
          <h2 class="green-header">Philanthrophy is vital <br>to the transformation <br>of health care.</h2>
          <p>In this Annual Report, you will read some amazing stories about six areas of where philanthropy is playing a major role delivering innovative, transformative and sustainable health care.</p>
        </div>
      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>


    <section class="panel ar-section ar-section-4 full-panel" data-headerColor="surgery-bg">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>surgery</h3>
        </div>
      </header>
      <div class="container2">
        <div class="inner-wrap">
          <div class="row">
            <div class="col-2 facts">

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/VGH-NicolaBrailsford-Blackmore.jpg" class="img"/>

            </div>

            <div class="col-2 facts-surgery" style="overflow:hidden;">

              <?php print $surgery_intro; ?>
              <p><a href="#" class="read-more" id="full-story-surgery">read the full story</a></p>
<div class="hide message-html">
  <div class="container">
    <div class="inner-wrap">
     <?php print $surgery_full; ?>


   </div>
  </div>
</div>
            </div>




          </div>
        </div>
      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>


    <section class="panel ar-section ar-section-5 full-panel" data-headerColor="cancer-bg">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>cancer</h3>
        </div>
      </header>
      <div class="container2">
        <div class="inner-wrap">
          <div class="row">
            <div class="col-2-right facts-cancer" style="overflow:hidden;">
              <?php print $cancer_intro;?>
  <p><a href="#" class="read-more" id="full-story-cancer">read the full story</a></p>
  <div class="hide message-html">
  <div class="container">
    <div class="inner-wrap">
     <?php print $cancer_full; ?>


    </div>
  </div>
  </div>
            </div>

            <div class="col-2-right facts">

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/VGH-Sander-Black-9139.jpg" class="img"/>

            </div>



          </div>

      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>


    <section class="panel ar-section ar-section-6 full-panel" data-headerColor="heart-lung-bg">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>heart and lung</h3>
        </div>
      </header>
      <div class="container2">
        <div class="inner-wrap">
          <div class="row">
            <div class="col-2 facts">

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/VGH-Dr.Issarow.jpg" class="img" />

            </div>

            <div class="col-2 facts-lungs" style="overflow:hidden;">

              <?php print $lung_intro;?>
  <p><a href="#" class="read-more" id="full-story-lungs">read the full story</a></p>
  <div class="hide message-html">
  <div class="container">
    <div class="inner-wrap">
     <?php print $lung_full; ?>


    </div>
  </div>
  </div>
            </div>




          </div>
        </div>
      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>


    <section class="panel ar-section ar-section-7 full-panel" data-headerColor="innovation-bg">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>innovation</h3>
        </div>
      </header>
      <div class="container2">
        <div class="inner-wrap">
          <div class="row">
            <div class="col-2-right facts-innovation" style="overflow:hidden;">

                <?php print $innovation_intro;?>
  <p><a href="#" class="read-more" id="full-story-innovation">read the full story</a></p>
  <div class="hide message-html">
  <div class="container">
    <div class="inner-wrap">
     <?php print $innovation_full; ?>


    </div>
  </div>
  </div>
            </div>

            <div class="col-2-right facts">

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/VGH-teck-lumara-Final.jpg" class="img"/>

            </div>



          </div>

      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>


    <section class="panel ar-section ar-section-8 full-panel" data-headerColor="community-bg">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>community</h3>
        </div>
      </header>
      <div class="container2">
        <div class="inner-wrap">
          <div class="row">
            <div class="col-2 facts">

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/VGH-8706E.jpg" class="img"/>

            </div>

            <div class="col-2 facts-community" style="overflow:hidden;">

              <?php print $community_intro;?>
  <p><a href="#" class="read-more" id="full-story-community">read the full story</a></p>
  <div class="hide message-html">
  <div class="container">
    <div class="inner-wrap">
     <?php print $community_full; ?>


    </div>
  </div>
  </div>
            </div>




          </div>
        </div>
      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>


    <section class="panel ar-section ar-section-9 full-panel" data-headerColor="brain-health-bg">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>brain health</h3>
        </div>
      </header>
      <div class="container2">
        <div class="inner-wrap">
          <div class="row">
            <div class="col-2-right facts-brainhealth" style="overflow:hidden;">

                <?php print $brain_intro;?>
  <p><a href="#" class="read-more" id="full-story-brainhealth">read the full story</a></p>
  <div class="hide message-html">
  <div class="container">
    <div class="inner-wrap">
     <?php print $brain_full; ?>


    </div>
  </div>
  </div>
            </div>

            <div class="col-2-right facts">

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/KongFamily4.jpg" class="img"/>

            </div>



          </div>

      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>

    <section class="panel ar-section ar-section-10 full-panel" data-headerColor="legacy-bg">
      <header class="panel ar-section-header">
        <div class="container">

          <h3>Legacy</h3>
        </div>
      </header>
      <div class="container2">
        <div class="inner-wrap">
          <div class="row">
            <div class="col-2 facts">

                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/Legacy-image.jpg" class="img"/>

            </div>

            <div class="col-2 facts-legacy" style="overflow:hidden;">

                <?php print $legacy_intro;?>
  <p><a href="#" class="read-more" id="full-story-legacy">read the full story</a></p>
  <div class="hide message-html">
  <div class="container">
    <div class="inner-wrap">
     <?php print $legacy_full; ?>


    </div>
  </div>
  </div>
            </div>




          </div>
        </div>
      </div>

      <div class="arrow-down">
        <svg class="arrow-down-icon">
          <use xlink:href="#arrow-down" />
        </svg>
      </div>
    </section>

    <section class="panel ar-section ar-section-11 bg-color-cta full-panel">
      <div class="container">
        <div class="narrow-wrap">
          <h2>Find out how your contributions have helped make us vital.</h2>
          <h4>Download our full Annual Report to learn more.</h4>
          <p><a class="button white-keyline" href="<?php print $pdf_download; ?>" target="_blank">Download the Report</a><a class="button white-keyline" href="<?php print "/about/our-donors/"; ?>" target="_blank">full donor lists</a><a class="button white-keyline" href="<?php print "/about/audited-financials/"; ?>" target="_blank">view finances</a></p>
        </div>
      </div>
    </section>


  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
