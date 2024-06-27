<section>
    <div class="title bg-orange">
        <div class="container">
            <div class="title-block">
                <div class="question">Get in touch!</div>
                <div class="title-flex">
                    <h2>Contact us</h2>
                    <span class="leaf-small">
                        <img
                            src="<?php bloginfo('template_url'); ?>../assets/images/leaf-small.png"
                            alt="title accesoire" />
                        </span>
                </div>
                
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="contact">
        <div class="bg">
            <svg xmlns="http://www.w3.org/2000/svg" width="1116.5" height="549.264" viewBox="0 0 1116.5 549.264">
                <path id="Path_148" data-name="Path 148" d="M311,117.224l267.5,30.35L1173,585,56.5,666.488Z"
                    transform="translate(-56.5 -117.224)" fill="#ffb01e" />
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <?php get_template_part('sections/contact/contacts'); ?>
                <?php get_template_part('sections/contact/form'); ?>
                <?php get_template_part('sections/contact/confirm-popup'); ?>
            </div>
        </div>
    </div>
</section>