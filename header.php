<?php

/**
 * Header Template
 * 
 * @package proslider
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Odor+Mean+Chey&display=swap" rel="stylesheet">
</head>

<body <?php body_class() ?>>
    <?php wp_body_open() ?>
    <div class="mx-auto">
        <!-- Hero Section -->
        <header class="relative">
            <div class="bg-cover bg-center" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero.png');">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="relative z-10 p-8 text-white">
                    <div class="flex space-x-4 text-white w-full justify-between">
                        <div>
                            <div id="logo" class="sticky duration-500 flex items-center gap-5">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-pro.png" alt="<?php esc_attr_e('Logo Pro', 'proslider'); ?>">
                                <img id="logo-text" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo-slider.png" alt="<?php esc_attr_e('Logo Slider', 'proslider'); ?>">
                            </div>
                        </div>
                        <div class="flex gap-5">
                            <a href="/" class="hover:underline duration-150">Home</a>
                            <a href="/career" class="hover:underline duration-150">Career</a>
                            <a href="/contact" class="hover:underline duration-150">Contact</a>
                        </div>
                    </div>