<?php 
    // check if the sidebar is not empty then dsiplay it
        if (is_active_sidebar("sidebar")):
            dynamic_sidebar("sidebar");
        endif;
?>