<?php 
/**
 * Template Name: Gallery
 */
    // get the Header from header.php
    get_header();
    // display each posts on pages
    while(have_posts()): the_post();?>
    <?php 
        // import head banner 
        get_template_part("template_parts/page" , "headContent" );
        // then add to head banner some code
    ?>    
                <div class="head-content">
                    <H2 class="ltr-space">LOREM IPSUM</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, mollitia tempora placeat adipisci laudantium nisi minima! Explicabo incidunt, itaque eligendi hic expedita nisi ullam rem? Quas deserunt natus reprehenderit nihil.</p>
                </div>
            </div>
        </div>
        <main class="wrap page section">             
            <?php 
            $gallery = get_post_gallery( get_the_ID() , false );
            $galley_images_ids = explode("," , $gallery["ids"]); ?>
            <ul class="gallery-items">
                <?php 
                    $i = 0;
                    foreach($galley_images_ids as $id): 
                    $size = ($i === 1 || $i === 10) ? "portrait-gallery-box" : 'gallery-box' ;
                    $image =  wp_get_attachment_image_src( $id, "large"); 
                    $imagethumb = wp_get_attachment_image_src( $id, $size);  ?>
                    <li>
                        <a href="<?php echo $image[0];?>" data-lightbox="gallery">
                            <img src="<?php echo $imagethumb[0];?>" alt="">
                        </a>
                    </li>
                <?php  $i++ ; endforeach; ?>
            </ul>   
            <?php endwhile; ?>
        </main>  
        <style>body{background-color:#141414}</style>
    <?php 
    // get the footer from footer.php
    get_footer();
    ?>
