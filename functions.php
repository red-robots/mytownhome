<?php 
// Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {
	if (!is_admin()) {
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', false, '1.7.2', true);
		wp_enqueue_script('jquery');
		
		
		
		// Lightbox/Colorbox scripts...
		wp_register_script(
			'vendors',
			get_bloginfo('template_directory') . '/assets/js/vendors.js',
			array('jquery'),'1.0', true  );
		wp_enqueue_script('vendors');

		// Custom Theme scripts...
		wp_register_script(
			'custom',
			get_bloginfo('template_directory') . '/assets/js/custom.js',
			array('jquery'),'1.0', true  );
		wp_enqueue_script('custom');
		
		// Homepage slider 'flexslider' scripts...
        // wp_register_script(
        //     'flexslider',
        //     get_bloginfo('template_directory') . '/js/flexslider.js',
        //     array('jquery') );
        // wp_enqueue_script('flexslider');
		
		// Custom Theme scripts 1
		wp_register_script('cloudscript', 'https://c1203812.cdn.cloudfiles.rackspacecloud.com/jquery.autocomplete.min.js');
		wp_enqueue_script('cloudscript');
		  
		// Custom Theme scripts 2...
		wp_register_script('localdata', 'https://img.davisfarrell.com/js/localdata.js');
		wp_enqueue_script('localdata');
		  
		// Custom Theme scripts 3...
		wp_register_script('autosub', 'https://img.davisfarrell.com/js/autosub_so.js');
		wp_enqueue_script('autosub');
		
		// Google Map...
		wp_register_script(
			'googlemap',
			get_bloginfo('template_directory') . '/js/google-map.js',
			array('jquery'), '1.0' );
		wp_enqueue_script('googlemap');
	
	}
}
 
add_action('wp_enqueue_scripts', 'ineedmyjava');


// This theme uses wp_nav_menu() in one location.
register_nav_menu( 'primary', __( 'Primary Menu', 'menu1' ) );
register_nav_menu( 'secondary', __( 'Sitemap Menu', 'menu2' ) );


// add a favicon from your themes images folder
function mytheme_favicon() { ?> <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/favicon.png" > <?php } add_action('wp_head', 'mytheme_favicon');



// Pagination
function pagi_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}



if( function_exists('acf_add_options_page') ) { acf_add_options_page(); }




function custom_field_excerpt() {
	global $post;
	$author = get_queried_object();
	$user_ID = $author->ID;
	$text = get_field('custom_bio', 'user_'.$user_ID); 
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 40; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	 return apply_filters('the_excerpt', $text);
}



add_action( 'pre_user_query', 'my_random_user_query' );

function my_random_user_query( $class ) {
    if( 'rand' == $class->query_vars['orderby'] )
        $class->query_orderby = str_replace( 'user_login', 'RAND()', $class->query_orderby );

    return $class;
}



// Add Thumbnail Image Supoort
// Must have to do featured images.
add_theme_support( 'post-thumbnails' ); 
 add_image_size( 'portsmall', 200, 9999 );
// add_image_size( 'homepage', 9999, 613 );
// add_image_size( 'communities-main', 267, 218, true );
//add_image_size( 'communities-single', 490, 293, true );
add_image_size( 'communities-gallery', 310, 205, true );
// add_image_size( 'agent', 186, 217, true );
// keep
 //add_image_size( 'home-hero-slider', 1024, 500, true );
 add_image_size( 'agent_feed', 350, 451, true );
 // add_image_size( 'agent_feed', 184, 237, true );
add_image_size( 'single_agent', 290, 433, true );
// add_image_size( 'single_community_agent', 197, 273, true );
add_image_size( 'office_photo', 205, 223, true );



function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}



// Changing WordPress admin Menu Names
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog';
    $submenu['edit.php'][5][0] = 'Blog';
    $submenu['edit.php'][10][0] = 'Add a Blog Post';
   // $submenu['edit.php'][15][0] = 'Status'; // Change name for categories
    //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Blog';
        $labels->singular_name = 'Blog';
        $labels->add_new = 'Add a Blog Post';
        $labels->add_new_item = 'Add a Blog Post';
        $labels->edit_item = 'Edit Blog';
        $labels->new_item = 'Blog';
        $labels->view_item = 'View Blog';
        $labels->search_items = 'Search Blog';
        $labels->not_found = 'No posts found';
        $labels->not_found_in_trash = 'No posts found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );







