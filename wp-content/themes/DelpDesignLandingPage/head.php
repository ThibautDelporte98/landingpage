
<?php
$locations = get_nav_menu_locations();
$idVanNavigatie = $locations['main-menu'];
$menu_items = wp_get_nav_menu_items($idVanNavigatie);
$teller = 0;

?>
<section class="Header">
    <?php
    $args = array(
      'post_type' => array('head'),
      'nopaging' => false,
      'posts_per_page' => 1,
      'order' => 'ASC',
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
      while ($query->have_posts()):
        $query->the_post(); ?>
        <div class="header">
          <img class="header__img" src="<?php the_field('image'); ?>" alt="" />
          <div class="overlay">
            <div class="container-xl">
              <div class="overlay-content">
                <div class="logo">
                  <img class="logo-small" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-small.png"
                    alt="" />
                  <img class="logo-big" src="<?php the_field('logo'); ?>" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-xl">
          <div class="flex-space">
            <div class="row">
              <div class="col-12 col-lg-7 p-4 order-lg-1 order-2">
                <div class="head-title">
                  <h1><?php the_field('title_hero'); ?>
                  <span class="primairy-color"><?php the_field('title_color_hero'); ?></span></h1>
                </div>
              </div>
            <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

          <div class="col-12 col-lg-5 p-4 order-lg-2 order-1">
            <div class="scroll-to">
              <ul class="scroll-to-list">
                <?php
                foreach ($menu_items as $item) {
                  if ($item->menu_item_parent == 0) {
                    echo '<li class="scroll-to-item">';
                    echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                    echo '</li>';
                    $teller++;
                  }
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>