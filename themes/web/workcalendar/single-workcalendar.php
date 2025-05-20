<?php 
if (has_term('', 'lichcongtac')) { 
    get_template_part('/post/single', 'lich-cong-tac'); 
}
else {
    get_template_part('post/single', 'lich-cong-tac-default'); 
}
?>