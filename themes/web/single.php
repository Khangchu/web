<?php 
if (has_term('', 'tintuc')) { 
    get_template_part('/post/single', 'tin-tuc'); 
} 
else if (has_term('', 'tuyensinh')) { 
    get_template_part('/post/single', 'tuyen-sinh'); 
}
else if (has_term('', 'daotao')) { 
    get_template_part('/post/single', 'dao-tao'); 
}
else if (has_term('', 'nghiencuu')) { 
    get_template_part('/post/single', 'nghien-cuu'); 
}
else {
    get_template_part('post/single', 'default'); 
}
?>
