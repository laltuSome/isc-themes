<?php
ob_start();



add_theme_support( 'yoast-seo-breadcrumbs' );

//custom-social-sharing

include 'admin/custom-admin/featured-meta-box.php';

// REDUX ADMIN
require_once (dirname(__FILE__) . '/admin/redux/config.php');
function redux_custom_css() {
	wp_enqueue_style('admin_styles' , get_template_directory_uri().'/admin/redux/redux-custom.css');
}
add_action('admin_head', 'redux_custom_css');


// ADD STYLES AND SCRIPTS

function theme_styles_scripts() {

wp_enqueue_style( 'style', get_stylesheet_uri(), array(), time() );

// JQUERY Min.
	
	wp_deregister_script('jquery-3.3.1.min');
	wp_enqueue_script('jquery', 'jquery-3.3.1.min.js', array(), null, true);

		// Isotope PACKAGED.
	wp_enqueue_script(
		'isotope.pkgd.min',
		get_parent_theme_file_uri( '/js/isotope.pkgd.min.js' ),
		array( 'jquery' ),
		false,
		true
	);

// ENQUEUE OWL JQUERY.
	wp_enqueue_script(
		'script-mCustomScrollbar',
		get_parent_theme_file_uri( '/js/jquery.mCustomScrollbar.concat.min.js' ),
		array( 'jquery' ),
		false,
		true
	);
	// ENQUEUE OWL JQUERY.
	wp_enqueue_script(
		'script-swiper-bundle',
		get_parent_theme_file_uri( '/js/swiper-bundle.min.js' ),
		array( 'jquery' ),
		false,
		true
	);



// ENQUEUE MATCHHEIGHT JQUERY.
	wp_enqueue_script(
		'matchHeight',
		get_parent_theme_file_uri( '/js/jquery.matchHeight-min.js' ),
		array( 'jquery' ),
		false,
		true
	);

	// ENQUEUE MATCHHEIGHT JQUERY.
	wp_enqueue_script(
		'lightbox',
		get_parent_theme_file_uri( '/js/lightbox.js' ),
		array( 'jquery' ),
		false,
		true
	);


	
	// ENQUEUE MATCHHEIGHT JQUERY.
	wp_enqueue_script(
		'website',
		get_parent_theme_file_uri( '/js/website.min.js' ),
		array( 'jquery' ),
		false,
		true
	);

	

	
 if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_styles_scripts' );


// ADD STYLES AND SCRIPTS






// MAIN SIDEBAR
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Main Sidebar',
		'id'            => 'main-sidebar',
		'description'   => 'This is the main sidebar for this website.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer One',
		'id'            => 'footer-one',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Two',
		'id'            => 'footer-two',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Three',
		'id'            => 'footer-three',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Four',
		'id'            => 'footer-four',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

// FOOTER
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name'          => 'Footer Five',
		'id'            => 'footer-five',
		'description'   => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}





//***************CUTOM CATAGORIS



//destination

// redux gallery
function wp_get_attachment( $attachment_id ) {
    $attachment = get_post( $attachment_id );
    return array(
       
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}

// redux gallery





//login logo

function my_login_logo_one() { 
?> 
<style type="text/css">
#login h1 a, .login h1 a {
background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
height:97px;
width:95px;



}
</style>
 <?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );


//dasbord logo

function wpb_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/admin.png) !important;
background-position: 0 0;
    background-size: cover;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}
 
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');