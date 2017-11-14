<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://yowlu.com/wordpress/celebration-cards
 * @since      1.0.0
 *
 * @package    Celebration_Cards
 * @subpackage Celebration_Cards/public/partials
 */
?>

<script>
  // get urls from php
  var logo = '<?php echo get_option("celebration_cards_company_logo"); ?>';
  var close = '<?php echo plugins_url() . "/celebration-cards/public/images/close-icon.png"; ?>';
  var adminAjax = '<?php echo admin_url(); ?>';

function validateForm() {
    var errors = [];
    var x = document.forms["ornamentform"]["name_honouree"].value;
    var x1 = document.forms["ornamentform"]["message"].value;
    var x2 = document.forms["ornamentform"]["first_name"].value;
    var x3 = document.forms["ornamentform"]["last_name"].value;
    var x4 = document.forms["ornamentform"]["email"].value;

    if (x == "") {
        errors.push("Honouree Name must be filled out \n");

    }
    if (x1 == "") {
        errors.push("Message must be filled out \n");

    }
    if (x2 == "") {
        errors.push("First Name must be filled out \n");

    }
    if (x3 == "") {
        errors.push("Last Name must be filled out \n");

    }
    if (x4 == "") {
        errors.push("Email must be filled out \n");

    }
    if (errors.length > 0) {
    alert (errors.join(""));
    return false;
  }
}

