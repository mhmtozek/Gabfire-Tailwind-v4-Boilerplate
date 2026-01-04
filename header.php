<?php
/**
 * Header for Gabfire WP theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="bg-black text-white text-center py-1">
    <p class="text-sm tracking-wide">Schedule an appointment and let's discuss your project... </p>
</header>