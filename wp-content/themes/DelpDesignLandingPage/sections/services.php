<section>
    <div class="title">
        <div class="container">
            <div class="title-block">
                <div class="question">what can we do?</div>
                <div class="title-flex">
                    <h2>Our Services</h2>
                    <span class="leaf-small">
                        <img
                            src="<?php bloginfo('template_url'); ?>../assets/images/leaf-small.png"
                            alt="title accesoire" 
                        />
                    </span>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section id="service">
    <div class="services">
        <div class="bg">
            <svg xmlns="http://www.w3.org/2000/svg" width="1110.232" height="424.809" viewBox="0 0 1110.232 424.809">
                <path id="Path_150" data-name="Path 150" d="M138,85.759,855.7,12.191,1058,437-52.232,389Z"
                    transform="translate(52.232 -12.191)" fill="#4e4242" />
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="service">
                        <?php
                        $args = array(
                            'post_type' => array('service'),
                            'nopaging' => false,
                            'posts_per_page' => 10,
                            'order' => 'ASC',
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                            $index = 0; // Index voor de data-index en dots
                            while ($query->have_posts()):
                                $query->the_post(); 
                                
                        ?>

                                <div class="service-item <?php echo $index === 0 ? 'active' : ''; ?>"
                                    data-index="<?php echo esc_attr($index); ?>">
                                    <h3><?php echo esc_html(get_field('titel')); ?></h3>
                                    <div class="description-container">
                                        <p class="description"><?php echo esc_html(get_field('desc')); ?></p>
                                        <button class="show-more">Toon meer</button>
                                    </div>


                                    <ul class="custom-list">
                                        <?php if (have_rows('service_options')): // Vervang 'jouw_acf_groep' door de naam van je ACF groep of herhalingsveld ?>
                                            <?php while (have_rows('service_options')):
                                                the_row(); ?>
                                                <?php
                                                // Itereer over maximaal 5 lijstitems
                                                for ($i = 1; $i <= 5; $i++) {
                                                    $list_item = get_sub_field('list_item_' . $i);
                                                    if ($list_item) {
                                                        echo '<li>' . esc_html($list_item) . '</li>';
                                                    }
                                                }
                                                ?>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <?php $index++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <div class="gallery-dots">
                            <?php for ($i = 0; $i < $index; $i++): ?>
                                <span class="gallery-dot <?php echo $i === 0 ? 'active' : ''; ?>"
                                    data-index="<?php echo esc_attr($i); ?>"></span>
                            <?php endfor; ?>
                        </div>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="gallery d-flex align-items-end">
                        <div class="gallery-navigation d-flex">
                            <button class="Btn-service" id="prevBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.744" height="19.37"
                                    viewBox="0 0 13.744 19.37">
                                    <g id="Group_65" data-name="Group 65" transform="translate(2.462 2.463)">
                                        <path id="Path_146" data-name="Path 146"
                                            d="M12213.288,4031.325l-5.513,4.514-3.308,2.708"
                                            transform="translate(-12204.468 -4031.325)" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-width="3.5" />
                                        <path id="Path_147" data-name="Path 147" d="M12204.468,4031.325l8.82,7.222"
                                            transform="translate(-12204.468 -4024.103)" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-width="3.5" />
                                    </g>
                                </svg>
                            </button>
                            <button class="Btn-service" id="nextBtn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13.744" height="19.37"
                                    viewBox="0 0 13.744 19.37">
                                    <g id="Group_66" data-name="Group 66" transform="translate(-757.006 -2582.863)">
                                        <path id="Path_146" data-name="Path 146"
                                            d="M12204.468,4031.325l5.513,4.514,3.308,2.708"
                                            transform="translate(-11445 -1446)" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-width="3.5" />
                                        <path id="Path_147" data-name="Path 147" d="M12213.288,4031.325l-8.82,7.222"
                                            transform="translate(-11445 -1438.778)" fill="none" stroke="#fff"
                                            stroke-linecap="round" stroke-width="3.5" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <?php
                        $args = array(
                            'post_type' => array('service'),
                            'nopaging' => false,
                            'posts_per_page' => 10,
                            'order' => 'ASC',
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                            $index = 0;
                            while ($query->have_posts()):
                                $query->the_post(); ?>

                                <div class="gallery-item <?php echo $index === 0 ? 'active' : ''; ?>"
                                    data-index="<?php echo esc_attr($index); ?>">
                                    <div class="gallery-item-overlay"></div>
                                    <img src="<?php echo esc_html(get_field('image')); ?>" alt="Service">
                                </div>

                                <?php $index++; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>