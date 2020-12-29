<! --/*
* Template Name: Page with sidebar
*/ ! -->
<?php 
    // get the Header from header.php
    get_header();
    // display each posts on pages
    while(have_posts()): the_post();
    // import repeated content
    get_template_part("template_parts/page" , "headContent" );
    ?>
        <main class="container page section with-sidebar">             
                <div class="page-content">
                        <?php 
                        // dsiplay the content
                        the_content();
                        endwhile; ?>
                </div>
                <aside class="sidebar">
                        <?php 
                        // gey the sidebar from sidebar.php
                        get_sidebar() ?>
                </aside>
        </main>

<?php 
    get_footer() ?>

