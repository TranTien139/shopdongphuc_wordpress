<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<?php
// Default arguments
$args = array(
    'posts_per_page' => 4, // How many items to display
    'post__not_in'   => array( get_the_ID() ), // Exclude current post
    'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
);

// Check for current post category and add tax_query to the query arguments
$cats = wp_get_post_terms( get_the_ID(), 'category' );
$cats_ids = array();
foreach( $cats as $wpex_related_cat ) {
    $cats_ids[] = $wpex_related_cat->term_id;
}
if ( ! empty( $cats_ids ) ) {
    $args['category__in'] = $cats_ids;
}

// Query posts
$wpex_query = new wp_query( $args );

?>


<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="" class="s-text16">
        Home
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <a href="" class="s-text16">
        Women
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <a href="#" class="s-text16">
        T-Shirt
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <span class="s-text17">
			Boxy T-Shirt with Roll Sleeve Detail
		</span>
</div>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <?php
            $image = get_post_thumb(get_the_ID(), 800, 650);
            $src = $image['src'];
             ?>
            <img src="<?php echo $src; ?>" alt="no img">
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?php the_title(); ?>
            </h4>


            <p class="s-text8 p-t-10">
                <?php the_content() ?>
            </p>

            <!--  -->
            <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                    Mô tả
                    <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                    <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                </h5>

                <div class="dropdown-content dis-none p-t-15 p-b-23">
                    <p class="s-text8">
                        <?php $des =  get_post_meta(get_the_ID(),'description')[0]; echo $des; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Sản phẩm liên quan
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
<?php
                // Loop through posts
                foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <a href="<?php the_permalink() ?>" ><?php the_post_thumbnail() ?></a>
                                <div class="block2-overlay trans-0-4">
                                    <a href="<?php the_permalink() ?>" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="<?php the_permalink() ?>" class="block2-name dis-block s-text3 p-b-5">
                                   <?php the_title() ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
// End loop
endforeach;

// Reset post data
wp_reset_postdata(); ?>



            </div>
        </div>

    </div>
</section>
