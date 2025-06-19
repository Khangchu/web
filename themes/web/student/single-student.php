<?php 
if (has_term('', 'sinhvien')) {
    get_template_part('student/single', 'sinh-vien'); 
}
else {
    get_template_part('student/single', 'sinh-vien-default'); 
}
?>