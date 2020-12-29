    <?php 
        // display the five latest posts
        for ($i = 0;$i <= 4; $i++) : 
            $post = wp_get_recent_posts()[$i]; 
            $post_ID = $post["ID"];
            $post_author_ID = $post["post_author"];
            $post_title = $post["post_title"];
            $post_excerpt = $post["post_excerpt"];
            $comment_count = $post["comment_count"];
        ?>
                <article class="">
                    <div class="blog-image ">
                    <a href="<?php  the_permalink($post_ID) ?>">
                        <?php 
                        echo get_the_post_thumbnail ($post_ID, "small-gallery-box");
                        ?>
                    </a>
                    </div>  
                    <div class="blog-list-info">
                        <div class="blog-cat">
                            <?php 
                                the_category( "", "", $post_ID);
                            ?>
                        </div>
                        <a href="<?php the_permalink($post_ID) ?>">
                            <H3 class="blog-list-title"> <?php echo $post_title ?> </H3>
                        </a>
                        <p class="post-date-author">
                        <span><?php  ?></span>
                        <?php echo get_post_time( get_option( "date_format" ), "" , $post_ID , "" );
                        ?> -
                        <span>By </span>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta("ID", $post_author_ID))?>">
                                <?php echo get_the_author_meta("nickname", $post_author_ID); ?>
                            </a>
                        </p>
                        <p class="excerpt">
                            <?php echo $post_excerpt?>
                        </p>

                    </div>
                </article>
                <?php endfor; ?>    

