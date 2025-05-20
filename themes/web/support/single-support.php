<?php 
if (has_term('', 'hoptacvahotro')) { 
    get_template_part('support/single', 'hop-tac-va-ho-tro'); 
}
else {
    get_template_part('support/single', 'hop-tac-va-ho-tro-default'); 
}
?>