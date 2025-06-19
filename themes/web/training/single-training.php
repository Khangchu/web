<?php 
if (has_term('', 'daotao')) { 
    get_template_part('training/single', 'dao-tao'); 
}
else {
    get_template_part('training/single', 'dao-tao-default'); 
}
?>
