<?php
$args = array(
    'post_type' => array('qoute'),
    'nopaging' => false,
    'posts_per_page' => 1,
);
$query = new WP_Query($args);

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post(); ?>

        <div class="container-xl">
            <div id="scroll" class="text-block d-flex flex-column align-items-end ">
                <p>
                    <span class="quote">"</span>
                    <?php the_field("quote"); ?>
                    <span class="quote-large">"</span>
                </p>
            </div>
        </div>

    <?php endwhile;
endif;

wp_reset_postdata();
?>