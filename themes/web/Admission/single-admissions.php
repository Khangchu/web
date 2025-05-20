<?php 
if (has_term('', 'tuyensinh')) { 
    get_template_part('Admission/single', 'tuyen-sinh'); 
}
else {
    get_template_part('Admission/single', 'tuyen-sinh-default');
}
?>