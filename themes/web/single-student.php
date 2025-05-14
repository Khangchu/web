<?php 
if (has_term('', 'sinhvien')) {
    get_template_part('/post/single', 'sinh-vien'); 
}
else {
    get_template_part('post/single', 'sinh-vien-default'); 
}
?>