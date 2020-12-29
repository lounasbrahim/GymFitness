<?php 
/**
 * Template Name: Contact
 */
        // get the Header from header.php
        get_header(); 
        get_template_part("template_parts/blog" , "headContent" ); ?>
        <div class="head-content">
        </div>
    </div>
</div>
<main class="wrap wrap-contact page section">  
    <div class="row">
        <div class="contact-info-container col-lg-6">
            <div class="contact-info-social">
                <div class="contact-info">
                <p>
                    <i class="fa fa-home"></i>    
                    address: Alger, Algerie
                </p>
                <p>
                    <i class="fa fa-phone"></i>    
                    phone: +12 34 56 789
                </p>
                <p>
                    <i class="fa fa-envelope"></i>    
                    email: contact@email.com
                </p>
                </div>
                
                <div class="contact-social">
                    <ul class="social-ul">
                        <li>
                            <a class="btn" href="">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="">
                                <i class="fa fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn" href="">
                                <i class="fa fa-dribbble"></i>
                            </a>    
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="contact-form container">
                <?php the_content() ;
                ?>
            </div>
        </div>

        <div class="map-container">
        <?php 
            echo do_shortcode(get_field("shortcode_after_the_content"));
        ?>
        </div>
    </div>
</main>
    <?php 
    // get the footer from footer.php
    get_footer();
    ?>
