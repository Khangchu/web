<?php 
if (has_term('', 'khoatrungtam')) {
    get_template_part('/post/single', 'khoa-trung-tam'); 
}
else {
    get_template_part('post/single', 'khoa-trung-tam-default'); 
}
?>