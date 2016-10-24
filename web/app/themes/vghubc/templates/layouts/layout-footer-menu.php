        <section class="panel extra-padded expanding-two-column-list footer-about-menu">
          <div class="container">
            <div class="inner-wrap">
              <h2>Learn More About Us</h2>
              <div class="col-half">
                <p>At VGH & UBC Hospital Foundation, we partner with donors to raise essential funds over and above government funding for VGH, UBC Hospital, GF Strong Rehab Centre, Vancouver Coastal Health Research Institute and Vancouver Community Health Services. Together we deliver a healthy continuum of care – from research to patient care, rehabilitation and community health services.</p>
              </div>

              <div class="col-half last">
                <ul class="expanding-list">
                  <?php
                    $args = array(
                        'child_of' => 38,
                        'depth' => 1,
                        'title_li' => null,
                        'exclude' => implode(',', $gover_ids),
                        'sort_column' => 'menu_order'
                      );
                    wp_list_pages($args);
                  ?>
                </ul>
              </div>

            </div>
          </div>
        </section>