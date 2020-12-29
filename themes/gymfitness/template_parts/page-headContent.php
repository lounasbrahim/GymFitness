<?php 
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
            <div class="page-title-div">
                <H1 class="page-title"> 
                    <span class="page-title-bg">
                    <?php 
                        // display the page Title                    
                        the_title() ;     
                    ?> 
                    </span>
                </H1>   

