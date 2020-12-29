<?php 
    // get the Header from header.php
    get_header();
    // display each posts on pages
    while(have_posts()): the_post();?>
    <?php 
        // import head banner 
// check if post has thumbnail then display it
if (has_post_thumbnail()): ?> 
        <div 
        class="head-banner" 
        style="background: no-repeat 0%/cover url('<?php echo ( wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ), "header-banner" )); ?>')">
<?php 
// else display plain color background
else: ?>
        <div class="head-banner no-thumbnail" style="background-color: #232323">
<?php endif; ?>
    </div>
    <main class="wrap" style="padding-left:3rem">    
    <div class="with-sidebar">
        <div class="article-blog">
            <div class="blog-single-title-div ">
                    <H1 class="blog-title">
                        <?php 
                            // display the page Title                    
                            the_title() ; ?> 
                    </H1>  
                    <div class="blog-cat">
                        <?php the_category()?>
                    </div>
            </div>
            <div class="blog-article-content">
                <div class="single-meta-info">
                    <div class="single-blog-image">
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( "ID" ) ) ?>">
                            <?php  echo get_avatar( $author->ID )?>
                        </a>
                    </div>
                    <div class="single-blog-info">
                        <p class="single-blog-author">
                            <span>by: </span>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta("ID"))?>">
                                <?php echo get_the_author_meta('nickname'); ?>
                            </a>
                            </p>
                            <p class="single-blog-date">
                            <?php the_time( get_option( "date_format" )); ?>
                        </p>
                    </div>    
                    </div>
                        <?php 
                        // display content
                        the_content(); ?>
                        <hr class="hr-img">
                        <?php  the_post_thumbnail("blog-single-box");
                        endwhile; ?>
                    </div>
    
        </div>
        <div class="sidebar">
            <?php 
                // get the sidebar from sidebar.php
                get_sidebar("Blog") 
            ?>
        </div>

                    </div>


                    </main>
        <style>
            @media(min-width: 768px) {
                .page{
                    margin-top:0;
                }
            }
        </style>
<?php 
// get the footer from footer.php
get_footer();
?>

