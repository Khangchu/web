<?php 
if (has_term('', 'doingucanbo')) { 
    get_template_part('TeamofOfficials/single', 'doi-ngu-can-bo'); 
}
else {
    get_template_part('TeamofOfficials/single', 'doi-ngu-can-bo-default'); 
}
?>
