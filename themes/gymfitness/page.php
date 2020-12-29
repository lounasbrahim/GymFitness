<?php 
    // get the Header from header.php
    get_header();
    // display each posts on pages
    while(have_posts()): the_post();?>
    <?php 
        // import head banner 
        get_template_part("template_parts/page" , "headContent" );
        // then add to head banner some code
    ?>
      </div>
    </div>
        <main class="container page section">             
        <?php 
        // display content
        the_content();
         endwhile; ?>
        </main>

    <?php 
    // get the footer from footer.php
    get_footer();
    ?>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt expedita blanditiis cum sequi. Voluptate officiis qui, porro sed dolor accusantium velit aperiam sequi. Debitis explicabo ex incidunt odit quidem id!
