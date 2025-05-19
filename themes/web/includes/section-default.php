<?php
if(have_posts(  )){
    while(have_posts()) {
        the_post();
        the_content();
        
        $now = new DateTime();
            $tuan = (int) $now->format('W');
        $nam  = (int) $now->format('o');
        ?>
        <h1>

        <?php
         echo  $tuan
         ?>
        </h1>
        <h1>
            <?php
            echo $nam
            
            ?>
        </h1>
        
        <?php
    }
}
?>