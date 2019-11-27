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
        <h1><?php the_title(); ?></h1>
        <?php
            if ( have_posts() ) :
                woocommerce_content();
            endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
