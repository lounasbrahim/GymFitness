<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-top-area">
            <div class="container">
                <div class="row container">                    
                  
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-contact">    
                    <h2 class="footer-heading ">Contact Us</h2>
                        <ul>
				            <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i>Paris 95000, France</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:000-123-4567">01.23.45.67.89</a></li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@fitnessfactorymaine.com">gym@fitness.com</a></li>			
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-navigation">
                    <h2 class="footer-heading ">Navigation</h2>
                   <?php 
                   // display nav menu          
                   $args = array(
                        "theme_location" => "footer-menu",
                        "container" => "nav",
                        "container_class" => "main-menu"
                    );
                    wp_nav_menu($args);?>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-social">
                        <h2 class="footer-heading ">Social</h2>
                        <ul class="row container-fluid">
                    <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>				
                    <li><a href="" target="_blank"><i class="fa fa-snapchat"></i></a></li>				
                    <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>				
                         </ul>    
                    </div>
                 </div>

            </div>
        </div>
        <div class="footer-bottom-area footer-content">
            <p style="" class="footer-bottom-text">© Copyright <?php echo get_bloginfo("name")  ?> 2020. All Right Reserved.  </p>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</body>
</html>