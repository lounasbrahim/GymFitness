
<?php 
/**
 * Template Name: Blog
 */
    // get the Header from header.php
          get_header(); 
          get_template_part("template_parts/blog" , "headContent" ); ?>
    <main class="wrap page section">  
       <?php  get_template_part("template_parts/blog" , "articles" ); ?> 
    </main>
    <?php 
    // get the footer from footer.php
    get_footer();
    ?>
