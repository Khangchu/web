<?php 
if (has_term('', 'khoatrungtam')) {
    get_template_part('center-department/single', 'khoa-trung-tam'); 
}
else {
    get_template_part('center-department/single', 'khoa-trung-tam-default'); 
}
?>