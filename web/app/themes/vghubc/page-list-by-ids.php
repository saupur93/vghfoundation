<?php
/*
Template Name: List by ID's
*/
?>


<?php get_header(); ?>
  <div class="page-wrap">
  	<div class="style-guide">
      <section class="main-content panel">
        <div class="container" style="margin-top: 150px;">
        <h1>Posts</h1>

        <?php
        $my_archives=wp_get_archives(array(
        	'type'=>'alpha',
        	'show_post_count'=>true,
        	'post_type'=>'post',
        	'format'=>'html'
        ));
         ?>

        <h1>Pages</h1>

         <?php
         $my_archives=wp_get_archives(array(
         	'type'=>'alpha',
         	'show_post_count'=>true,
         	'post_type'=>'page',
         	'format'=>'html'
         ));
          ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
