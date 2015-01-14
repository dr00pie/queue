<?php
/*
Theme Name: Queue Theme
Theme URI: http://missioncontrol.aspectswebdesign.com/queuetheme
Author: AspectsWebDesign
Author URI: http://www.aspectswebdesign.com
Description: Queue
Version: 1.0
License: GNU General Public License
License URI: http://www.gnu.org/licenses/gpl.html
*/

add_action( 'after_setup_theme', 'queue_setup' );
function queue_setup()
{

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-thumbnails' );

global $content_width;
if ( ! isset( $content_width ) ) $content_width = 1080;
}

/*************************************************************************************
 *	Register Menus
 *************************************************************************************/
 
add_action( 'init', 'queue_menus' );
function queue_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Top Menu' ),
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
    )
  );
}

add_action( 'wp_enqueue_scripts', 'queue_load_scripts' );
function queue_load_scripts()
{
wp_enqueue_script( 'jquery' );
}

add_action( 'comment_form_before', 'queue_enqueue_comment_reply_script' );
function queue_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}

add_filter( 'the_title', 'queue_title' );
function queue_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}

add_filter( 'wp_title', 'queue_filter_wp_title' );
function queue_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}

/**
 * Register three widget areas for main page.
 *
 *
 */
add_action( 'widgets_init', 'queue_main_widgets_init' );
function queue_main_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'First Main Widget Area', 'queue' ),
		'id'            => 'widget-1',
		'description'   => __( 'First widget area for the main page', 'queue' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Second Main Widget Area', 'queue' ),
		'id'            => 'widget-2',
		'description'   => __( 'Second widget area for the main page', 'queue' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Third Main Widget Area', 'queue' ),
		'id'            => 'widget-3',
		'description'   => __( 'Third widget area for the main page', 'queue' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

// Register Right Sidebar
function sidebar_right() {

	$args = array(
		'id'            => 'SidebarR',
		'name'          => __( 'sidebar-right', 'text_domain' ),
		'description'   => __( 'This is the right sidebar', 'text_domain' ),
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'sidebar_right' );

// Register Left Sidebar
function sidebar_left() {

	$args = array(
		'id'            => 'sidebarL',
		'name'          => __( 'sidebar-left', 'text_domain' ),
		'description'   => __( 'The left sidebar', 'text_domain' ),
		'class'         => 'sidebar-left',
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'sidebar_left' );

function queue_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}

add_filter( 'get_comments_number', 'queue_comments_number' );
function queue_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
