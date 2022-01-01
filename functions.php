<?php

flush_rewrite_rules(true);
if (site_url() == "http://sudip.local") {
  define("VERSION", time());
} else {
  define("VERSION", wp_get_theme()->get("Version"));
}

require_once get_theme_file_path('/inc/tgm.php');
require_once get_theme_file_path('/inc/cptui.php');
require_once get_theme_file_path('/inc/acf-mb.php');
require_once get_theme_file_path('/inc/redux-option.php');



function unique_supports()
{
  load_theme_textdomain("unique");
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
  add_theme_support("html5", array('search-form', 'comment-list'));
  add_theme_support("custom-logo");
  add_theme_support('automatic-feed-links');
  add_theme_support('html5', array('search-form', 'comment-list'));
  add_editor_style("/assets/css/editor-style.css");
  register_nav_menu("topmenu", __("Main Menu", "unique"));
  add_image_size("hompage_thumb", 540, 360, array("center", "center"));
  add_image_size("blog_thumb", 1100, 740, array("center", "center"));
  add_image_size("testimonial_thumb", 465, 497, array("center", "center"));
  if (!isset($content_width)) {
    $content_width = 900;
  }
}

add_action('after_setup_theme', 'unique_supports');



require_once get_theme_file_path('/inc/enq.php');

require get_theme_file_path("/template-parts/homepage/common/title-part.php");


function get_opt_value($key, $default = '')
{
  if (class_exists('Redux')) {
    return Redux::get_option('unique_opt', $key, $default);
  } else {
    return $default;
  }
}