</script>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div id="celebration-cards-wrapper" class="celebration-cards-wrapper">
  <div class="side-bar">
    <div class="side-bar__button selected templates-button">
          <div class="side-bar__button-content">
            <img src="<?php echo plugins_url() . '/celebration-cards/public/images/template-icon.png'; ?>">
            <h6>TEMPLATES</h6>
          </div>
      </div>

      <div class="side-bar__button text-button">
          <div class="side-bar__button-content">
            <img src="<?php echo plugins_url() . '/celebration-cards/public/images/text-icon.png'; ?>">
            <h6>TEXT</h6>
          </div>
      </div>
    </div>

    <div class="elements-side-bar">
      <div class="element-side-bar__templates-wrapper elements-selected">
        <div class="element-side-bar__title"><h5>TEMPLATES</h5></div>
        <hr>
        <div class="element-side-bar__templates-categories-wrapper">
          <div class="element-side-bar__templates-categories-container">
            <?php

              // get the global wordpress database variable
              global $wpdb;

              // create a name for the table
              $table_name2 = $wpdb->prefix . "celebration_cards_category";

              // declare the query
              $sql2 = "SELECT * FROM " . $table_name2;

              // get the days
              $celebration_cards_categories = $wpdb->get_results($sql2, ARRAY_A);

              $aux_counter = 0;
              // loop for all the days
              foreach( $celebration_cards_categories as $row ) {

                echo '<span data-id="' . $row['id'] . '" id="element-side-bar__templates-categories-' . $row['id'] . '" class="element-side-bar__templates-categories-element ' . (($aux_counter == 0) ? 'selected' : '') . '">' . $row['title'] . '</span>';
                $aux_counter++;

              }

            ?>
          </div>
        </div>
        <div class="categories-arrow categories-arrow-left">
          <
        </div>
        <div class="categories-arrow categories-arrow-right">
          >
        </div>
        <div class="element-side-bar__templates-orientation">
          <h6><small class="selected-text horitzontal-button">HORIZONTAL</small></h6>

        </div>

        <div class="element-side-bar__templates">

          <?php

            // get the global wordpress database variable
            global $wpdb;

            // create a name for the table
              $table_name = $wpdb->prefix . "celebration_cards_template";

            // declare the query
            $sql = "SELECT * FROM " . $table_name;

            // get the days
            $celebration_cards_templates = $wpdb->get_results($sql, ARRAY_A);

            // loop for all the days
            foreach( $celebration_cards_templates as $row ) {

              $aspect_ratio = "vertical";

              if ( $row[ 'template' ] < 6 ) {
                $aspect_ratio = "horizontal";
              }

              echo '<div style="' . (($row['categoryId'] == $celebration_cards_categories[0]['id']) ? '' : 'display:none;' ) . '" class="templates-container hvr-grow '. $aspect_ratio .' templates-container-in-category-'. $row['categoryId'] .'" data-template="'. $row[ 'template' ] .'" data-aspect-ratio="'. $aspect_ratio .'" data-decoration-img="'. $row[ 'decoration_image' ] .'" data-background-img="'. $row[ 'background_image' ] .'" data-background-color="'. $row[ 'background_color' ] .'" data-text-color="'. $row[ 'text_color' ] .'" data-text-font="'. $row[ 'text_font' ] .'">';
              echo '<div class="template"><img src="'. $row[ 'cover_image' ] .'"></div>';
              echo '</div>';

            }

          ?>

        </div>
      </div>

      <div class="element-side-bar__background-wrapper">
        <div class="element-side-bar__title"><h5>BACKGROUND</h5></div>
        <hr>
        <div class="element-side-bar__colors">
          <div class="color-container blue1" data-color="#5D9CEC"></div>
          <div class="color-container blue2" data-color="#4A89DC"></div>
          <div class="color-container blue3" data-color="#4FC1E9"></div>
          <div class="color-container blue4" data-color="#3BAFDA"></div>
          <div class="color-container blue5" data-color="#BBEDF7"></div>
          <div class="color-container blue6" data-color="#80C7D5"></div>
          <div class="color-container green1" data-color="#48CFAD"></div>
          <div class="color-container green2" data-color="#37BC9B"></div>
          <div class="color-container green3" data-color="#A0D468"></div>
          <div class="color-container green4" data-color="#8CC152"></div>
          <div class="color-container green5" data-color="#98CC96"></div>
          <div class="color-container green6" data-color="#698766"></div>
          <div class="color-container yellow1" data-color="#FFCE54"></div>
          <div class="color-container yellow2"data-color="#F6BB42"></div>
          <div class="color-container yellow3" data-color="#EFD995"></div>
          <div class="color-container yellow4" data-color="#FDB940"></div>
          <div class="color-container red1" data-color="#FC6E51"></div>
          <div class="color-container red2"data-color="#E9573F"></div>
          <div class="color-container red3" data-color="#ED5565"></div>
          <div class="color-container red4" data-color="#DA4453"></div>
          <div class="color-container red5" data-color="#AF3C37"></div>
          <div class="color-container red6" data-color="#93332E"></div>
          <div class="color-container purple1" data-color="#AC92EC"></div>
          <div class="color-container purple2"data-color="#967ADC"></div>
          <div class="color-container pink1" data-color="#EC87C0"></div>
          <div class="color-container pink2"data-color="#D770AD"></div>
          <div class="color-container pink3" data-color="#CE96A1"></div>
          <div class="color-container pink4"data-color="#60464B"></div>
          <div class="color-container gray1" data-color="#FFFFFF"></div>
          <div class="color-container gray2"data-color="#E6E9ED"></div>
          <div class="color-container gray3" data-color="#CCD1D9"></div>
          <div class="color-container gray4"data-color="#AAB2BD"></div>
          <div class="color-container gray5" data-color="#494F57"></div>
          <div class="color-container gray6"data-color="#434A54"></div>
          <div class="color-container gray7" data-color="#222"></div>
          <div class="color-container black" data-color="#000000"></div>
        </div>
      </div>

      <div class="element-side-bar__text-wrapper">
        <div class="element-side-bar__title"><h5>TEXT</h5></div>
        <hr>
        <div class="element-side-bar__text">
        <h6 class="subtitle-text"><small class="selected-text">- COLOR</small></h6>
        <div class="element-side-bar__text-colors">
          <div class="color-text-container blue1" data-color="#5D9CEC"></div>
          <div class="color-text-container blue2" data-color="#4A89DC"></div>
          <div class="color-text-container green3" data-color="#A0D468"></div>
          <div class="color-text-container green4" data-color="#8CC152"></div>
          <div class="color-text-container yellow1" data-color="#FFCE54"></div>
          <div class="color-text-container yellow2"data-color="#F6BB42"></div>
          <div class="color-text-container red3" data-color="#ED5565"></div>
          <div class="color-text-container red4" data-color="#DA4453"></div>
          <div class="color-text-container red5" data-color="#AF3C37"></div>
          <div class="color-text-container red6" data-color="#93332E"></div>
          <div class="color-text-container gray1" data-color="#FFFFFF"></div>
          <div class="color-text-container gray4"data-color="#AAB2BD"></div>
          <div class="color-text-container gray6"data-color="#434A54"></div>
          <div class="color-text-container gray7" data-color="#222"></div>
        </div>
          <h6 class="subtitle-text"><small class="selected-text">- FONT</small></h6>
          <div class="element-side-bar__font">
             <div class="font-text-container" style="font-family: 'Open Sans Light';" data-font="Open Sans Light"> Open Sans Light</div>
             <div class="font-text-container" style="font-family: 'Sofia Regular';" data-font="Sofia Regular"> Sofia Regular</div>
             <div class="font-text-container" style="font-family: 'Source Sans Pro Regular';" data-font="Source Sans Pro Regular"> Source Sans Pro Regular</div>
             <div class="font-text-container" style="font-family: 'Quicksand Bold';" data-font="Quicksand Bold"> Quicksand Bold</div>
             <div class="font-text-container" style="font-family: 'League Spartan Regular';" data-font="League Spartan Regular"> League Spartan Regular</div>
             <div class="font-text-container" style="font-family: 'Dancing Script Regular';" data-font="Dancing Script Regular"> Dancing Script Regular</div>
             <div class="font-text-container" style="font-family: 'Alex Brush Regular';" data-font="Alex Brush Regular"> Alex Brush Regular</div>
          </div>
        </div>
      </div>
    </div>

    <div class="canvas-wrapper">
    <?php
          global $wpdb;
          $error = 0;
                        // creates my_table in database if not exists
          $table = $wpdb->prefix . "celebration_cards_user_details";
          $charset_collate = $wpdb->get_charset_collate();
          $sql = "CREATE TABLE IF NOT EXISTS $table (
             `id` mediumint(9) NOT NULL AUTO_INCREMENT,
              `name_honouree` varchar (20) NOT NULL, `message` text not null, `first_name` varchar(20) not null, `last_name` varchar(20) not null, `email` varchar(30) not null,
               UNIQUE (`id`)
               ) $charset_collate;";
              require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
              dbDelta( $sql );
             // starts output buffering
             ob_start();
             $html = ob_get_clean();
             $host_url = $_SERVER['QUERY_STRING'];

