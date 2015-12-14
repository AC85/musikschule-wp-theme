<?php

function nav_breadcrumb() {

    $delimiter = '&raquo;';
    $home = 'Startseite ';
    $before = '<span class="current-page">';
    $after = '</span>';

    if ( !is_home() && !is_front_page() || is_paged() ) {

        echo '<nav class="breadcrumb">';

        global $post;
        $homeLink = get_bloginfo('url');
        echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

        if ( is_category()) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
            echo $before . single_cat_title('', false) . $after;

        } elseif ( is_day() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;

        } elseif ( is_month() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;

        } elseif ( is_year() ) {
            echo $before . get_the_time('Y') . $after;

        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                echo $before . get_the_title() . $after;
            }

        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name  . $after;


        } elseif ( is_attachment() ) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;

        } elseif ( is_page() && !$post->post_parent ) {
            echo $before . get_the_title() . $after;

        } elseif ( is_page() && $post->post_parent ) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;

        } elseif ( is_search() ) {
            echo $before . 'Ergebnisse für Ihre Suche nach "' . get_search_query() . '"' . $after;

        } elseif ( is_tag() ) {
            echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

        } elseif ( is_tag() ) {
            echo $before . 'Beiträge mit dem Schlagwort "' . single_tag_title('', false) . '"' . $after;

        } elseif ( is_404() ) {
            echo $before . 'Fehler 404' . $after;
        }

        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
            echo ': ' . __('Seite') . ' ' . get_query_var('paged');
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
        }

        echo '</nav>';

    }
}

function wpbootstrap_scripts_with_jquery()
{
    // Register the script like this for a theme:
    wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


// Anzahl der Wörter die in der Übersichtsseite angezeigt werden bis diese abgeschnitten werden.
function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//Ausgabe [...] oder anderes
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

require_once('wp_bootstrap_navwalker.php');

add_theme_support( 'post-thumbnails' );

function mytheme_setup() {

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Havixbeck' ),
    ) );
    register_nav_menus( array(
        'side' => __( 'Angebot Menu', 'Havixbeck_Sidebar' ),
    ) );
    register_nav_menus( array(
        'side_2' => __( 'Anmeldung Menu', 'Havixbeck_Sidebar' ),
    ) );

}
add_action( 'after_setup_theme', 'mytheme_setup' );


function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

add_action( 'init', 'create_post_type' );

function create_post_type() {
    register_post_type( 'Instrumente',
        array(
            'labels' => array(
                'name' => __( 'Instrumente' ),
                'singular_name' => __( 'Instrumente' )),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => '/musikschule/angebot/instrumente','with_front' => FALSE),
            'parent_item'                => null,

        )
    );
    register_post_type( 'Dozenten',
        array(
            'labels' => array(
                'name' => __( 'Dozenten' ),
                'singular_name' => __( 'Dozenten' )),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => '/musikschule/angebot/dozenten-a-z','with_front' => FALSE)
        )
    );
    register_post_type( 'Faecher',
        array(
            'labels' => array(
                'name' => __( 'Fächer' ),
                'singular_name' => __( 'Faecher' )),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => '/musikschule/angebot/faecher','with_front' => FALSE)

        )
    );
    register_post_type( 'Ensembles',
        array(
            'labels' => array(
                'name' => __( 'Ensembles' ),
                'singular_name' => __( 'Ensembles' )),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => '/musikschule/angebot/ensembles','with_front' => FALSE)

        )
    );
    register_post_type( 'Elementarausbildung',
        array(
            'labels' => array(
                'name' => __( 'Elementarausbildung' ),
                'singular_name' => __( 'Elementarausbildung' )),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => '/musikschule/angebot/elementarausbildung','with_front' => FALSE)

        )
    );
}
add_action( 'init', 'create_post_type', 0 );
flush_rewrite_rules();



?>