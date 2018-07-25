<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h1><?php esc_attr_e( 'Luminate Plugin', 'wp_admin_style' ); ?></h1>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

            <?php if( !isset( $nonsecure_luminate_url) ) : ?>

					<div class="postbox">

						<h2><span><?php esc_attr_e( 'VGH & UBC Hospital Foundation Luminate Plugin', 'wp_admin_style' ); ?></span></h2>

						<div class="inside">

              <form method='post' action="" name="nonsecure_luminate_url_form">
              <input type="hidden" name="nonsecure_luminate_url_form_submitted" value="Y">
                <table class="widefat">
                	<tr>
                		<td class="row-title"><label for="nonsecure_luminate_url">Non-Secure Luminate URL</label></td>
                  </tr>
                  <tr>
                		<td><input style="width: 19em;" name="nonsecure_luminate_url" id="nonsecure_luminate_url" type="text" value="" class="regular-text" /><br></td>
                	</tr>
                  <tr>
                    <td class="row-title"><label for="secure_luminate_url">Secure Luminate URL(https)</label></td>
                  </tr>
                  <tr>
                    <td><input style="width: 19em;" name="secure_luminate_url" id="secure_luminate_url" type="text" value="" class="regular-text" /><br></td>
                  </tr>
                  <tr>
                    <td class="row-title"><label for="luminate_api_key">API Key</label></td>
                  </tr>
                  <tr>
                    <td><input style="width: 19em;" name="luminate_api_key" id="luminate_api_key" type="text" value="" class="regular-text" /><br></td>
                  </tr>
                </table>

                <p><input class="button-primary" type="submit" name="nonsecure_luminate_url_form_submit" value="<?php esc_attr_e( 'Save' ); ?>" /></p>
            </form>
						</div>
						<!-- .inside -->

					</div>

          <?php else: ?>

            <p>Your non-secure luminate url is: <?php echo $nonsecure_luminate_url ?></p>
            <p>Your secure luminate url is: <?php echo $secure_luminate_url ?></p>
            <p>Your api key is: <?php echo $luminate_api_key ?></p>
					<!-- .postbox -->

        <?php endif ?>

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

        <?php if( isset( $nonsecure_luminate_url) ) : ?>

				<div class="meta-box-sortables">
					<!-- .postbox -->
          <h2><span>Update your organizational info:</span></h2>

          <div class="inside">
            <form method='post' action="" name="nonsecure_luminate_url_form">
            <input type="hidden" name="nonsecure_luminate_url_form_submitted" value="Y">
              <table class="widefat">
                <tr>
                  <td class="row-title"><label for="nonsecure_luminate_url">Non-Secure Luminate URL</label></td>
                </tr>
                <tr>
                  <td><input style="width: 19em;" name="nonsecure_luminate_url" id="nonsecure_luminate_url" type="text" value="" class="regular-text" /><br></td>
                </tr>
                <tr>
                  <td class="row-title"><label for="secure_luminate_url">Secure Luminate URL(https)</label></td>
                </tr>
                <tr>
                  <td><input style="width: 19em;" name="secure_luminate_url" id="secure_luminate_url" type="text" value="" class="regular-text" /><br></td>
                </tr>
                <tr>
                  <td class="row-title"><label for="luminate_api_key">API Key</label></td>
                </tr>
                <tr>
                  <td><input style="width: 19em;" name="luminate_api_key" id="luminate_api_key" type="text" value="" class="regular-text" /><br></td>
                </tr>
              </table>

              <p><input class="button-primary" type="submit" name="nonsecure_luminate_url_form_submit" value="<?php esc_attr_e( 'Save' ); ?>" /></p>
          </form>
          </div>

				</div>
				<!-- .meta-box-sortables -->

      <?php endif ?>

			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
