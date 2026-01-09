<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    
    <header>

        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/Gemini_Generated_Image_6px5j96px5j96px5_1_-removebg-preview.png" alt="logo_website" class="logo">
        <?php wp_nav_menu(['theme_location'=>'primary']); ?>

        <div class="contact">
            <span class="action-btn">
            <i class="fa-solid fa-phone"></i>
            <button>Emergency Call</button>
            </span>

            <span class="action-btn">
            <i class="fa-solid fa-calendar-days"></i>
            <button>Book Appointment</button>
            </span>

        </div>
    </header>
<main>   
   