<header id="top-header">
  <div class="inner-wrap">
    <h1 class="site-name"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>

    <nav id="main-menu">
      <ul id="primary-nav">
        <?php wp_nav_menu(array(
          'menu'        => 'Main Navigation',
          'container'   => '',
          'items_wrap'  => '%3$s'
        )); ?>

      </ul>

    </nav>
  </div>
</header>





<?php

// <div class="navburger">
//   <div class="stripes">
//     <div class="stripe stripe1"></div>
//     <div class="stripe stripe2"></div>
//     <div class="stripe stripe3"></div>
//   </div>
// </div>

?>