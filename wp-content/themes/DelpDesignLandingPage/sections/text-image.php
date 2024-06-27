<section>
    <?php
    $args = array(
        'post_type' => array('txt-img'),
        'nopaging' => false,
        'posts_per_page' => 1,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()):
            $query->the_post(); ?>

            <div class="text-image">
                <div class="bg-image order-0">
                    <img src="<?php the_field("image")?>" alt="unique brand/personality" />
                </div>
                <div class="custom-container">
                    <div class="text">
                        <ul class="text-list">
                            <li class="text-item">
                                <?php the_field("tekst1")?>
                            </li>
                            <li class="text-item">
                                <?php the_field("tekst2")?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php endwhile;
    endif;

    wp_reset_postdata();

    ?>

</section>