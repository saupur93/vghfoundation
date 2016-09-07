<header id="top-header">
  <div class="container">
    <div class="navburger">
      <div class="stripes">
        <div class="stripe stripe1"></div>
        <div class="stripe stripe2"></div>
        <div class="stripe stripe3"></div>
      </div>
    </div>

    <h1 class="site-name"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>

    <nav id="latest-menu">
      <a href="#" id="toggleLatest">Latest</a>

      <div id="latest-highlights">
        <div class="highlight highlight-1" style="background-image:url(http://www.fillmurray.com/400/160);">
          <a href="#">
            <h2>THE RECYCLE RIDE FOR TRANSPLANT RESEARCH</h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
        <div class="highlight highlight-2" style="background-image:url(http://www.fillmurray.com/g/400/160);">
          <a href="#">
            <h2>NEW LIFE INJECTED IN TB WARD AT VGH</h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
        <div class="highlight highlight-3" style="background-image:url(http://www.fillmurray.com/400/160);">
          <a href="#">
            <h2>RECORD-BREAKING SERIES RETURNS WITH SECOND SEASON</h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
        <div class="highlight highlight-4" style="background-image:url(http://www.fillmurray.com/g/400/160);">
          <a href="#">
            <h2>NEW ICU BEDS OPEN AT VGH WITH SUPPORT FROM TECK</h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
      </div>
    </nav>

    <nav id="main-menu">
      <ul id="primary-nav">
        <?php wp_nav_menu(array(
          'menu'        => 'Main Menu',
          'container'   => '',
          'items_wrap'  => '%3$s'
        )); ?>

      </ul>
    </nav>




  </div>
</header>





