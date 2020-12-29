        <ul class="row">
        <?php while(have_posts()): the_post();?>
        <li class="col-sm-1 col-md-6 col-lg-4 ">
        <div class="blog-image ">
        <a href="<?php  the_permalink() ?>">
          <?php 
          the_post_thumbnail( "small-gallery-box" )?>  
        </a>
        </div>
        <div class="blog-list-info">
            <div class="blog-cat">
             <?php the_category()?>
            </div>
            <a href="<?php the_permalink() ?>">
              <H3 class="blog-list-title"> <?php the_title() ?> </H3>
            </a>
            <p class="post-date-author">
            <span><?php  ?></span>
            <?php the_time( get_option( "date_format" )); ?> -
            <span>By </span>
              <a href="<?php echo get_author_posts_url(get_the_author_meta("ID"))?>">
                  <?php echo get_the_author_meta('nickname'); ?>
              </a>
            </p>
            <p class="excerpt">
              <?php the_excerpt(  )?>
            </p>

        </div>
        </li>
      <?php endwhile; ?>
    
    </ul>       