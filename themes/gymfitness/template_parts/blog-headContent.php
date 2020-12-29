<?php  
if(get_page_template_slug() == "contact.php"): 
    get_template_part( "template_parts/contact", "head");
elseif (is_author( )):
    get_template_part( "template_parts/author", "head");
elseif(is_category()):
    get_template_part( "template_parts/category", "head");
else:
    get_template_part( "template_parts/blog", "head");
endif; ?>