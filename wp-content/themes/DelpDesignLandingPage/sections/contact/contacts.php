<div class="col-12 col-lg-6">
    <div class="flex-md-row">
        <?php
        $args = array(
            'post_type' => array('contact'),
            'nopaging' => false,
            'posts_per_page' => 1,
            'order' => 'ASC',
        );
        $query = new WP_Query($args);

        if ($query->have_posts()):
            $index = 0; // Index for data-index and dots
            while ($query->have_posts()):
                $query->the_post();

                ?>
                <?php if (have_rows('general')): ?>
                    <?php while (have_rows('general')):
                        the_row();
                        $phone = get_sub_field('phone');
                        $email = get_sub_field('email');
                        if ($phone || $email): // Check if phone or email exists
                        ?>
                        <div class="contacts">
                            <ul class="list">
                                <?php if ($phone): // Check if phone exists ?>
                                <li class="item">
                                    <a href="tel:<?php echo $phone ?>" alt="phone number" target="_blank">
                                        <div class="d-flex align-items-center">
                                            <img src="<?php bloginfo('template_url'); ?>../assets/images/big-white-phone.svg"
                                                alt="phone" />
                                            <div class="ml-2"><?php echo $phone ?></div>
                                        </div>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if ($email): // Check if email exists ?>
                                <li class="item">
                                    <a href="mailto:<?php echo $email ?>" alt="email" target="_blank">
                                        <div class="d-flex align-items-center">
                                            <img src="<?php bloginfo('template_url'); ?>../assets/images/big-white-email.svg"
                                                alt="email" />
                                            <div class="ml-2"><?php echo $email ?>
                                                <div>
                                                </div>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                
                <?php if (have_rows('socials')): ?>
                    <?php while (have_rows('socials')):
                        the_row();
                        $instagram = get_sub_field('instagram');
                        $linkedin = get_sub_field('linkedin');
                        if ($instagram || $linkedin): // Check if instagram or linkedin exists
                        ?>
                        <div class="socials">
                            <h3>Our Socials!</h3>
                            <ul class="list list-row">
                                <?php if ($instagram): // Check if instagram exists ?>
                                <li class="item item-row">
                                    <a href="<?php echo $instagram ?>" alt="Instagram" target="_blank">
                                        <img src="<?php bloginfo('template_url'); ?>../assets/images/instagram-full-colored.svg"
                                            alt="Instagram" />
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php if ($linkedin): // Check if linkedin exists ?>
                                <li class="item item-row">
                                    <a href="<?php echo $linkedin ?>" alt="LinkedIn" target="_blank">
                                        <img src="<?php bloginfo('template_url'); ?>../assets/images/linkedin-full-colored.svg"
                                            alt="Linkedin" />
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>


                <?php
            endwhile;
        endif;
        ?>

    </div>
</div>
