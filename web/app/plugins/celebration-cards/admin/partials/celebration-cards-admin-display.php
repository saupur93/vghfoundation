<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://yowlu.com/wordpress/celebration-cards
 * @since      1.0.0
 *
 * @package    Celebration_Cards
 * @subpackage Celebration_Cards/admin/partials
 */
?>

<?php
	// aux var to know which page we want
	$requested_page = 'show';

	// aux var to know if we are creating a new template
	$creating = false;

	// aux var to know if we are creating a new category
	$creatingCategory = false;
	
	// check if edit is set
	if( isset( $_GET[ 'action' ] ) ) {

    	if( $_GET[ 'action' ] == 'edit' ) {

    		$requested_page = 'edit';

    		if ( isset( $_GET[ 'create' ] ) ) {

    			if ($_GET[ 'create' ] == 'template') {
    				$creating = true;
    			}

    		}
    	
    	}
    	else {

    		if ( isset( $_GET[ 'create' ] ) )  {

    			$creatingCategory = true;
    		
    		}

    	}

    }

    // if edit
    if ( $requested_page == 'edit' && !$creatingCategory ) {

    	// aux default value for the selected day
    	$template_id = 1;

    	if ( isset( $_GET[ 'template' ] ) ) {

    		if ( $_GET[ 'template'] > 0 && is_numeric( $_GET[ 'template' ] ) ) {

    			$template_id = $_GET[ 'template' ];
    		
    		}

    	}

    	if ( $creating ) {

    		// get the global wordpress database variable
			global $wpdb;

			// create a name for the table
   			$table_name = $wpdb->prefix . "celebration_cards_template";

   			$sql = "INSERT INTO {$wpdb->prefix}celebration_cards_template (id,template,cover_image,background_image,decoration_image,background_color,text_color,text_font,categoryId,update_time) VALUES (%d,%d,%s,%s,%s,%s,%s,%s,%d,%s) ON DUPLICATE KEY UPDATE update_time = %s";
			
			$sql = $wpdb->prepare( $sql, $template_id, 1, content_url() . '/plugins/celebration-cards/public/images/template' . 1 . '.png', content_url() . '/plugins/celebration-cards/public/images/templates/sample-img/img_template' . 1 . '.png', content_url() . '/plugins/celebration-cards/public/images/templates/card-decoration/card_decoration' . 1 . '.png', '#AF3C37', '#FFFFFF','Open Sans Light', 1, current_time( 'mysql' ), current_time( 'mysql' ) );
			
			// insert it
			$wpdb->query( $sql );

    	}

    	// if we are updating ( aka form data sent )
    	if( $_POST[ 'celebration_cards_hidden' ] == 'Y' ) {
 			
    		// get the global wordpress database variable
			global $wpdb;

			// create a name for the table
   			$table_name = $wpdb->prefix . "celebration_cards_template";

   			// update the day
    		$result = $wpdb->update( $table_name, array( 'template' => $_POST[ 'celebration_cards_template' ], 'cover_image' => $_POST[ 'celebration_cards_cover_image' ], 'background_image' => $_POST[ 'celebration_cards_background_image' ], 'decoration_image' => $_POST[ 'celebration_cards_decoration_image' ], 'background_color' => $_POST[ 'celebration_cards_background_color' ], 'text_color' => $_POST[ 'celebration_cards_text_color' ], 'text_font' => $_POST[ 'celebration_cards_text_font' ], 'categoryId' => intval($_POST[ 'celebration_cards_category_parent' ]), 'update_time' => current_time( 'mysql' ) ), array( 'id' => $template_id ) );

?>

<div class="updated">
	<p>
		<strong>
			<?php _e( 'Options saved.' ); ?>
		</strong>
	</p>
</div>

<?php

    }

    // normal page display
    // get the global wordpress database variable
	global $wpdb;

	// create a name for the table
   	$table_name = $wpdb->prefix . "celebration_cards_template";
				
   	// declare the query
	$sql = "SELECT * FROM " . $table_name . " WHERE id = " . $template_id . " LIMIT 1";

	// get the template
	$celebration_cards_template = $wpdb->get_results( $sql, ARRAY_A );

	// create a name for the table
   	$table_name2 = $wpdb->prefix . "celebration_cards_category";
				
   	// declare the query
	$sql2 = "SELECT * FROM " . $table_name2;

	// get the template
	$celebration_cards_categories = $wpdb->get_results( $sql2, ARRAY_A );

?>

<div class="wrap">
	<?php    echo "<h1>" . __( 'Celebration Cards Template' ) . ' ' . $template_id . ' ' . __( 'Settings' ) . "</h1>"; ?>

	<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER[ 'REQUEST_URI' ] ); ?>">
		<input type="hidden" name="celebration_cards_hidden" value="Y">
		
		<?php
			
			echo "<h3>" . __( 'Template Settings' ) . "</h3>";

		?>

		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<?php    echo __( 'Template' ) ; ?>
					</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span>
									<?php    echo __( 'Template' ) ; ?>
								</span>
							</legend>
							<?php 

								for( $i = 1; $i < 9; $i++ ) {

									// output the images
									echo '<label class="rad" for="celebration_cards_template">';
									echo '<input name="celebration_cards_template" type="radio" id="celebration_cards_template' . $i . '" value="' . $i . '" ' . ( ( $celebration_cards_template[ 0 ][ 'template' ] == $i ) ? 'checked="checked"' : '' ) . '>';
									echo '<div class="admin-celebration-cards-img-wrapper"><img class="admin-celebration-cards-img" alt="template ' . $i . '" title="image ' . $i . '" src="' . plugins_url() . '/celebration-cards/public/images/cover' . $i . '.png"></div>';
									echo '</label>';
								}

							?>
						</fieldset>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php    echo __( 'Cover Image' ) ; ?>
					</th>
					<td>
						<div class="admin-celebration-cards-img-wrapper">
							<img id="cover-image" class="admin-celebration-cards-img" alt="cover image" title="cover image" src="<?php echo $celebration_cards_template[ 0 ][ 'cover_image' ]; ?>">
						</div>
						<input type="text" name="celebration_cards_cover_image" id="cover-image-text" class="image_path" value="<?php echo $celebration_cards_template[ 0 ][ 'cover_image' ]; ?>" id="image_path">
						<input type="button" value="Upload Image" class="button-primary" id="upload-cover-image"/> Upload your Image from here.
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php    echo __( 'Background Image' ) ; ?>
					</th>
					<td>
						<div class="admin-celebration-cards-img-wrapper">
							<img id="background-image" class="admin-celebration-cards-img" alt="background image" title="background image" src="<?php echo $celebration_cards_template[ 0 ][ 'background_image' ]; ?>">
						</div>
						<input type="text" name="celebration_cards_background_image" id="background-image-text" class="image_path" value="<?php echo $celebration_cards_template[ 0 ][ 'background_image' ]; ?>" id="image_path">
						<input type="button" value="Upload Image" class="button-primary" id="upload-background-image"/> Upload your Image from here.
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php    echo __( 'Decoration Image' ) ; ?>
					</th>
					<td>
						<div class="admin-celebration-cards-img-wrapper">
							<img id="decoration-image" class="admin-celebration-cards-img" alt="decoration image" title="decoration image" src="<?php echo $celebration_cards_template[ 0 ][ 'decoration_image' ]; ?>">
						</div>
						<input type="text"  name="celebration_cards_decoration_image" id="decoration-image-text" class="image_path" value="<?php echo $celebration_cards_template[ 0 ][ 'decoration_image' ]; ?>" id="image_path">
						<input type="button" value="Upload Image" class="button-primary" id="upload-decoration-image"/> Upload your Image from here.
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php    echo __( 'Background Color' ) ; ?>
					</th>
					<td>
						<?php

							$background_colors = array( "#AF3C37", "#BBEDF7", "#FFFFFF", "#98CC96", "#80C7D5", "#FDB940", "#698766", "#434A54" );

							for( $i = 0; $i < count( $background_colors ); $i++ ) {

								// output the colors
								echo '<label class="rad" for="celebration_cards_background_color">';
								echo '<input name="celebration_cards_background_color" type="radio" class="color-input" id="celebration_cards_background_color"' . $i . '" value="' . $background_colors[ $i ] . '" ' . ( ( $celebration_cards_template[ 0 ][ 'background_color' ] == $background_colors[ $i ] ) ? 'checked="checked"' : '' ) . '>';
								echo '<div class="admin-celebration-cards-img-wrapper color-input-wrapper" style="background-color:'. $background_colors[ $i ] . '!important;"></div>';
								echo '</label>';
									
							}

						?>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php    echo __( 'Text Color' ) ; ?>
					</th>
					<td>
						<?php

							$text_colors = array( "#AF3C37", "#BBEDF7", "#FFFFFF", "#98CC96", "#80C7D5", "#FDB940", "#698766", "#434A54" );

							for( $i = 0; $i < count( $text_colors ); $i++ ) {

								// output the colors
								echo '<label class="rad" for="celebration_cards_text_color">';
								echo '<input name="celebration_cards_text_color" type="radio" class="color-input" id="celebration_cards_text_color"' . $i . '" value="' . $text_colors[ $i ] . '" ' . ( ( $celebration_cards_template[ 0 ][ 'text_color' ] == $text_colors[ $i ] ) ? 'checked="checked"' : '' ) . '>';
								echo '<div class="admin-celebration-cards-img-wrapper color-input-wrapper" style="background-color:'. $text_colors[ $i ] . '!important;"></div>';
								echo '</label>';
									
							}

						?>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php    echo __( 'Text Font' ) ; ?>
					</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span>
									<?php    echo __( 'Text Font' ) ; ?>
								</span>
							</legend>
							<label for="celebration_cards_text_font">
								<select name="celebration_cards_text_font" id="celebration_cards_text_font">
									<?php

										$text_fonts = array( "Open Sans Light", "Sofia Regular", "Source Sans Pro Regular", "Quicksand Bold", "League Spartan Regular", "Dancing Script Regular", "Alex Brush Regular" );

										for( $i = 0; $i < count( $text_fonts ); $i++ ) {

											// output the position
											echo '<option value="' . $text_fonts[ $i ] . '" ' . ( ( $celebration_cards_template[ 0 ][ 'text_font' ] == $text_fonts[ $i ] ) ? 'selected="selected"' : '' ) . '>' . $text_fonts[ $i ] . '</option>';

										}

									?>
								</select>
							</label>
						</fieldset>
					</td>
				</tr>
				<tr>
					<th scope="row">
						<?php    echo __( 'Category' ) ; ?>
					</th>
					<td>
						<fieldset>
							<legend class="screen-reader-text">
								<span>
									<?php    echo __( 'Category' ) ; ?>
								</span>
							</legend>
							<label for="celebration_cards_category_parent">

								<select name="celebration_cards_category_parent" id="celebration_cards_category_parent">
									<?php

										for( $i = 0; $i < count( $celebration_cards_categories ); $i++ ) {

											// output the position
											echo '<option value="' . $celebration_cards_categories[ $i ][ 'id' ] . '" ' . ( ( $celebration_cards_template[ 0 ][ 'categoryId' ] == $celebration_cards_categories[ $i ][ 'id' ] ) ? 'selected="selected"' : '' ) . '>' . $celebration_cards_categories[ $i ][ 'title' ] . '</option>';

										}

									?>
								</select>
							</label>
						</fieldset>
					</td>
				</tr>
			</tbody>
		</table>

		<p class="submit">
			<?php    echo '<input type="submit" name="submit" id="submit" class="button button-primary" value="' . __( 'Save changes' ) . '">'; ?>
		</p>
	</form>
		
