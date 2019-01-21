<?php
/*
Template Name: Bảng giá
*/
get_header(); ?>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container text-center">
            <?php
            $image = get_post_thumb(get_the_ID(), '100%', '100%');
            $src = $image['src'];
            ?>
            <img src="<?php echo $src; ?>" alt="no img">
        </div>
    </section>

<?php get_footer() ?>