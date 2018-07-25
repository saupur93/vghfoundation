/* coded adapted from http://www.inkthemes.com/code-to-integrate-wordpress-media-uploader-in-plugintheme/ */
$j = jQuery.noConflict();
var selectedImage = "";

$j(document).ready(function() {
	var page = (location.href.split("?page=").length > 1) ? ((location.href.split("?page=")[1].search("celebration-cards") > -1) ? true : false) : false;

	if (page) {
		/* user clicks button on custom field, runs below code that opens new window */
		$j('#upload-cover-image').click(function() {

			selectedImage = '#cover-image';

			/*Thickbox function aimed to show the media window. This function accepts three parameters:
			*
			* Name of the window: "In our case Upload a Image"
			* URL : Executes a WordPress library that handles and validates files.
			* ImageGroup : As we are not going to work with groups of images but just with one that why we set it false.
			*/
			tb_show('Upload a Image', 'media-upload.php?referer=media_page&type=image&TB_iframe=true&post_id=0', false);
			return false;
		});

		/* user clicks button on custom field, runs below code that opens new window */
		$j('#upload-background-image').click(function() {

			selectedImage = '#background-image';

			/*Thickbox function aimed to show the media window. This function accepts three parameters:
			*
			* Name of the window: "In our case Upload a Image"
			* URL : Executes a WordPress library that handles and validates files.
			* ImageGroup : As we are not going to work with groups of images but just with one that why we set it false.
			*/
			tb_show('Upload a Image', 'media-upload.php?referer=media_page&type=image&TB_iframe=true&post_id=0', false);
			return false;
		});

		/* user clicks button on custom field, runs below code that opens new window */
		$j('#upload-decoration-image').click(function() {

			selectedImage = '#decoration-image';

			/*Thickbox function aimed to show the media window. This function accepts three parameters:
			*
			* Name of the window: "In our case Upload a Image"
			* URL : Executes a WordPress library that handles and validates files.
			* ImageGroup : As we are not going to work with groups of images but just with one that why we set it false.
			*/
			tb_show('Upload a Image', 'media-upload.php?referer=media_page&type=image&TB_iframe=true&post_id=0', false);
			return false;
		});

		/* user clicks button on custom field, runs below code that opens new window */
		$j('#upload-company-logo').click(function() {

			selectedImage = '#company-logo';

			/*Thickbox function aimed to show the media window. This function accepts three parameters:
			*
			* Name of the window: "In our case Upload a Image"
			* URL : Executes a WordPress library that handles and validates files.
			* ImageGroup : As we are not going to work with groups of images but just with one that why we set it false.
			*/
			tb_show('Upload a Image', 'media-upload.php?referer=media_page&type=image&TB_iframe=true&post_id=0', false);
			return false;
		});

		// window.send_to_editor(html) is how WP would normally handle the received data. It will deliver image data in HTML format, so you can put them wherever you want.
		window.send_to_editor = function(html) {
			var image_url = $j('img', html).attr('src');
			$j(selectedImage).attr('src', image_url);
			$j(selectedImage + "-text").val(image_url);
			tb_remove(); // calls the tb_remove() of the Thickbox plugin
			//$j('#submit_button').trigger('click');
		}

		// window.tb_showIframe is how WP would normally handle the load of the iframe.
		window.tb_showIframe = function() {
			var $body = $j($j("iframe")[$j("iframe").length - 1]).contents().find("body");                
			$body.prepend( '<style>#save {display: none;}</style>' );
		}

		// filter category templates
		$j('#celebration_cards_categories_template').on('change', function() {
			$j('.celebration_cards_template-tr').css('display', 'none');
			$j('.celebration_cards_template-tr.template-in-category-' + $j(this).val()).css('display', 'table-row');
		});
	}
});