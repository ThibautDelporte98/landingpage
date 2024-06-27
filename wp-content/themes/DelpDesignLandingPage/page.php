<?php
get_header();
?>
<div class="Page">
    <div class="container">

        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();

                ?>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                <?php
            }
        }


        ?>

    </div>    
</div>


<!-- <?php phpinfo(); ?> -->

