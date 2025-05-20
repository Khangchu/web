<?php 
if (has_term('', 'nghiencuu')) { 
    get_template_part('examine/single', 'nghien-cuu'); 
}
else {
    get_template_part('examine/single', 'nghien-cuu-default'); 
}
?>