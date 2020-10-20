<?php 

   function load_stylesheets()
   {
	   wp_register_style('bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
	   wp_enqueue_style('bootstrap');

	   wp_register_style('font', get_template_directory_uri() . '/lib/font-awesome/css/font-awesome.min.css', array(), 1, 'all');
	   wp_enqueue_style('font');

	   wp_register_style('animate', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), 1, 'all');
	   wp_enqueue_style('animate');

	   wp_register_style('ionicons', get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css', array(), 1, 'all');
	   wp_enqueue_style('ionicons');

	   wp_register_style('owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), 1, 'all');
	   wp_enqueue_style('owlcarousel');


	   wp_register_style('lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), 1, 'all');
	   wp_enqueue_style('lightbox');

	   wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
	   wp_enqueue_style('style');

	   wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
	   wp_enqueue_style('custom');
   }

   add_action('wp_enqueue_scripts', 'load_stylesheets' );

   function addjs() 
   {
	   wp_register_script('jquery', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('jquery');

	   wp_register_script('jquery-migrate', get_template_directory_uri() . '/lib/jquery/jquery-migrate.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('jquery-migrate');

	   wp_register_script('bootstrap', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('bootstrap');

	   wp_register_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('easing');

	   wp_register_script('mobile-nav', get_template_directory_uri() . '/lib/mobile-nav/mobile-nav.js', array(), 1, 1, 1);
	   wp_enqueue_script('mobile-nav');

	   wp_register_script('wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('wow');

	   wp_register_script('waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('waypoints');

	   wp_register_script('counterup', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('counterup');

	   wp_register_script('owl', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('owl');

	   wp_register_script('isotope', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('isotope ');

	   wp_register_script('lightbox', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array(), 1, 1, 1);
	   wp_enqueue_script('lightbox');

	   wp_register_script('contactform', get_template_directory_uri() . '/contactform/contactform.js', array(), 1, 1, 1);
	   wp_enqueue_script('contactform');

	   wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), 1, 1, 1);
	   wp_enqueue_script('main');

	   wp_register_script('custom', get_template_directory_uri() . '/custom.js', array(), 1, 1, 1);
	   wp_enqueue_script('custom');


   }

   add_action( 'wp_enqueue_scripts', 'addjs' );


   
 
function register_primary_menu() {
    register_nav_menu( 'primary', __( 'Primary Menu', 'theme-text-domain' ) );
}

add_action( 'after_setup_theme', 'register_primary_menu' );


function createCustomTable() {

	 global $wpdb;
 $charset_collate = $wpdb->get_charset_collate();
 require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

 //* Create the teams table
 $table_name = $wpdb->prefix . 'eniacoderContact';
 $sql = "CREATE TABLE $table_name (
 id INTEGER NOT NULL AUTO_INCREMENT,
 wp_name TEXT NOT NULL,
 email TEXT NOT NULL,
 wp_subject TEXT NOT NULL,
 wp_message TEXT NOT NULL,
 PRIMARY KEY (id)
 ) $charset_collate;";
 dbDelta( $sql );
}

add_action('init', 'createCustomTable' );




function wpcat_postsbycategory() {
	// the query
	$the_query = new WP_Query( array( 'category_name' => 'yourcategoryslug', 'posts_per_page' => 10 ) ); 
	
	// The Loop
	if ( $the_query->have_posts() ) {
		$string .= '<ul class="postsbycategory widget_recent_entries">';
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
				if ( has_post_thumbnail() ) {
				$string .= '<li>';
				$string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail($post_id, array( 50, 50) ) . get_the_title() .'</a></li>';
				} else { 
				// if no featured image is found
				$string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
				}
				}
		} else {
		// no posts found
	}
	$string .= '</ul>';

	return $string;
	/* Restore original Post Data */
	wp_reset_postdata();
	}

	// Add a shortcode
	add_shortcode('categoryposts', 'wpcat_postsbycategory');
	
	// Enable shortcodes in text widgets
	add_filter('widget_text', 'do_shortcode');
	
?>