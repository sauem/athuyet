<?php

define("ASSET", get_template_directory_uri() . '/assets/theme');
define("PART", get_template_directory_uri() . '/parts');

function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
function add_menu_list_item_class($classes, $item, $args)
{
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
function replace_submenu_class($menu)
{
    $menu = preg_replace('/ class="sub-menu"/', '/ class="dropdown-menu" /', $menu);
    return $menu;
}

add_filter('wp_nav_menu', 'replace_submenu_class');

function postedTime()
{
    return human_time_diff(get_the_time('U'), current_time('timestamp')) . ' trước';
}

function getToDay()
{
    $date = getdate(time());
    switch ($date['weekday']) {
        case 'Tuesday';
            $name = 'Thứ ba';
            break;
        case 'Wednesday';
            $name = 'Thứ tư';
            break;

        case 'Thursday';
            $name = 'Thứ năm';
            break;

        case 'Friday';
            $name = 'Thứ sáu';
            break;

        case 'Saturday';
            $name = 'Thứ bảy';
            break;

        case 'Sunday';
            $name = 'Chủ nhật';
            break;

        default:
            $name = "Thứ hai";
            break;
    }
    return $name . ", {$date['mday']}/{$date['mon']}/{$date['year']}";
}

function setting($key)
{
    return get_post_meta(47, $key, true);
}
