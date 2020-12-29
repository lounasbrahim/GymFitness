<div 
    class="head-banner" 
    style="background: no-repeat 0%/cover url('<?php echo get_template_directory_uri(  ). "/img/header-bg-4.jpg"?>')">
    <div class="page-title-div">
                <H1 class="page-title"> 
                    <span class="page-title-bg">
                        
                    <?php 
                        // display the page Title                    
                        echo "Author";     
                    ?> 
                    </span>
                </H1>
                <div class="author-head-info"> 
                <div class="single-meta-info">
						<div class="about-image">
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
						<?php echo get_avatar(get_the_author_meta("ID")) ?>	
						</a>
						
						</div>
						<div class="about-info">
							<a class="about-nickname" href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>">
									<?php echo get_the_author_meta('nickname'); ?>
							</a>
						<p class="about-role"><?php echo get_the_author_meta('last_name'); ?></p>
						<p class="about-desc"> <?php echo get_the_author_meta('description'); ?></p>
							
						</div>
					</div>
                </div>
  </div>
</div>  