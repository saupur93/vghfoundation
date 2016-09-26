<?php
/*
Template Name: Style Guide
*/
?>

<?php get_header(); ?>

	<div class="style-guide">
    <section class="main-content panel">
      <div class="container">
        <aside class="fixed-sidebar">
          <nav>
            <ul>
              <li><a href="#headings">Headings</a></li>
              <li><a href="#body-text">Body text</a></li>
              <li><a href="#column-lists">Column & List</a></li>
              <li><a href="#brand-colours">Brand Colours</a></li>
              <li><a href="#theme-colours">Theme Colours</a></li>
              <li><a href="#buttons">Buttons</a></li>
            </ul>
          </nav>
        </aside>

        <section id="headings" class="style-section panel">
          <h1 class="section-title">Headings</h1>
          <h1>Page Tile Headings</h1>

          <h2>Heading 2</h2>

          <h3>Heading 3</h3>

          <h4>Heading 4</h4>

          <h5>Heading 5</h5>

        </section>

        <section id="body-text" class="style-section">
          <h1 class="section-title">Body styles</h1>
          <p class="intro">Intro Paragraph. With your help, we can provide care to those who need it most.</p>

          <p>This is a paragraph with a <span class="highlighted-text">text highlight treatment</span>. quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptat</p>

          <p class="small">Body 2. Dr. Miller is an internationally renowned surgeon, educator, clinician and researcher, and was one of the leaders in launching the world’s first population-based ovarian cancer prevention program.</p>

          <blockquote>
            <p>“Harnessing the power of philanthropy to significantly improve specialized health care and research for British Columbians.”</p>
          </blockquote>

        </section>


        <section id="column-lists" class="style-section">
          <h1 class="section-title">Columns & Lists</h1>

          <div class="col-row">
            <div class="col-half">
              <p>Two column. Together with your support, VGH UBC Hospital Foundation is saving lives in our community. We are Vancouver Costal Health's primary philanthropic partner.</p>
            </div>
            <div class="col-half">
              <p>Your support enables us to provide the best hospital care to every adult British Columbian. Our donors drive innovation and health care transformation.</p>
            </div>
          </div>


          <h5>Unordered List:</h5>
          <ul>
            <li>Claritas est etiam processus dynamicus, qui sequitur</li>
            <li>mutationem consuetudium lectorum. Mirum est notare</li>
            <li>quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</li>
          </ul>

          <h5>Ordered List:</h5>
          <ol>
            <li>Claritas est etiam processus dynamicus, qui sequitur</li>
            <li>mutationem consuetudium lectorum. Mirum est notare</li>
            <li>quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</li>
          </ol>
        </section>

        <section id="brand-colours" class="style-section">
          <h1 class="section-title">Brand Colours</h1>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/style-guide/brand-colours.jpg" />
        </section>

        <section id="theme-colours" class="style-section">
          <h1 class="section-title">Theme Colours</h1>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/style-guide/theme-colours.jpg" />
        </section>

        <section id="buttons" class="style-section">
          <h1 class="section-title">Buttons</h1>

          <p>Button treatment variations.</p>

          <div class="col-half">
            <h5>Filled green button</h5>
            <p><a href="#" class="button green">Donate</a></p>

            <h5>Keyline green button</h5>
            <p><a href="#" class="button green-keyline">Learn more</a></p>
          </div>

          <div class="col-half">
            <h5>Bordered Links</h5>
            <p><a href="#" class="read-more">Read more</a></p>
          </div>

        </section>



      </div>
    </section>


    <?php //get_template_part('templates/layouts/layouts'); ?>
	</div>

	<?php edit_post_link('edit', '<div class="admin-edit-link">', '</div>'); ?>

<?php get_footer(); ?>
