<?php
get_header();
?>
<div class="privacy">
    <div class="container">
        <div class="return-button">
            <button class="Btn Btn-return" onclick="goBack()">Ga terug</button>            
        </div>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <div class="privacy-content">
                    <?php the_content(); ?>
                </div>
                <?php
            }
        }
        ?>
    </div>    
</div>
<script>
function goBack() {
    window.history.back();
}
</script>

<?php phpinfo(); ?>

<?php
get_footer();
?>
