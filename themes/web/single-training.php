<?php 
if (has_term('', 'daotao')) { 
    get_template_part('/post/single', 'dao-tao'); 
}
else {
    get_template_part('post/single', 'dao-tao-default'); 
}
?>
