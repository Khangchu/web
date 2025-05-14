<?php 
if (has_term('', 'tintuc')) { 
    get_template_part('/post/single', 'tin-tuc'); 
} 
else if (has_term('', 'nghiencuu')) { 
    get_template_part('/post/single', 'nghien-cuu'); 
}
else if (has_term('', 'khoatrungtam')) {
    get_template_part('/post/single', 'khoa-trung-tam'); 
}
else {
    get_template_part('post/single', 'default'); 
}
?>
