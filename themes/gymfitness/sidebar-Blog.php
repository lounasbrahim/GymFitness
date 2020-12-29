<?php 
    // check if the sidebar is not empty then dsiplay it
    if (is_active_sidebar("blog-sidebar")):
        dynamic_sidebar("blog-sidebar");
    endif;
?>