<?php 
if (has_term('', 'tintuc')) { 
    get_template_part('/post/single', 'tin-tuc'); 
}
else {
    get_template_part('post/single', 'tin-tuc-default'); 
}
?>