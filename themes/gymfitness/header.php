<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM</title>
    <?php 
    // print scripts or data in head tag
    wp_head() ; ?>
</head>
<body>
    <header class="site-header">
        <div class="navigation-bar navigation-bar-container">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img 
                    src=" <?php echo get_template_directory_uri() . '/img/logo.png' ?>" 
                    alt="logo" 
                    style="width:70px" >
                </a>
            </div>
            <div class="">
                <?php 
                    // display nav menu
                    $args = array(
                        'theme_location' => "main-menu" , 
                        'container' => "nav",
                        'container_class' => "main-menu"
                    );
                    wp_nav_menu($args) 
                ?>
            </div>
        </div>
        
  
    </header>    