?>
      <div class="canvas <?php echo ($host_url  !== 'v_form') ? "canvas--horizontal" : "canvas--horizontal-after"; ?> template-angel">
        <?php

             //echo $host_url;
             if ($host_url  !== 'v_form') {

             ?>

        <form name="ornamentform" action="?v_form" method="post"  id="v_form" onsubmit="return validateForm()">

            <section class="honouree">

            <div class="inside">
            <div class="row">
            <div class="col-md-3">
    <img src="<?php echo plugins_url() . "/celebration-cards/public/images/my_angel_icon.png"; ?>" width="150px" id="myangel"/>
    </div>


      <div class="col-md-7">
    <input type="text" class="form-style"  name="name_honouree" id="name_honouree" placeholder="name of your honouree **"/> </div>


      <div class="col-md-12">

    <textarea name="message" class="form-style" id ="message" rows="2" cols="70" maxlength="65" placeholder="write a short message to your angel ..."></textarea> </div>




    </div>
  </section>
  <?php
}
?>
        <div class="canvas-flipper">
          <?php
          // does the inserting, in case the form is filled and submitted
          if ( isset( $_POST["submit_form"] ) && $_POST["name_honouree"] != "" && $_POST["message"] != "" && $_POST["first_name"] != "" && $_POST["last_name"] != "" && $_POST["email"] != "" ) {
              $table2 = $wpdb->prefix."celebration_cards_user_details";
              $name_honouree = strip_tags($_POST["name_honouree"], "");
              $message = strip_tags($_POST["message"], "");
              $firstname = strip_tags($_POST["first_name"], "");
              $lastname = strip_tags($_POST["last_name"], "");
              $email = $_POST["email"];
              $wpdb->insert(
                  $table2,
                  array(
                      'name_honouree' => $name_honouree,
                      'message' => $message,
                      'first_name' => $firstname,
                      'last_name' => $lastname,
                      'email' => $email
                  ),
                  array(
                      '%s',
                      '%s',
                      '%s',
                      '%s'

                  )
              );

              $lastid = $wpdb->insert_id;
            //  echo $lastid;
              //echo "<h1 class=\"h1\">Thank You for creating An Angel Ornament. </h1>";
               $result = $wpdb->get_results( $wpdb->prepare('SELECT * FROM '.$table2.' where id='.$lastid ) );
               foreach ( $result as $print )   {
                       $name_honouree2 = $print->name_honouree;
                       $message2 = $print->message;
                       $firstname2 = $print->first_name;
            }

        }
          // if the form is submitted but the name is empty
        //  if ( isset( $_POST["submit_form"] ) && $_POST["name_honouree"] == "" && $_POST["message"] == "" && $_POST["first_name"] == "" && $_POST["last_name"] == "" && $_POST["email"] == "" ) {


        //      echo "<p>You need to fill the required fields.</p>";
          // outputs everything
    //    }

      ?>

          <div class="front">
            <div class="canvas__background-image">
            </div>
            <div class="canvas__decoration-image"></div>
            <span class="canvas__message" id ="canvas__message" contenteditable="false"><?php echo ($host_url  !== 'v_form') ? "Your message" : $message2; ?></span>
              <span class="canvas__message2" id ="canvas__message2" contenteditable="false"><?php echo ($host_url  !== 'v_form') ? "To" : $name_honouree2; ?></span>
              <span class="canvas__message3" id="canvas__message3" contenteditable="false"><?php echo ($host_url  !== 'v_form') ? "From" : $firstname2; ?></span>
          </div>

        </div>
       <?php
        if ($host_url  !== 'v_form') {
        ?>

         <section id="custom-form">
        <div class="userdetails">

        <article class="inside">


        <h1 class="h1">More About You</h1>


        <div class="container">


          <div class="row">

          <div class="col-md-6">
              <input type="text" name="first_name" id="first_name" placeholder="firstname **" class="form-style" /> </div>

              <div class="col-md-6">
                <input type="text" name="last_name" id="last_name" placeholder="lastname **" class="form-style"/> </div>

                <div class="col-md-12">
              <input type="text" name="email" id="email" placeholder="email **" class="form-style"/> </div>




        </div>


         </div>

         <p>You will receive your angel ornament via email so you can share it with your friends.</p>
         <p>You will also be receiving news and updates on how to support the angel campaign.</p>


      </article>



      </div>

      <div class="text-center">
      <input type="submit" name="submit_form" value="Confirm Ornament" class="btn" id ="submit_form"/>

      </div>

      </section> <!-- end custom form here-->



</form>

<?php
  } else {
 ?>
<section class="page2-wrapper container">


<div class="template-main-wrapper">
<!-- put main template icons here -->

<h1 class="uppercase">Thank You For Creating <br> an Angel Ornament</h1>

<p>Your ornament is now displayed <br> along side others in our gallery</p>

</div>


<div class="page2-footer">

<h2>Help save more lives this holiday season.</h2>




<button name="donate" value="" class="btn btn-page-2" id="donate"/>Donate <span>To Help Now</span></button>

<button name="share" value="" class="btn btn-page-2" id="share"/>I love it! <span>I want to share it</span></button>

</div>

</section>
<?php
  }
 ?>



      </div>
      <div class="celebration-cards-actions-bar celebration-cards-actions-bar--big">
          <div class="celebration-cards-share-button">Share</div>
      </div>
    </div>

    <div class="celebration-cards-share-modal">
      <div class="celebration-cards-share-modal__content">
        <h4>Share it!</h4>
        <p class="celebration-cards-share-modal__content__message"></p>
        <div class="celebration-cards-share-modal__content__input">
          <input type="text" value="">
          <button>Copy</button>
          <br>
          <p class="celebration-cards-share-modal__content__social-message"></p>
        </div>
        <div class="celebration-cards-share-modal__content__cancel">
          <button>Cancel</button>
        </div>
        <div class="celebration-cards-share-modal__close-button">
          <img src="<?php echo plugins_url() . "/celebration-cards/public/images/close-icon.png"; ?>">
        </div>
      </div>
    </div>
  </div>

  <!-- Load Twitter for JavaScript -->
  <script>window.twttr = (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
      t = window.twttr || {};
    if (d.getElementById(id)) return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function(f) {
      t._e.push(f);
    };

    return t;
  }(document, "script", "twitter-wjs"));</script>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


</div>
