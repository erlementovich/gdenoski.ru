<?php
    /**
     * Общий файл вывода Woo
     */
?>

<?php get_header();
    $postID = get_the_ID();
?>

<main>
    <div class="container">
        <?php
            if ( have_posts() ) :
                woocommerce_content();
            endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
