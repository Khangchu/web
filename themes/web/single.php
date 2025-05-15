<?php 
else if (has_term('', 'nghiencuu')) { 
    get_template_part('/post/single', 'nghien-cuu'); 
}
else {
    get_template_part('post/single', 'default'); 
}
?>
