<?php

// Adding code before closing head tag

add_action('wp_head', function () {
  if (get_theme_mod('header-scripts-settings')) :
    echo get_theme_mod('header-scripts-settings');
  endif;
});

// Adding code before closing body tag

add_action('wp_footer', function () {
  if (get_theme_mod('footer-scripts-settings')) :
    echo get_theme_mod('footer-scripts-settings');
  endif;
});

/* Custom Theme Settings funcitons.php */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

register_nav_menus(array(
  'primary' => __('Primary Menu'),
));

add_theme_support('post-thumbnails');
//add_image_size('large-preview', 550, 365, true);\

// blocks connect
include 'inc/blocks/blocks-connect.php';

// shortcodes connect
// include 'inc/shortcodes.php';

// theme custom settings
include 'inc/settings.php';
include 'inc/customizer-theme-settings.php';
include 'inc/assets.php';
include 'inc/disable-emojis.php';
include 'inc/features.php';

require_once get_stylesheet_directory() . '/inc/navigation.php';


function toolset_fix_custom_posts_per_page($query_string)
{
  if (is_admin() || !is_array($query_string))
    return $query_string;
  $post_per_page = get_option('posts_per_page');
  $post_types_to_fix = array(
    array(
      'post_type' => 'testimonial',
      'posts_per_page' => 30
    ),
    // add another if you want
    /*
      array(
          'post_type' => 'movie',
          'posts_per_page' => 2
      ),
      */
  );

  foreach ($post_types_to_fix as $fix) {
    if (
      array_key_exists('post_type', $query_string)
      && $query_string['post_type'] == $fix['post_type']
    ) {
      $query_string['posts_per_page'] = $fix['posts_per_page'];
      return $query_string;
    }
  }

  return $query_string;
}

add_filter('request', 'toolset_fix_custom_posts_per_page');

function add_paragraph_tags_to_acf_wysiwyg_content($value, $post_id, $field)
{
  if ($field['type'] === 'wysiwyg') {
    $blocks = preg_split('/\n\s*\n/', $value);
    $blocks = array_filter($blocks);
    $formatted_content = '';
    foreach ($blocks as $block) {
      if (!preg_match('/^<p>/', $block)) {
        $formatted_content .= '<p>' . $block . '</p>';
      } else {
        $formatted_content .= $block;
      }
    }
    return $formatted_content;
  }

  return $value;
}
add_filter('acf/format_value', 'add_paragraph_tags_to_acf_wysiwyg_content', 10, 3);

add_filter('genesis_pre_load_favicon', 'custom_favicon');
function custom_favicon($favicon_url)
{
  return '' . get_stylesheet_directory_uri() . '/assets/images/favicon/cropped-fab-180x180.png';
}

function year_shortcode()
{
  $year = date_i18n('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');
