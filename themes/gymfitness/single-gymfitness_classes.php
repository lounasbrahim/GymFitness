<?php 
    // get the Header from header.php
    get_header(); 
    // import repeated content
    while(have_posts()): the_post();
    get_template_part("template_parts/page" , "headContent" );
    ?>
      </div>
    </div>
    <main class="container page single-class with-sidebar">             
                <div class="page-content">
                        <h2 class="sidebarhead"><?php the_title() ?></h2>
                        <?php // display the content
                        get_template_part("template_parts/class" , "time" );
                        the_content();
                        the_post_thumbnail("blog-single-box");
                            endwhile; ?>
                </div>
                <aside class="sidebar class-sidebar">
                        <?php 
                        // get the sidebar from sidebar.php
                        get_sidebar() ?>
                </aside>
        </main>
        <style>body{background-color:#141414}</style>
    <?php 
    // get the footer from footer.php
    get_footer();

    ?>


        
