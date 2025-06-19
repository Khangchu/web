<?php 
if (has_term('', 'tintuc')) { 
    get_template_part('news/single', 'tin-tuc'); 
}
else {
    get_template_part('news/single', 'tin-tuc-default'); 
}
?>