<?php
function gabfire_2026_assets() {
    $css_path = get_template_directory() . '/dist/css/style.css';
    $css_uri  = get_template_directory_uri() . '/dist/css/style.css';

    if (file_exists($css_path)) {
        wp_enqueue_style(
            'gabfire-2026-style',
            $css_uri,
            [],
            filemtime($css_path)
        );
    }
}
add_action('wp_enqueue_scripts', 'gabfire_2026_assets');