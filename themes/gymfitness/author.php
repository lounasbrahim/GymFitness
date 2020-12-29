
<?php 
/**
 * Template Name: Blog
 */
    // get the Header from header.php
    get_header(); 
    get_template_part("template_parts/blog" , "headContent" );
    ?>
    <main class="wrap page section">  
            <H2 class="blog-title" style="padding-top:60px"><?php echo get_the_author_meta('nickname') . "'s Articles"; ?> </H2>
            <hr class="hr-short">
            <?php  get_template_part("template_parts/blog" , "articles" ); ?> 
    </main>    
    <?php 
    // get the footer from footer.php
    get_footer();
    ?>
