<?php
/*
Plugin Name: Signals Dashboard
Plugin URI: http://signals.ca
Description: Helper function plugin used during development.
Version: 0.2
Author: Signals Design Group
Author URI: http://signals.ca
*/

if (!class_exists('SignalsDashboard')) {

  // Kick off the plugin
  if (function_exists('add_filter')) {
    add_action('init', array( 'SignalsDashboard', 'get_instance'), 0);
  }

  /**
  * Main SignalsDashboard Class
  */
  class SignalsDashboard {

    private static $instance = NULL;
    /**
     * Creates or returns an instance of this class.
     * - Singleton pattern
     * @return  A single instance of this class.
     */
    public static function get_instance() {
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct() {
      $this->initialize();
    }

    /**
     * Init function
     * @return void
     */
    public function initialize(){
      add_action('admin_menu', array($this, 'register_dashboard_page'));
    }

    /**
     * Add Dashboard Page to WordPress menu
     */
    public function register_dashboard_page() {
      add_menu_page('Signals Dashboard', 'Signals', 'manage_options', 'signals_admin', array($this, 'signals_dashboard_content'));
    }

    /**
     * Output Dashboard content
     */
    public function signals_dashboard_content() {
      ?>
        <div class="wrap">
            <?php screen_icon();?>
            <br>
            <p><img src="<?php print plugins_url('img/logo-symbols.svg', __FILE__);?>" style="display:inline-block;margin-right:0.5em;"/><img src="<?php print plugins_url('img/logo-wordmark.svg', __FILE__);?>" style="display:inline-block;" /></p>
            <h2>Signals Dashboard</h2>
            <p>Custom plugin developed by Signals Design Group.</p>
            <p>Signals is a communications and design firm known for bringing clarity to complex issues.</p>
            <p>Visit our website at <a href="http://www.signals.ca" target="_blank">signals.ca</a>.</p>

        </div>
      <?php
    }

    /**
    * Downloads an image from the specified URL and attaches it to a post as a post thumbnail.
    *
    * @param string $file    The URL of the image to download.
    * @param int    $post_id The post ID the post thumbnail is to be associated with.
    * @param string $desc    Optional. Description of the image.
    * @return string|WP_Error Attachment ID, WP_Error object otherwise.
    */
    public function generate_featured_image( $file, $post_id, $desc ){
        // Set variables for storage, fix file filename for query strings.
        preg_match( '/[^\?]+\.(jpe?g|jpe|gif|png)\b/i', $file, $matches );
        if ( ! $matches ) {
             return new WP_Error( 'image_sideload_failed', __( 'Invalid image URL' ) );
        }

        $file_array = array();
        $file_array['name'] = basename( $matches[0] );

        // Download file to temp location.
        $file_array['tmp_name'] = download_url( $file );

        // If error storing temporarily, return the error.
        if ( is_wp_error( $file_array['tmp_name'] ) ) {
            return $file_array['tmp_name'];
        }

        // Do the validation and storage stuff.
        $id = media_handle_sideload( $file_array, $post_id, $desc );

        // If error storing permanently, unlink.
        if ( is_wp_error( $id ) ) {
            @unlink( $file_array['tmp_name'] );
            return $id;
        }
        return set_post_thumbnail( $post_id, $id );
    }

  /**
   * get old wp_post attachments from legacy database
   */
    public function get_old_db_attachments(){
        $host = 'localhost';
        $db   = 'vgh_test';
        $user = 'root';
        $pass = 'root';
        $charset = 'utf8';
        $posts = array();

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        $pdo = new PDO($dsn, $user, $pass);
        // get all posts with attachments and the attachments ID
        $statement = $pdo->query("SELECT p.ID AS postID, p.post_title AS title, pm.meta_value AS attachID FROM wp_posts p LEFT OUTER JOIN wp_postmeta pm ON p.ID = pm.post_id WHERE pm.meta_key = '_thumbnail_id' AND p.post_status = 'publish' AND p.post_type = 'post'");
        foreach($statement as $row) {
          $posts[] = array(
            'postID' => $row['postID'],
            'title' => $row['title'],
            'attachID' => $row['attachID']
            );
        }

        // loop through posts and get the attachment post
        foreach($posts as $post){
          $sql = 'SELECT p.ID AS attachPostID, p.guid AS image, p.post_name AS name, p.post_excerpt AS description FROM wp_posts p WHERE post_type = "attachment" AND p.ID = "'. $post['attachID'] .'"';

          // loop through results as attach
          foreach($pdo->query($sql) as $row) {
            $this->generate_featured_image($row['image'], $post['postID'], $row['description']);
          }

        }

    }

  }

}
