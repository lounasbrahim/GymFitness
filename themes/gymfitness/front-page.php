<?php 
    // get the Header from header.php
    get_header(); 
?>
    <section 
    class="hero-section" 
    style="background-image: url('<?php  echo ( wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), "full"));  ?>')">
        <div class="hero-container">
            <div class="hero-tagline-div">
                <h2 class="hero-tagline-title">
                    <?php echo get_field("hero_tagline");?>
                </h2>
            </div>
            <div class="hero-content-div">
                <h1 class="hero-content-title">
                    <?php  echo get_field("hero-content");?>
                </h1>
            </div>
            <div class="hero-button-div">
                <button class="hero-button">
                    <?php  echo get_field("hero_button_text")?>
                </button>
            </div>
        </div>
    </section>
    <section class="services-section">
        <div class="services-container container row">
           
            <div class="service-content col-md-4">
                <div class="service-icon-title">
                    <div class="service-icon">
                        <img class="service-icon-img"  src="<?php echo get_field("first_service_icon") ?>" alt="first service">
                    </div>
                    <div class="service-title-div">
                        <h2 class="service-title">
                            <?php echo get_field("first_service_title");?>
                        </h2>
                    </div>
                </div>
                <div class="service-text">
                    <p>
                        <?php  echo get_field("first_service_text"); ?>
                    </p>
                </div>
            </div>

            <div class="service-content col-md-4">
                <div class="service-icon-title">
                    <div class="service-icon">
                        <img class="service-icon-img"  src="<?php echo get_field("second_service_icon") ?>" alt="second service">
                    </div>
                    <div class="service-title-div">
                        <h2 class="service-title">
                            <?php echo get_field("second_service_title");?>
                        </h2>
                    </div>
                </div>
                <div class="service-text">
                    <p>
                        <?php  echo get_field("second_service_text"); ?>
                    </p>
                </div>
            </div>


            <div class="service-content col-md-4">
                <div class="service-icon-title">
                    <div class="service-icon">
                        <img class="service-icon-img"  src="<?php echo get_field("third_service_icon") ?>" alt="third service">
                    </div>
                    <div class="service-title-div">
                        <h2 class="service-title">
                            <?php echo get_field("third_service_title");?>
                        </h2>
                    </div>
                </div>
                <div class="service-text">
                    <p>
                        <?php  echo get_field("third_service_text"); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="areas-section">
        <ul class="areas-container">
            
            <li class="area">
                <img src="<?php echo wp_get_attachment_image_src( get_field("area_1_image"), "blog-single-box" )[0] ?>" alt="">
                <p>
                <?php echo get_field("area_1_name"); ?>
                </p>
            </li>

            <li class="area">
                <img src="<?php echo wp_get_attachment_image_src( get_field("area_2_image"), "blog-single-box" )[0] ?>" alt="">
                <p>
                <?php echo get_field("area_2_name"); ?>
                </p>
            </li>

            <li class="area">
                <img src="<?php echo wp_get_attachment_image_src( get_field("area_3_image"), "blog-single-box" )[0] ?>" alt="">
                <p>
                <?php echo get_field("area_3_name"); ?>
                </p>
            </li>

            <li class="area">
                <img src="<?php echo wp_get_attachment_image_src( get_field("area_4_image"), "blog-single-box" )[0] ?>" alt="">
                <p>
                <?php echo get_field("area_4_name"); ?>
                </p>
            </li>

        </ul>
</section>

<section class="our-classes">
    <div class="latest-heading wrap">
        <div class="latest-heading-inner container">
            <h1 class="blog-title latest-blog-title">Our Classes</h1>
            <p class="latest-blog-subtitle">Check our classes</p>
        </div>
        <div class="">
                <?php  gymfintess_classes_list() ?>   
        </div>
    </div>
</section>

<section class="testimonials-section">
    <div class="testimonials-container">
        <div class="testimonials-inner wrap">
            <div class="owl-carousel testimonials">

        <?php 
            $args = array(
                "post_type" => "gym_testimonials",
                "post_not_in" => array( $post->ID )
            );
            $testimonials = new WP_Query($args);

            while ($testimonials->have_posts()): $testimonials->the_post(  ); ?>
            <div class="testimonials-inner-content">
                    <div class="testimonials-image-div">
                    <?php the_post_thumbnail("thumbnail") ?>
                    </div>
                    <div class="testimonials-content-div">
                        <p><?php  the_content()?></p>
                    </div>
                    <div class="testimonials-name-div">
                        <p><?php  the_title()?></p>
                    </div>
            </div>
            <?php endwhile; wp_reset_postdata( )?>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog">
    <div class="latest-heading">
        <div class="latest-heading-inner container">
            <h1 class="blog-title latest-blog-title">Latest From Blog</h1>
            <p class="latest-blog-subtitle">News, Reviews, Tips & Tricks</p>
        </div>
        <div class="wrap">
            <div class="owl-carousel">
               <?php get_template_part("template_parts/home" , "articles" )?>
            </div>
        </div>
    </div>
</section>

<?php 
    // get the footer from footer.php
    get_footer();
?>