/*
Plugin Name: Page Excerpt

Description: Adds support for page excerpts - uses WordPress code

*/
add_action( 'edit_page_form', 'pe_add_box');
add_action('init', 'pe_init');
function pe_init() {
	if(function_exists("add_post_type_support")) //support 3.1 and greater
	{add_post_type_support( 'page', 'excerpt' );}
}
function pe_page_excerpt_meta_box($post) {
?>
<label class="hidden" for="excerpt"><?php _e('Excerpt hey') ?></label><textarea rows="1" cols="40" name="excerpt" tabindex="6" id="excerpt"><?php echo $post->post_excerpt ?></textarea>
<p><?php _e('Excerpt go here..........'); ?></p>
<?php
}
function pe_add_box()
{
	if(!function_exists("add_post_type_support")) //legacy
	{		add_meta_box('postexcerpt', __('Page Excerpt'), 'pe_page_excerpt_meta_box', 'page', 'advanced', 'core');}
}



 // Limit the excerpt without truncating the last word.
// use like this > echo get_excerpt(100);
function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'... <a href="'.$permalink.'">read more</a>';
  return $excerpt;
}



/*-------------------------------------
	Custom client login, link and title.
---------------------------------------*/
function my_login_logo() { ?>
<style type="text/css">
  body.login div#login h1 a {
  	background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/my-townhome-logo.png);
  	background-size: 362px 103px;
  	width: 362px;
  	height: 103px;
  }
  body.login, body.login form {
    background-color: #000;
  }
  .wp-core-ui .button-primary {
    background-color: #CC3127 !important;
    border: 1px solid #CC3127 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return '';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' ); 

	

// Vcards
 add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
 // add your extension to the array
 $existing_mimes['vcf'] = 'text/x-vcard';
 return $existing_mimes;
}

/* Custom Post Types */
 
add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Slides
  
     $labels = array(
	'name' => _x('Communities', 'post type general name'),
    'singular_name' => _x('Community', 'post type singular name'),
    'add_new' => _x('Add New', 'Community'),
    'add_new_item' => __('Add New Community'),
    'edit_item' => __('Edit Communities'),
    'new_item' => __('New Community'),
    'view_item' => __('View Communities'),
    'search_items' => __('Search Communities'),
    'not_found' =>  __('No Communities found'),
    'not_found_in_trash' => __('No Communities found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Communities'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('community',$args); // name used in query
  
  // Add more between here
  
  // and here
  
  } // close custom post type

  /*
##############################################
	Custom Taxonomies
*/
add_action( 'init', 'build_taxonomies', 0 );
 
function build_taxonomies() {
// cusotm tax
    register_taxonomy( 'neighborhood', 'community',
	array( 
   'hierarchical' => true, // true = acts like categories false = acts like tags
   'label' => 'Neighborhoods', 
   'query_var' => true, 
   'rewrite' => true ,
   'show_admin_column' => true,
   'public' => true,
   'rewrite' => array( 'slug' => 'neighborhood' ),
   '_builtin' => true
   ) );
   register_taxonomy( 'price', 'community',
	array( 
   'hierarchical' => true, // true = acts like categories false = acts like tags
   'label' => 'Price', 
   'query_var' => true, 
   'rewrite' => true ,
   'show_admin_column' => true,
   'public' => true,
   'rewrite' => array( 'slug' => 'price' ),
   '_builtin' => true
   ) );
   register_taxonomy( 'type', 'community',
	array( 
   'hierarchical' => true, // true = acts like categories false = acts like tags
   'label' => 'Type', 
   'query_var' => true, 
   'rewrite' => true ,
   'show_admin_column' => true,
   'public' => true,
   'rewrite' => array( 'slug' => 'type' ),
   '_builtin' => true
   ) );
   register_taxonomy( 'virtual-tour', 'community',
	array( 
   'hierarchical' => true, // true = acts like categories false = acts like tags
   'label' => 'Virtual Tour', 
   'query_var' => true, 
   'rewrite' => true ,
   'show_admin_column' => true,
   'public' => true,
   'rewrite' => array( 'slug' => 'virtual-tour' ),
   '_builtin' => true
   ) );
	
} // End build taxonomies

 /*-------------------------------------
  Move Yoast to the Bottom
---------------------------------------*/
function yoasttobottom() {
  return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

remove_action('wp_print_styles', 'cc_tabby_css', 30);

function my_acf_init() {
  //acf_update_setting('google_api_key', 'AIzaSyCifsjitKgXZEl08R8JwrKFkpacFZOZzdg');
  acf_update_setting('google_api_key', 'AIzaSyDNhlDNYBZaM_GpXoWr9MDBO9mc68VP5js');
}

add_action('acf/init', 'my_acf_init');
