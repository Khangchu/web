<?php 
if (has_term('', 'tuyensinh')) { 
    get_template_part('/post/single', 'tuyen-sinh'); 
}
else {
    get_template_part('post/single', 'tuyen-sinh-default'); 
}
?>