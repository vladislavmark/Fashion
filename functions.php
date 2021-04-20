<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('widgets_init', 'register_my_widgets');
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);

$another_args = array(
    'default-color'      => 'fff',
    'default-image'      => get_template_directory_uri() . '/assets/image/image-here.jpeg',
   
    'default-repeat'     => 'no-repeat',     
);
add_theme_support( 'custom-background', $another_args );

function true_load_posts()
{

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    // обычно лучше использовать WP_Query, но не здесь
    query_posts($args);
    // если посты есть
    if (have_posts()) :

        // запускаем цикл
        while (have_posts()) : the_post();

            get_template_part('post-templates/post', get_post_format());

        endwhile;

    endif;
    die();
}


add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');




function my_navigation_template($template, $class)
{
    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}


function register_my_widgets()
{
    register_sidebar(array(
        'name'          => 'Right Sidebar',
        'id'            => "right_sidebar",
        'description'   => 'Описание сайдбара',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="about text-a">',
        'after_title'   => "</h5>\n"
    ));
}

function theme_register_nav_menu()
{
    register_nav_menu('top', 'Primary Menu');
    register_nav_menu('bottom', 'Bottom Menu');
    add_theme_support('post-thumbnails', array('post', 'page'));
    add_theme_support('post-formats', array('aside'));
    add_image_size('post_thumb', 370, 280, true);
    add_image_size('post_sidebar', 270, 160, true);
    add_image_size('post_big', 770, 349, true);
}

function style_theme()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri());
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/style/reset.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/style/style.css');
    wp_enqueue_style('slider', get_template_directory_uri() . '/assets/style/slider.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/style/responsive.css');
}

function scripts_theme()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('jquery');

    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', ['jquery'], null, true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', null, null, true);

    wp_enqueue_script('jquery'); // скорее всего он уже будет подключен, это на всякий случай
    wp_enqueue_script('true_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery'), time());
}
