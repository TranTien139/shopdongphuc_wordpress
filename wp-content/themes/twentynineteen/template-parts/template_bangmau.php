<?php
/*
Template Name: Bảng màu
*/
get_header(); ?>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <h2 class="text-center" style="margin-bottom: 30px;"><?php the_title() ?></h2>
        <div class="container text-center">
            <?php echo get_post_field('post_content', get_the_ID()); ?>
        </div>
    </section>

<?php get_footer() ?>