<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <title>test </title>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <!-- <link rel="stylesheet" href="slider\styles\style.css"> -->

        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://kit.fontawesome.com/ca6e5d8187.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&family=Montserrat:wght@100..900&display=swap" rel="stylesheet">



<?php wp_head(); ?>
    </head>
<body>
    <header>
        <div class="nav-wrapper">
        
            <div class="logo-container">
            <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/resources-site-logo.png" alt="">
            </a>
            <div class="web-title"><div>Product</div><div>Resource Hub</div></div>
            </div>
            
        <?php
        wp_nav_menu(
            
            array(

                'theme_location' => 'top-menu',
                'menu_class' => 'top-bar-nav',
            )

            
        );
        ?>
         <div class="search-bar">
            <!-- needs to be changed to font awesome -->
         <img src="<?php echo get_template_directory_uri(); ?>/images/search.png" alt="">
        </div>
        </div>
       
</header>
    
    
