<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body <?php body_class(); ?>>
    <header>
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/Gemini_Generated_Image_6px5j96px5j96px5_1_-removebg-preview.png" alt="logo_website" class="logo">
        <?php wp_nav_menu(['theme_location'=>'primary']); ?>
    </header>
<main>