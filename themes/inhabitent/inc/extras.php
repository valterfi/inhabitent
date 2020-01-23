<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function wpb_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(/wp-content/uploads/2020/01/inhabitent-logo-full.jpg);
        height:100px;
        width:300px;
        background-size: 300px 100px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

function loginpage_custom_link() {
	return get_home_url();
}

add_filter('login_headerurl','loginpage_custom_link');

// function add_search_form($items, $args) {
//     if( $args->theme_location == 'primary' ){
//     $items .= '<li class="menu-item">'
//             . '<form role="search" method="get" class="search-form" action="'.home_url( '/' ).'">'
//             . '<label>'
//             . '<span class="screen-reader-text">' . _x( 'Search for:', 'label' ) . '</span>'
//             . '<input type="search" class="search-field" placeholder="' . esc_attr_x( 'Search …', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />'
//             . '</label>'
//             . '<input type="submit" class="search-submit" value="'. esc_attr_x('Search', 'submit button') .'" />'
//             . '</form>'
//             . '</li>';
//     }
//   return $items;
// }

function add_search_form($items, $args) {
    if( $args->theme_location == 'primary' )
    $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" value="search" name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';
return $items;
}

add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

