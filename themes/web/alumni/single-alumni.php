<?php 
if (has_term('', 'cuusinhvien')) {
    get_template_part('alumni/single', 'cuu-sinh-vien');  
}
else {
    get_template_part('alumni/single', 'cuu-sinh-vien-default'); 
}
?>