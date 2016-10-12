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

    <nav id="main-menu">
      <ul id="primary-nav">
        <?php wp_nav_menu(array(
          'menu'        => 'Main Menu',
          'container'   => '',
          'items_wrap'  => '%3$s'
        )); ?>
        <li><a href="#" id="toggleLatest">Latest</a></li>
      </ul>

      <ul id="language-switcher">
        <li><a href="#">EN</a></li>
        <li><a href="#">中文</a></li>
      </ul>
    </nav>

    <a class="button green big-donate" href="/donate">Donate</a>

    <nav id="latest-menu">
      <div id="latest-highlights">
        <div class="highlight highlight-1" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/highlight-news/1.jpg);">
          <a href="#">
            <h2>THE RECYCLE RIDE FOR TRANSPLANT RESEARCH</h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
        <div class="highlight highlight-2" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/highlight-news/2.jpg);">
          <a href="#">
            <h2>NEW LIFE INJECTED IN TB WARD AT VGH</h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
        <div class="highlight highlight-3" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/highlight-news/3.jpg);">
          <a href="#">
            <h2>RECORD-BREAKING SERIES RETURNS WITH SECOND SEASON</h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
        <div class="highlight highlight-4" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/highlight-news/4.jpg);">
          <a href="#">
            <h2>NEW ICU BEDS OPEN AT VGH WITH SUPPORT FROM TECK</h2>
            <span class="read-more">Read article</span>
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>

<?php if(get_post_type(get_the_ID()) == 'themes_post'): ?>
<header id="sub-navigation">
  <div class="container breadcrumb">
  <h3><a href="/why-give"><span class="back-arrow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-arrow.svg" /></span> Why Give</a></h3> <span class="separator">></span> <h3><?php print get_the_title(get_the_ID()); ?></h3>
  </div>
</header>
<?php endif; ?>


<?php if(get_post_type(get_the_ID()) == 'signature_events'): ?>
<header id="sub-navigation">
  <div class="container breadcrumb">
  <h3><a href="/events"><span class="back-arrow"><img src="<?php bloginfo('template_directory'); ?>/assets/img/back-arrow.svg" /></span> Events</a></h3> <span class="separator">></span> <h3><?php print get_the_title(get_the_ID()); ?></h3>
  </div>
</header>
<?php endif; ?>