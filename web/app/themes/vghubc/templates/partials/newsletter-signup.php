        <section class="panel grey-bg extra-padded newsletter-signup">
          <div class="container">
            <div class="inner-wrap">
              <?php if(qtrans_getLanguage() == 'zh'): ?>
              <h2>理解您的捐助如何拯救生命</h2>
              <?php else: ?>
              <h2>Find out how <span class="green">your donations</span> make a difference.</h2>
              <?php endif; ?>
              <form method="POST" action="http://support.vghfoundation.ca/site/Survey" target="_blank">
                <input type="hidden" name="cons_info_component" id="cons_info_component" value="t" />
                <input type="hidden" name="cons_mail_opt_in" id="cons_mail_opt_in" value="t" />
                <input type="hidden" name="cons_email_opt_in" id="cons_email_opt_in" checked="checked" />
                <input type="hidden" id="cons_email_opt_in_requested" name="cons_email_opt_in_requested" value="true" />
                <input type="hidden" name="cons_postal_opt_in" id="cons_postal_opt_in"  />
                <input type="hidden" id="cons_postal_opt_in_requested" name="cons_postal_opt_in_requested" value="true" />
                <input type="hidden" name="s_rememberMe" id="s_rememberMe"  />
                <input type="hidden" id="remember_me_opt_in_requested" name="remember_me_opt_in_requested" value="true" />
                <input type="text" name="denySubmit" id="denySubmit" value="" alt="This field is used to prevent form submission by scripts." />
                <input type="text" placeholder="First Name" name="cons_first_name" />
                <input type="text" placeholder="Last Name" name="cons_last_name" />
                <input type="email" placeholder="Email" name="cons_email" />
                <input type="submit" value="Subscribe" name="ACTION_SUBMIT_SURVEY_RESPONSE" />
                <input type="hidden" name="SURVEY_ID" id="SURVEY_ID" value="1162" />
              </form>
            </div>
          </div>
        </section>
