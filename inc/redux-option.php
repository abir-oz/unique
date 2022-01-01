<?php


if (!class_exists('Redux')) {
    return;
}

unset(Redux_Core::$server['REMOTE_ADDR']);

$opt_name = 'unique_opt';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name' => $theme->get('Name'),
    'display_version' => $theme->get('Version'),
    'menu_title' => esc_html__('Unique Fufillment', 'unique'),
    'customizer' => true,
    'dev_mode'   => false,
);

Redux::set_args($opt_name, $args);

Redux::set_section($opt_name, array(
    'title' => esc_html__('Footer', 'unique'),
    'id' => 'basic',
    'desc' => esc_html__('Footer Description.', 'unique'),
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id' => 'opt-details',
            'type' => 'editor',
            'title' => esc_html__('About Unique', 'unique'),
            'desc' => esc_html__('About Unique', 'unique'),
            'hint' => array(
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>',
            ),
            'default' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>'
        )
    ),
));