</div>

<?php

    }
    else {
		// if main page

    	// if we are updating ( aka form data sent )
		if( $_POST['celebration_cards_hidden'] == 'Y' || $_POST['celebration_cards_category_hidden'] == 'Y' ) {

			if ( $_POST['celebration_cards_hidden'] == 'Y' ) {
				// get data
	        	$celebration_cards_company_logo = $_POST[ 'celebration_cards_company_logo' ];

	        	// update data
	        	update_option( 'celebration_cards_company_logo', $celebration_cards_company_logo );

	        }
	        else {
	        	// get the global wordpress database variable
				global $wpdb;

				// create a name for the table
	   			$table_name5 = $wpdb->prefix . "celebration_cards_category";
					
	   			// declare the query
				$sql5 = "SELECT * FROM " . $table_name5;

				// get the categories
				$celebration_cards_categories_aux = $wpdb->get_results($sql5, ARRAY_A);

				foreach ($celebration_cards_categories_aux as $key => $value) {
					
					// update the day
	    			$result = $wpdb->update( $table_name5, array( 'title' => stripslashes( $_POST[ 'celebration_cards_category_title' . $value['id'] ] ), 'update_time' => current_time( 'mysql' ) ), array( 'id' => $value['id'] ) );

				}

				$celebration_cards_company_logo = get_option( 'celebration_cards_company_logo' );

			}

?>

<div class="updated">
	<p>
		<strong>
			<?php _e( 'Options saved.' ); ?>
		</strong>
	</p>
</div>

<?php

    } else {

        // normal page display
        $celebration_cards_company_logo = get_option( 'celebration_cards_company_logo' );

        if ( isset( $_GET[ 'delete' ] ) ) {

        	if ( $_GET[ 'delete' ] == 'template' ) {

	        	$template_id = isset( $_GET[ 'template' ] ) ? $_GET[ 'template' ] : -1;

	        	// get the global wordpress database variable
				global $wpdb;

				// create a name for the table
	   			$table_name = $wpdb->prefix . "celebration_cards_template";

	   			$wpdb->delete( $table_name, array( 'id' => $template_id ) );

	   		}

	   		else {

	   			$category_id = isset( $_GET[ 'category' ] ) ? $_GET[ 'category' ] : -1;

	        	// get the global wordpress database variable
				global $wpdb;

				// create a name for the table
	   			$table_name = $wpdb->prefix . "celebration_cards_template";

	   			$wpdb->delete( $table_name, array( 'categoryId' => $category_id ) );

				// create a name for the table
	   			$table_name2 = $wpdb->prefix . "celebration_cards_category";

	   			$wpdb->delete( $table_name2, array( 'id' => $category_id ) );

	   		}

        }

        if ( $creatingCategory ) {

        	// get the global wordpress database variable
			global $wpdb;

	   		// aux default value for the selected day
	    	$categoryId = 1;

	    	if ( isset( $_GET[ 'category' ] ) ) {

	    		if ( $_GET[ 'category'] > 0 && is_numeric( $_GET[ 'category' ] ) ) {

	    			$categoryId = $_GET[ 'category' ];
	    		
	    		}

	    	}

	   		// create a name for the table
	   		$table_name3 = $wpdb->prefix . "celebration_cards_category";

	   		$sql3 = "INSERT INTO {$wpdb->prefix}celebration_cards_category (id,title,update_time) VALUES (%d,%s,%s) ON DUPLICATE KEY UPDATE update_time = %s";
				
			$sql3 = $wpdb->prepare( $sql3, $categoryId, 'New Category', current_time( 'mysql' ), current_time( 'mysql' ) );
				
			// insert it
			$wpdb->query( $sql3 );

	   	}

    }

?>

<div class="wrap">
	<?php    echo "<h1>" . __( 'Celebration Cards Settings' ) . "</h1>"; ?>

	<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI'] ); ?>">
		<input type="hidden" name="celebration_cards_hidden" value="Y">
		<h3 class="title">
			<?php    echo __( 'Global Settings' ); ?>
		</h3>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<?php    echo __( 'Company Logo' ) ; ?>
					</th>
					<td>
						<div class="admin-celebration-cards-img-wrapper">
							<img id="company-logo" class="admin-celebration-cards-img" alt="company logo" title="company logo" src="<?php echo $celebration_cards_company_logo; ?>">
						</div>
						<input type="text" name="celebration_cards_company_logo" id="company-logo-text" class="image_path" value="<?php echo $celebration_cards_company_logo; ?>" id="image_path">
						<input type="button" value="Upload Image" class="button-primary" id="upload-company-logo"/> Upload your Logo to be shown on the back of the cards from here.
					</td>
				</tr>
			</tbody>
		</table>
		<p class="submit">
			<?php    echo '<input type="submit" name="submit" id="submit" class="button button-primary" value="' . __( 'Save changes' ) . '">'; ?>
		</p>
	</form>

	<hr>

	<?php

		// get the global wordpress database variable
		global $wpdb;

		// create a name for the table
   		$table_name2 = $wpdb->prefix . "celebration_cards_category";
				
   		// declare the query
		$sql2 = "SELECT * FROM " . $table_name2;

		// get the days
		$celebration_cards_categories = $wpdb->get_results($sql2, ARRAY_A);

	?>
	
	<div>
		<h3 class="title pull-left">
			<?php    echo __( 'Categories Settings' ); ?>
		</h3>
		<a class="call-to-action pull-right" href="<?php echo strtok( $_SERVER["REQUEST_URI"], '?' ) . '?page=celebration-cards&action=show&create=category&category=' . ( count( $celebration_cards_categories ) + 1 ); ?>"><button type="button" name="add" id="add" class="button button-primary"><?php echo __( 'Add a new Category' ); ?></button></a>
	</div>
	<div class="clearfix"></div>
	<p>
		<?php    echo __( 'You can modify for each category its title. If you delete the category, each template in this category will be also deleted.' ); ?>
	</p>

	<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI'] ); ?>">
		<input type="hidden" name="celebration_cards_category_hidden" value="Y">
		<table class="form-table">
			<tbody>
				<?php 
				
					// loop for all the days
					foreach( $celebration_cards_categories as $row ) {

				?>
				<tr>
					<th scope="row">
						<?php    echo __( 'Category Title' ) ; ?>
					</th>
					<td>
						<?php echo '<input type="text" name="celebration_cards_category_title' . $row["id"] . '" id="celebration_cards_category_title' . $row["id"] . '" value="' . $row["title"] . '">'; ?>
						<?php echo '<a href="' . strtok( $_SERVER["REQUEST_URI"], '?' ) . '?page=celebration-cards&delete=category&category=' . $row[ 'id' ] . '" type="button" class="button-primary button-danger"/>X</a>'; ?>
					</td>
				</tr>
				<?php
		
					}

				?>
			</tbody>
		</table>
		<p class="submit">
			<?php    echo '<input type="submit" name="submit" id="submitCategory" class="button button-primary" value="' . __( 'Save changes' ) . '">'; ?>
		</p>
	</form>

	<hr>

	<?php

		// get the global wordpress database variable
		global $wpdb;

		// create a name for the table
   		$table_name = $wpdb->prefix . "celebration_cards_template";
				
   		// declare the query
		$sql = "SELECT * FROM " . $table_name;

		// get the days
		$celebration_cards_templates = $wpdb->get_results($sql, ARRAY_A);

	?>
	
	<div>
		<h3 class="title pull-left">
			<?php    echo __( 'Templates Settings' ); ?>
		</h3>
		<a class="call-to-action pull-right" href="<?php echo strtok( $_SERVER["REQUEST_URI"], '?' ) . '?page=celebration-cards&action=edit&create=template&template=' . ( count( $celebration_cards_templates ) + 1 ); ?>"><button type="button" name="add" id="add" class="button button-primary"><?php echo __( 'Add a new Template' ); ?></button></a>
	</div>
	<div class="clearfix"></div>
	<p>
		<?php    echo __( 'You can modify for each template several properties as the images that uses or the background color.' ); ?>
	</p>

	<div>
		<tr>
			<th scope="row">
				<?php    echo __( 'Category' ) ; ?>
			</th>
			<td>
				<fieldset>
					<legend class="screen-reader-text">
						<span>
							<?php    echo __( 'Category' ) ; ?>
						</span>
					</legend>
					<label for="celebration_cards_text_font">
						Templates in Category:
						<select name="celebration_cards_categories_template" id="celebration_cards_categories_template">
							<?php

								for( $i = 0; $i < count( $celebration_cards_categories ); $i++ ) {

									// output the position
									echo '<option value="' . $celebration_cards_categories[ $i ][ 'id' ] . '" ' . ( ( $i == 0 ) ? 'selected="selected"' : '' ) . '>' . $celebration_cards_categories[ $i ][ 'title' ] . '</option>';

								}

							?>
						</select>
					</label>
				</fieldset>
			</td>
		</tr>
	</div>

	<div class="tablenav top">
		<div class="tablenav-pages one-page">
			<span class="displaying-num"><?php echo count( $celebration_cards_templates ) . ' ' . __( 'elements' ); ?></span>
		</div>		
		<br class="clear">
	</div>
	
	<table class="wp-list-table widefat fixed striped posts">
		<thead>
			<tr>
				<td id="cb" class="manage-column column-cb check-column">
					<label class="screen-reader-text" for="cb-select-all-1"><?php __( 'Select all' ); ?></label>
					<input id="cb-select-all-1" type="checkbox">
				</td>
				<th scope="col" id="template" class="manage-column column-title column-primary sortable desc">
					<a href="#"><span>Template</span><span class="sorting-indicator"></span></a>
				</th>
				<th scope="col" id="predefined-template" class="manage-column column-template">Layout</th>
				<th scope="col" id="cover-image" class="manage-column column-image">Cover</th>
				<th scope="col" id="background-image" class="manage-column column-image">Image</th>
				<th scope="col" id="decoration-image" class="manage-column column-image">Decor.</th>
				<th scope="col" id="background-color" class="manage-column column-color">Bg.</th>
				<th scope="col" id="text-color" class="manage-column column-color">Color</th>
				<th scope="col" id="text-font" class="manage-column column-font">Font</th>
				<th scope="col" id="date" class="manage-column column-date sortable asc"><a href="#"><span>Date</span><span class="sorting-indicator"></span></a></th>
			</tr>
		</thead>

		<tbody id="the-list">
			
			<?php 
				
				// loop for all the days
				foreach( $celebration_cards_templates as $row ) {

			?>
			
			<tr style="<?php echo ($row['categoryId'] == $celebration_cards_categories[0]['id']) ? 'display: table-row;' : 'display: none;' ;?>" id="celebration_cards_template-<?php echo $row['id'] ;?>" class="iedit author-self level-0 template-in-category-<?php echo $row[ 'categoryId' ];?> celebration_cards_template-tr celebration_cards_template-<?php echo $row[ 'id' ];?> type-post status-publish format-standard hentry xfolkentry">
				<th scope="row" class="check-column">			
					<label class="screen-reader-text" for="cb-select-<?php echo $row['id'] ;?>"> <?php echo __( 'Choose' ) . ' ' . __( 'template' ) . ' ' . $row[ 'id' ]; ?></label>
					<input id="cb-select-<?php echo $row[ 'id' ] ;?>" type="checkbox" name="celebration_cards_template[]" value="<?php echo $row['id'] ;?>">
					<div class="locked-indicator"></div>
				</th>

				<td class="title column-title has-row-actions column-primary page-title" data-colname="Template">
					<strong>
						<a class="row-title" href="<?php echo strtok( $_SERVER[ "REQUEST_URI" ],'?' ) . '?page=celebration-cards&action=edit&template=' . $row[ 'id' ]; ?>" title="<?php echo __( 'Edit' ) . ' ' . __( 'template' ) . ' ' . $row[ 'id' ];?> "><?php echo __( 'Template' ) . ' ' . $row[ 'id' ];?></a>
					</strong>
					<div class="locked-info">
						<span class="locked-avatar"></span> 
						<span class="locked-text"></span>
					</div>

					<div class="row-actions">
						<span class="edit">
							<a href="<?php echo strtok( $_SERVER["REQUEST_URI"], '?' ) . '?page=celebration-cards&action=edit&template=' . $row[ 'id' ]; ?>" title="<?php echo __( 'Edit this element' ); ?>"><?php echo __( 'Edit' ); ?></a> 
						</span>
						<span class="delete">
							<a href="<?php echo strtok( $_SERVER["REQUEST_URI"], '?' ) . '?page=celebration-cards&delete=template&template=' . $row[ 'id' ]; ?>" title="<?php echo __( 'Delete this element' ); ?>"><?php echo __( 'Delete' ); ?></a> 
						</span>
					</div>
				</td>

				<td class="author column-template" data-colname="Predefined Template">
					<?php echo $row[ 'template' ] ;?>
				</td>
				
				<td class="image column-image" data-colname="Cover Image">
					<img class="admin-celebration-cards-img" alt="template <?php echo $row[ 'id' ] ;?> cover image" title="template <?php echo $row[ 'id' ] ;?> cover image" src="<?php echo $row[ 'cover_image' ] ;?>">
				</td>

				<td class="image column-image" data-colname="Background Image">
					<img class="admin-celebration-cards-img" alt="template <?php echo $row[ 'id' ] ;?> background image" title="template <?php echo $row[ 'id' ] ;?> background image" src="<?php echo ( strpos( $row[ 'background_image' ], 'img_template0' ) === false ) ? $row[ 'background_image' ] : content_url() . '/plugins/celebration-cards/public/images/background-icon.png' ;?>">
				</td>

				<td class="image column-image" data-colname="Decoration Image">
					<img class="admin-celebration-cards-img" alt="template <?php echo $row[ 'id' ] ;?> decoration image" title="template <?php echo $row[ 'id' ] ;?> decoration image" src="<?php echo $row[ 'decoration_image' ] ;?>">
				</td>

				<td class="author column-color" data-colname="Background Color">
					<div style="background-color: <?php echo $row[ 'background_color' ] ;?>;"></div>
				</td>

				<td class="author column-color" data-colname="Text Color">
					<div style="background-color: <?php echo $row[ 'text_color' ] ;?>;"></div>
				</td>

				<td class="author column-font" data-colname="Text Font">
					<?php echo $row[ 'text_font' ] ;?>
				</td>

				<td class="date column-date" data-colname="Date">
					<abbr title="<?php echo $row[ 'update_time' ] ;?>"><?php echo $row[ 'update_time' ] ;?></abbr>
				</td>
			<?php
				}
			?>

		</tbody>

		<tfoot>
			<tr>
				<td id="cb" class="manage-column column-cb check-column">
					<label class="screen-reader-text" for="cb-select-all-2"><?php __( 'Select all' ); ?></label>
					<input id="cb-select-all-2" type="checkbox">
				</td>
				<th scope="col" id="template" class="manage-column column-title column-primary sortable desc">
					<a href="#"><span>Template</span><span class="sorting-indicator"></span></a>
				</th>
				<th scope="col" id="predefined-template2" class="manage-column column-template">Layout</th>
				<th scope="col" id="cover-image2" class="manage-column column-image">Cover</th>
				<th scope="col" id="background-image2" class="manage-column column-image">Image</th>
				<th scope="col" id="decoration-image2" class="manage-column column-image">Decor.</th>
				<th scope="col" id="background-color2" class="manage-column column-color">Bg.</th>
				<th scope="col" id="text-color2" class="manage-column column-color">Color</th>
				<th scope="col" id="text-font2" class="manage-column column-font">Font</th>
				<th scope="col" id="date2" class="manage-column column-date sortable asc"><a href="#"><span>Date</span><span class="sorting-indicator"></span></a></th>
			</tr>
		</tfoot>
	</table>

	<div class="tablenav bottom">
		<div class="tablenav-pages one-page"><span class="displaying-num"><?php echo count( $celebration_cards_templates ) . ' ' . __( 'elements' ); ?></span>
		<br class="clear">
	</div>
		
</div>

<?php
    }
?>