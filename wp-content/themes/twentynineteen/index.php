<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
    <!-- Slide1 -->
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                <?php
                $id_cate = get_category_by_slug('slide');
                $id_cate = $id_cate->term_id;
                $args = array('posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => $id_cate);
                $postslist = get_posts($args)
                ?>
        <?php foreach ($postslist as $post) :
        setup_postdata($post);
        $image = get_post_thumb(get_the_ID(), 1920, 600);
        $src = $image['src']; ?>
                <div class="item-slick1 item1-slick1" style="background-image: url(<?php  echo $src; ?>);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							<?php the_title() ?>
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            <?php $des =  get_post_meta(get_the_ID(),'description')[0]; echo $des; ?>
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="<?php the_permalink() ?>" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                chi tiết
                            </a>
                        </div>
                    </div>
                </div>

        <?php
    endforeach;
    wp_reset_postdata(); ?>

            </div>
        </div>
    </section>


    <!-- Banner2 -->
<!--    <section class="banner2 bg5 p-t-55 p-b-55">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">-->
<!--                    <div class="hov-img-zoom pos-relative">-->
<!--                        <img src="--><?php // echo get_theme_file_uri(); ?><!--/assets/images/banner-08.jpg" alt="IMG-BANNER">-->
<!---->
<!--                        <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">-->
<!--							<span class="m-text9 p-t-45 fs-20-sm">-->
<!--								The Beauty-->
<!--							</span>-->
<!---->
<!--                            <h3 class="l-text1 fs-35-sm">-->
<!--                                Lookbook-->
<!--                            </h3>-->
<!---->
<!--                            <a href="#" class="s-text4 hov2 p-t-20 ">-->
<!--                                View Collection-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">-->
<!--                    <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">-->
<!--                        <img src="--><?php // echo get_theme_file_uri(); ?><!--/assets/images/shop-item-09.jpg" alt="IMG-BANNER">-->
<!---->
<!--                        <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">-->
<!--                            <div class="t-center">-->
<!--                                <a href="product-detail.html" class="dis-block s-text3 p-b-5">-->
<!--                                    Gafas sol Hawkers one-->
<!--                                </a>-->
<!---->
<!--                                <span class="block2-oldprice m-text7 p-r-5">-->
<!--									$29.50-->
<!--								</span>-->
<!---->
<!--                                <span class="block2-newprice m-text8">-->
<!--									$15.90-->
<!--								</span>-->
<!--                            </div>-->
<!---->
<!--                            <div class="flex-c-m p-t-44 p-t-30-xl">-->
<!--                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">-->
<!--									<span class="m-text10 p-b-1 days">-->
<!--										69-->
<!--									</span>-->
<!---->
<!--                                    <span class="s-text5">-->
<!--										days-->
<!--									</span>-->
<!--                                </div>-->
<!---->
<!--                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">-->
<!--									<span class="m-text10 p-b-1 hours">-->
<!--										04-->
<!--									</span>-->
<!---->
<!--                                    <span class="s-text5">-->
<!--										hrs-->
<!--									</span>-->
<!--                                </div>-->
<!---->
<!--                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">-->
<!--									<span class="m-text10 p-b-1 minutes">-->
<!--										32-->
<!--									</span>-->
<!---->
<!--                                    <span class="s-text5">-->
<!--										mins-->
<!--									</span>-->
<!--                                </div>-->
<!---->
<!--                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">-->
<!--									<span class="m-text10 p-b-1 seconds">-->
<!--										05-->
<!--									</span>-->
<!---->
<!--                                    <span class="s-text5">-->
<!--										secs-->
<!--									</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <?php
        $args = array('order' => 'DESC', 'orderby' => 'post_date');
        $postslist = get_posts($args);
    ?>
    <!-- Blog -->
    <section class="blog bgwhite p-t-94 p-b-65">
        <div class="container">
            <div class="row">
            <?php foreach ($postslist as $post) :
                setup_postdata($post);
                $image = get_post_thumb(get_the_ID(), 500, 600);
                $src = $image['src'];
                ?>
                <div class="col-sm-10 col-md-4 p-b-30">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="<?php the_permalink() ?>" class="block3-img dis-block hov-img-zoom">
                            <img alt="no image"
                                    src="<?php echo $src; ?>">
                        </a>
                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="<?php the_permalink() ?>" class="m-text11">
                                    <?php the_title() ?>
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <!-- Instagram -->

<!--    <section class="instagram p-t-20">-->
<!--        <div class="sec-title p-b-52 p-l-15 p-r-15">-->
<!--            <h3 class="m-text5 t-center">-->
<!--                @ follow us on Instagram-->
<!--            </h3>-->
<!--        </div>-->
<!---->
<!--        <div class="flex-w">-->
<!--            <div class="block4 wrap-pic-w">-->
<!--                <img src="--><?php // echo get_theme_file_uri(); ?><!--/assets/images/gallery-03.jpg" alt="IMG-INSTAGRAM">-->
<!---->
<!--                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">-->
<!--					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">-->
<!--						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>-->
<!--						<span class="p-t-2">39</span>-->
<!--					</span>-->
<!---->
<!--                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">-->
<!--                        <p class="s-text10 m-b-15 h-size1 of-hidden">-->
<!--                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.-->
<!--                        </p>-->
<!---->
<!--                        <span class="s-text9">-->
<!--							Photo by @nancyward-->
<!--						</span>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            -->
<!--            <div class="block4 wrap-pic-w">-->
<!--                <img src="--><?php // echo get_theme_file_uri(); ?><!--/assets/images/gallery-07.jpg" alt="IMG-INSTAGRAM">-->
<!---->
<!--                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">-->
<!--					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">-->
<!--						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>-->
<!--						<span class="p-t-2">39</span>-->
<!--					</span>-->
<!---->
<!--                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">-->
<!--                        <p class="s-text10 m-b-15 h-size1 of-hidden">-->
<!--                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.-->
<!--                        </p>-->
<!---->
<!--                        <span class="s-text9">-->
<!--							Photo by @nancyward-->
<!--						</span>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            -->
<!--            <div class="block4 wrap-pic-w">-->
<!--                <img src="--><?php // echo get_theme_file_uri(); ?><!--/assets/images/gallery-09.jpg" alt="IMG-INSTAGRAM">-->
<!---->
<!--                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">-->
<!--					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">-->
<!--						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>-->
<!--						<span class="p-t-2">39</span>-->
<!--					</span>-->
<!---->
<!--                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">-->
<!--                        <p class="s-text10 m-b-15 h-size1 of-hidden">-->
<!--                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.-->
<!--                        </p>-->
<!---->
<!--                        <span class="s-text9">-->
<!--							Photo by @nancyward-->
<!--						</span>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            -->
<!--            <div class="block4 wrap-pic-w">-->
<!--                <img src="--><?php // echo get_theme_file_uri(); ?><!--/assets/images/gallery-13.jpg" alt="IMG-INSTAGRAM">-->
<!---->
<!--                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">-->
<!--					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">-->
<!--						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>-->
<!--						<span class="p-t-2">39</span>-->
<!--					</span>-->
<!---->
<!--                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">-->
<!--                        <p class="s-text10 m-b-15 h-size1 of-hidden">-->
<!--                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.-->
<!--                        </p>-->
<!---->
<!--                        <span class="s-text9">-->
<!--							Photo by @nancyward-->
<!--						</span>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Free Delivery Worldwide
                </h4>
                <a href="#" class="s-text11 t-center">
                    Click here for more info
                </a>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    30 Days Return
                </h4>

                <span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    Store Opening
                </h4>

                <span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
            </div>
        </div>
    </section>


<?php
get_footer();
