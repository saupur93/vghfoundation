<?php
/*
Template Name: LandingPage
*/
?>


<?php get_header(); ?>

  <div class="page-wrap">
    <?php
      $page_header_image = null !== get_field('page_header_image') ? get_field('page_header_image')['url'] : false;
      $page_header_subtitle = null !== get_field('page_header_subtitle') ? get_field('page_header_subtitle') : false;
    ?>
    <?php if($page_header_image): ?>
      <section class="panel page-header" style="background-image:url(<?php print $page_header_image; ?>);">
        <div class="container">
          <div class="inner-wrap">
            <div class="header-copy-landing">
              <h1><?php print $page_header_subtitle; ?></h1>
              <p class="intro-copy-landing">Make a donation to support our hospitals and health care centres today.</p>
              <div class="donation-form-landing">
                <form name="donationform" id="donationform">
                      <div class="donation">Yes, I would like to honour my angel with a gift.</div>
                      <div class="donation-landing">
                         <input type="text" name="yourdonation" id="yourdonation" value="$100">
                       </div>



                       <input type="button" name="submit" id="donatenow" value="Donate now">

                 </form>
               <div>
          </div>

    </div>
  </div>
      </section>
    <?php else: ?>

      <section class="panel title-only">
        <div class="container">
          <div class="inner-wrap">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </section>
    <?php endif; ?>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <style>
    /* cyrillic-ext */

    /*Custom slider style*/

    .slider-panel {
    	min-height:435px;
    	background:#8f3c82 url(http://vghubc.dev/app/uploads/2017/11/Angel_bg-image_new_2.jpg) no-repeat;
    	background-size: auto;
    }
    .slider-panel .row {
        position: relative!important;
        margin: 0 -15px!important;
        display: block;
    }

    .slider-panel .col-grid-4 {
        display: block;
        position: relative;
        float: left;
        padding: 0 15px;
    }

    .slider-panel .col-grid-8 {
        display: block;
        position: relative;
        float: left;
        padding: 0 15px;
    }

    .slider-text-box {
        margin-top: 116px;
        padding: 0 20px;
        color: #575b5e;
    }

    .slider-text-box h1 {
        font-size: 24px;
        font-weight: bold;
    }

    .slider-panel .button {
        padding: 0 15px;
        color: #8f3c82!important;
        border: solid 3px #8f3c82!important;
        text-transform: uppercase;
        font-size: 14px;
        width: 100%;
        font-weight: bold;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 20px 0;
    }

    .bx-wrapper {
        background: transparent!important;
        border: 0!important;
        box-shadow: none!important;
    }

    .bx-wrapper article {
        height: auto;
        font-size: 28px;
    }

    .bx-wrapper .bx-pager.bx-default-pager a {
        background: #636468!important;
    }

    .bx-wrapper .bx-pager.bx-default-pager a.active {
        background: #8f3c82!important;
    }

    .bx-wrapper img {
        margin: 0 auto;
    }

    .control {
        font-size: 30px;
        color: #fff;
        position: absolute;
        font-size: 80px;
        font-weight: bold;
        margin-top: -40px;
        top: 50%;
    }

    .control a {
        color: #8f3c82;
        margin-top: -80px;
    }

    .control a:hover {
        color: #fff;
    }

    #goNext {}

    #goPrev {
        right: 0;
    }

    .angel-bg {
        position: relative;
        padding: 55px 0;
        text-align: center;
    }

    .angel-bg img {
        max-width: 600px;
    }

    .img-wrapper {
        position: absolute;
        z-index: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }

    .slider-container {
        z-index: 1;
        position: relative;
    }

    .bx-wrapper .bx-pager,
    .bx-wrapper .bx-controls-auto {
        bottom: -100px!important;
    }

    .slider {
        text-align: center;
        padding: 30px !important;
        font-family: 'Dancing Script', cursive;
        padding-left: 400px;
        width: 360px;
        height: 340px;
        /*background: rgba(0,0,0,0.3);*/
        margin-left: 322px;
        border-radius: 50%;
    }

    .sliders {
        margin-top: 44px;
    }

    .bx-wrapper {}

    .bx-viewport {
        height: 240px!important;
        vertical-align: middle;
        display: table-cell;
    }

    @media(max-width:1200px) {
        #goPrev {
            right: -49px;
        }
        #goNext {
            left: -40px;
        }
        .slider {
            margin-left: 254px;
        }
    }

    @media(max-width:992px) {
        .col-grid-4,
        .col-grid-8 {
            width: 100%!important;
            clear: both;
        }
        .angel-bg img {
            max-width: 500px;
        }
        .slider-container {
            width: 635px;
            margin: auto;
        }
        .bx-viewport {
            height: 193px!important;
        }
        .slider {
            width: 300px;
            margin-left: 44%;
        }
        .bx-wrapper article {
            font-size: 24px;
            padding-right:25px;
        }
    }

    @media(max-width:786px) {
        .angel-bg img {
            max-width: 500px;
        }
        .slider-container {
            width: 100%;
            margin: auto;
        }
        .angel-bg img {
            max-width: 600px;
            position: relative;
            left: -275px;
        }
        .slider {
            width: 300px;
            margin-left: 0px;
        }
        .bx-viewport {
            height: 232px!important;
        }
        .control {
            display: none;
        }
        .container {
            overflow: hidden;
        }
    }

    /* #end Custom slider style*/

    </style>
    <section class="slider-panel">
      <div class="container">
        <div class="inner-wrap">
          <div class="row">
            <article class="col-grid-4">
              <div class="slider-text-box">
                <h1>Honour your angel dedicate an ornament</h1>
                <p style="font-size:20px;"> Join the thousands of British Columbians who are dedicating an angel to a loved one or a member of their health care team.  </p>
                <p><a class="button white-keyline" href="/ornaments">Create An Angel Ornament</a></p>
              </div>
            </article>
            <article class="col-grid-8">
              <div class="slider-wrapper">
                <div class="angel-bg">
                  <section class="img-wrapper"> <img src="http://vghubc.dev/app/uploads/2017/11/angel-icon.png"> </section>
                  <section class="slider-container">
                    <div class="slider">
                      <div class="sliders">
                        <?php
                        $table2 = $wpdb->prefix."celebration_cards_user_details";
                        $result = $wpdb->get_results( $wpdb->prepare('SELECT * FROM '.$table2.' order by id DESC') );
                        foreach ( $result as $print )   {
                                $name_honouree2 = $print->name_honouree;
                                $message2 = $print->message;
                                $firstname2 = $print->first_name;
                         ?>
                        <article> <?php echo $name_honouree2; ?><br /> <?php echo $message2; ?> <br /><?php echo $firstname2; ?></article>
                      <?php
                    }
                       ?>
                      </div>
                    </div>
                    <div id="goNext" class="control"> </div>
                    <div id="goPrev" class="control"> </div>
                  </section>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="https://use.fontawesome.com/21b94d4319.js"></script>
    <script>
        $(document).ready(function(){
          $('.sliders').bxSlider({

    							  nextSelector: '#goNext',


         prevSelector: '#goPrev',
    	 nextText:'<i class="fa fa-angle-left" aria-hidden="true"></i>',
    	 prevText:'<i class="fa fa-angle-right" aria-hidden="true"></i>'

    							});
        });
      </script>
    <?php if( have_rows('layouts') ): ?>
      <?php include(locate_template('templates/layouts/layouts-loop.php')); ?>

    <?php else : ?>
      <section class="main-content panel">
        <div class="container">
          <?php the_content(); ?>
        </div>
      </section>

    <?php endif; ?>


<?php
  $related_call_to_action = null !== get_field('related_call_to_action') ? get_field('related_call_to_action') : false;
?>
<?php if($related_call_to_action): ?>
  <?php include(locate_template('templates/partials/footer-cta.php')); ?>
<?php endif; ?>

  </div>

  <?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
