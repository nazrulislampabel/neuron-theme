<?php
if (class_exists('Attachments')){
	require_once get_theme_file_path('lib/attachments.php');
}
require_once get_theme_file_path('/inc/tgm.php');
require_once get_theme_file_path('/inc/rdx.php');
require_once get_theme_file_path('/inc/cmb2.php');
require_once get_theme_file_path('/widgets/social-icons-widget.php');

function neuron_theme_setup() {
    load_theme_textdomain( 'neuron', get_template_directory() . "/languages" );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tags' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'automatic-feed-links');
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'gallery',
        'caption',
        'comment-list'
    ) );
    add_theme_support( 'custom-logo' );
    add_image_size('neuron-square',360,250,true);
    add_image_size('neuron-small',70,70,true);
    add_image_size('neuron-large',1140,530,true);
    register_nav_menu( 'primary', esc_html__( 'Main Menu', 'neuron' ) );
    register_nav_menu( 'footer-link', esc_html__( 'Footer Menu', 'neuron' ) );
}
add_action( 'after_setup_theme', 'neuron_theme_setup' );
function neuron_theme_files() {
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css',null,'1.0');
    wp_enqueue_style( 'fonts', get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.min.css',null,'1.0');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css',null,'1.0');
    wp_enqueue_style( 'bootsnav', get_template_directory_uri().'/assets/css/bootsnav.css',null,'1.0');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',null,'1.0');
    wp_enqueue_style( 'neuron', get_template_directory_uri().'/assets/css/style.css',null,'1.0');
    wp_enqueue_style( 'neuron-css', get_stylesheet_uri());
    //wp_enqueue_script( 'jquery' );
    //wp_enqueue_script( 'browser', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array('jquery'),'1.0',null,);
    //wp_enqueue_script( 'maxcdn', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array('jquery'),'1.0',null);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'bootsnav', get_template_directory_uri().'/assets/js/bootsnav.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'ajaxchimp', get_template_directory_uri().'/assets/js/ajaxchimp.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'ajaxchimp-config', get_template_directory_uri().'/assets/js/ajaxchimp-config.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'ajaxchimp-comment', get_template_directory_uri().'/assets/js/ajax-comment.js', array('jquery'),'1.0',true);
    wp_enqueue_script( 'script', get_template_directory_uri().'/assets/js/script.js', array('jquery'),time(),true);

}
add_action( 'wp_enqueue_scripts', 'neuron_theme_files' );




function menu_add_class($attrs, $item, $args ) {
	$class = 'dropdown-toggle'; // or something based on $item
	$attrs['class'] = $class;
	return $attrs;
}
add_filter( 'nav_menu_link_attributes', 'menu_add_class', 10, 3 );
function neuron_search_from($form){
    $label = __("Search","neuron");
    $newfrom = <<< From
<input type="text" class="form-control" placeholder="{$label}">
From;
    return $newfrom;

}
add_filter("get_search_form","neuron_search_from");

function neuron_logo($ownLogo) {
    return str_replace( 'class="custom-logo-link"', 'class="navbar-brand"', $ownLogo );
}
add_filter( 'get_custom_logo', 'neuron_logo' );

// Footer Wordpress Menu modification
class Footer_Link_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $icon_html = '<i class="fa fa-angle-right"></i>'; // এখানে আপনার পছন্দের আইকন দিন

        $output .= '<li class="menu-item">';
        $output .= '<a href="' . esc_url( $item->url ) . '">'
            . $icon_html . ' ' . esc_html( $item->title ) . '</a>';
        $output .= '</li>';
    }
}
function neuron_widget(){
register_sidebar(
    array(
    'name'          => __( 'Header Social', 'neuron' ),
    'id'            => 'header_social',
    'description'   => __( 'Widgets ', 'neuron' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
));
}
add_action("widgets_init","neuron_widget");


function neuron_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'neuron_custom_excerpt_length' );


function neuron_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'neuron_excerpt_more' );

//comment section
function custom_comments_markup($comment, $args, $depth) {
    ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
        <div class="comment-inner">
            <div class="comment-avatar">
                <?php echo get_avatar($comment, 64); ?>
            </div>
            <div class="comment-section">
                <header>
                    <h2><?php comment_author(); ?></h2>
                    <span><?php echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . ' ago'; ?></span>
                </header>
                <div class="comment-content">
                    <?php comment_text(); ?>
                    <?php
                    comment_reply_link(array_merge($args, array(
                        'reply_text' => 'Replay',
                        'depth' => $depth,
                        'max_depth' => $args['max_depth']
                    )));
                    ?>
                </div>
            </div>
        </div>
    </li>
    <?php
}


