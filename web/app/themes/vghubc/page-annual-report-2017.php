<?php
/*
Template Name: Annual Report 2017
*/
$pdf_download = get_field('pdf_download')['url'];
$cover_intro = get_field('cover_intro');
$president_intro = get_field('presidents_message_intro');
$president_full = get_field('presidents_message_full');
?>


<?php get_header(); ?>

  <header class="panel ar-main-header cover" data-headerColor>
    <div class="container">
      <h5>2015 - 2016 ANNUAL REPORT</h5>
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
              <h2><span class="initial-show">2015 - 2016</span></h2>
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
      <header class="panel ar-section-header">
        <div class="container">
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>the power of giving</h3>
        </div>
      </header>
      <div class="container">
        <div class="narrow-wrap">
        <div class="animated-content">
          <div class="item item-1 active">
            <h2>$77 million in 2015-16 thanks to you, our donors</h2>
            <p>The transformation of health care is, of course, not an easy task. It takes people with a shared vision and a passion to build the best health care system in the world – and that is what is taking place at right here in Vancouver, because of partners like you.</p>
          </div>

          <div class="item item-2">
            <h2>your impact in 2015-2016:</h2>
            <div class="col-half">
              <span class="large-number">60%</span>
            </div>
            <div class="col-half">
              <p>We treat sixty percent of the province's adult trauma cases</p>
            </div>
          </div>

          <div class="item item-3">
            <h2>your impact in 2015-2016:</h2>
            <div class="col-half">
              <span class="large-number">50%</span>
            </div>
            <div class="col-half">
              <p>of surgical patients are from outside vancouver</p>
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
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>president’s message</h3>
        </div>
      </header>
      <div class="container">
        <div class="inner-wrap">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/tmp/ar-president.jpg" class="president" />
          <div class="copy" style="overflow:hidden;">
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
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>philanthropic pillars</h3>
        </div>
      </header>
      <div class="container">
        <div class="narrow-wrap">
          <h2>We’re changing lives together. <br>Here’s how.</h2>
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
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>surgery</h3>
        </div>
      </header>
      <div class="container">
        <div class="inner-wrap vcenter adjust">
          <div class="row">
            <div class="col-4 facts">
              <p class="stat-intro">Our world-class surgeons and OR specialists deserve the best facilities possible to help our patients.</p>
            </div>
            <div class="col-4 facts">
              <h5>Facts</h5>
                <p class="larger-text">60%</p>
                <p class="small">We serve sixty percent of the province’s adult trauma cases are seen in our hospitals</p>
            </div>

            <div class="col-4 facts">
              <h5>Outcome</h5>
                <p class="larger-text">Efficient and effective operating rooms</p>
                <p class="small">Having more effective operating theatres is a part of the Future of Surgery</p>
            </div>

            <div class="col-4 facts">
              <h5>Story</h5>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/surgery.jpg" />
                <p class="small">Operating rooms like this one with Dr. Bas Masri will be revitalized as part of the Future of Surgery initiative.</p>
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


    <section class="panel ar-section ar-section-4 full-panel" data-headerColor="cancer-bg">
      <header class="panel ar-section-header">
        <div class="container">
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>cancer</h3>
        </div>
      </header>
      <div class="container">
        <div class="inner-wrap vcenter adjust">
          <div class="row">
            <div class="col-4 facts">
              <p class="stat-intro">With your support, we will to improve the patient journey and outcomes for all patients living with cancer through world leading personalized treatment and care.</p>
            </div>
            <div class="col-4 facts">
              <h5>Facts</h5>
                <p class="larger-text">2 in 5</p>
                <p class="small">An estimated 2 in 5 British Columbians will be diagnosed with cancer in their lifetime.</p>
            </div>

            <div class="col-4 facts">
              <h5>Outcome</h5>
                <p class="larger-text">Supporting precise, personalized medicine</p>
                <p class="small">to target the unique attributes of each person’s cancer</p>
            </div>

            <div class="col-4 facts">
              <h5>Story</h5>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/cancer.jpg" />
                <p class="small">Jason and Emily Ko donated $1.2M to support a Lung Cancer Screening pilot program at VGH.</p>
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


    <section class="panel ar-section ar-section-5 full-panel" data-headerColor="heart-lung-bg">
      <header class="panel ar-section-header">
        <div class="container">
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>heart and lung</h3>
        </div>
      </header>
      <div class="container">
        <div class="inner-wrap vcenter adjust">
          <div class="row">
            <div class="col-4 facts">
              <p class="stat-intro">With your help, we will bridge cardiac and respiratory medicine to look beyond symptoms to focus on the root cause.</p>
            </div>
            <div class="col-4 facts">
              <h5>Facts</h5>
                <p class="larger-text">Asthma & COPD</p>
                <p class="small">are among the main causes of sickness globally</p>
            </div>

            <div class="col-4 facts">
              <h5>Outcome</h5>
                <p class="larger-text">Finding the next major breakthrough</p>
                <p class="small">in lung and heart disease</p>
            </div>

            <div class="col-4 facts">
              <h5>Story</h5>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/heart-lung.jpg" />
                <p class="small">Dr. Matt Bennett performs minimally invasive heart procedures that allow patients to quickly recover.</p>
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


    <section class="panel ar-section ar-section-6 full-panel" data-headerColor="innovation-bg">
      <header class="panel ar-section-header">
        <div class="container">
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>innovation</h3>
        </div>
      </header>
      <div class="container">
        <div class="inner-wrap vcenter adjust">
          <div class="row">
            <div class="col-4 facts">
              <p class="stat-intro">A combination of demographics and rising costs are creating an unsustainable health care system. We are leading the charge to change that, right here in Vancouver.</p>
            </div>
            <div class="col-4 facts">
              <h5>Facts</h5>
                <p class="larger-text">It can take up to 17 years</p>
                <p class="small">for a new health care innovation to be fully implemented in a clinical setting</p>
            </div>

            <div class="col-4 facts">
              <h5>Outcome</h5>
                <p class="larger-text">Empowering patients</p>
                <p class="small">to manage their health autonomously through remote and mobile technologies and at-home monitoring</p>
            </div>

            <div class="col-4 facts">
              <h5>Story</h5>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/innovation.jpg" />
                <p class="small">Sonny and Florence Leong, with Dr. Stephen Ho, believe in giving back to help advance patient care in BC.</p>
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


    <section class="panel ar-section ar-section-7 full-panel" data-headerColor="community-bg">
      <header class="panel ar-section-header">
        <div class="container">
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>community</h3>
        </div>
      </header>
      <div class="container">
        <div class="inner-wrap vcenter adjust">
          <div class="row">
            <div class="col-4 facts">
              <p class="stat-intro">With your help, we will ensure a full range of health care services are available to ensure patients receive the right care at the right time in the right place whether that be their home, their neighbourhood or a hospital.</p>
            </div>
            <div class="col-4 facts">
              <h5>Facts</h5>
                <p class="larger-text">1.9 million hours of support</p>
                <p class="small">We offer British columbians 1.9 million home support hours and 199,000 home nursing visits annually</p>
            </div>

            <div class="col-4 facts">
              <h5>Outcome</h5>
                <p class="larger-text">Home is Best Program</p>
                <p class="small">is a VCH program with a holistic approach to improving a senior's journey across the health care system</p>
            </div>

            <div class="col-4 facts">
              <h5>Story</h5>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/community.jpg" />
                <p class="small">The Driver Rehab Program at GF Strong helps get patients back on the driving road.</p>
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


    <section class="panel ar-section ar-section-8 full-panel" data-headerColor="brain-health-bg">
      <header class="panel ar-section-header">
        <div class="container">
          <h5>2015 - 2016 ANNUAL REPORT</h5>
          <h3>brain health</h3>
        </div>
      </header>
      <div class="container">
        <div class="inner-wrap vcenter adjust">
          <div class="row">
            <div class="col-4 facts">
              <p class="stat-intro">By building on our expertise as a leading brain and nervous system centre in North America, with your support, we will change the way we treat and study brain and nervous system disorders.</p>
            </div>
            <div class="col-4 facts">
              <h5>Facts</h5>
                <p class="larger-text">By 2020</p>
                <p class="small">brain disease will overtake heart disease and cancer as the leading cause of death and disability in Canada</p>
            </div>

            <div class="col-4 facts">
              <h5>Outcome</h5>
                <p class="larger-text">Enhancing quality and extending lifespan</p>
                <p class="small">for those affected with brain and nervous system disorders</p>
            </div>

            <div class="col-4 facts">
              <h5>Story</h5>
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/ar/brain-health.jpg" />
                <p class="small">World-class skier Jamie Crane-Mauzy credits revolutionary brain surgery and VGH’s ICU team for saving her life.</p>
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


    <section class="panel ar-section ar-section-9 bg-color-cta full-panel">
      <div class="container">
        <div class="narrow-wrap">
          <h2>Find out how your contributions have helped make us vital.</h2>
          <h4>Download our full Annual Report to learn more.</h4>
          <p><a class="button white-keyline" href="<?php print $pdf_download; ?>" target="_blank">Download the Report</a></p>
        </div>
      </div>
    </section>


  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
