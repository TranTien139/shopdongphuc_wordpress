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
                    $image = get_post_thumb(get_the_ID(), 1920, 500);
                    $src = $image['src']; ?>
                    <div class="item-slick1 item1-slick1" style="background-image: url(<?php echo $src; ?>);">
                        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                              data-appear="fadeInDown">
							<?php the_title() ?>
						</span>

                            <!--                            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"-->
                            <!--                                data-appear="fadeInUp">-->
                            <!--                                --><?php //// $des = get_post_meta(get_the_ID(), 'description')[0];
                            //                               // echo $des;
                            ?>
                            <!--                            </h2>-->

                            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                                <!-- Button -->
                                <a href="<?php the_permalink() ?>"
                                   class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
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

    <!-- Blog -->
    <section class="blog bgwhite p-t-94 p-b-65">
        <div class="container">
            <?php global $post;
            global $wp;
            $id_cate = get_category_by_slug('danh-muc-san-pham');
            $id_cate = $id_cate->term_id;
            $categories = getChildCate($id_cate);

            foreach ($categories as $cat) {
                $category = get_term($cat, 'category');
                $category_link = get_category_link($cat); ?>
                <?php
                $args = array('posts_per_page'=>4,'order' => 'DESC', 'orderby' => 'post_date',  'category' => $category->term_id);
                $postslist = get_posts($args);
                ?>
                <?php if (count($postslist)>0){ ?>
                <div>
                    <div class="sec-title p-b-60">
                        <a href="<?php echo esc_url($category_link); ?>"><h3 class="m-text5 t-center">
                                <?php echo $category->name; ?>
                            </h3></a>
                    </div>
                    <div class="row">
                        <?php foreach ($postslist as $post) :
                            setup_postdata($post);
                            $image = get_post_thumb(get_the_ID(), 500, 400);
                            $src = $image['src'];
                            ?>
                            <div class="col-sm-12 col-md-3 p-b-30">
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
            <?php
                }
                }
            ?>
        </div>
    </section>

    <!-- Shipping -->
    <!--    <section class="shipping bgwhite p-t-62 p-b-46">-->
    <!--        <div class="flex-w p-l-15 p-r-15">-->
    <!--            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">-->
    <!--                <h4 class="m-text12 t-center">-->
    <!--                    Free Delivery Worldwide-->
    <!--                </h4>-->
    <!--                <a href="#" class="s-text11 t-center">-->
    <!--                    Click here for more info-->
    <!--                </a>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">-->
    <!--                <h4 class="m-text12 t-center">-->
    <!--                    30 Days Return-->
    <!--                </h4>-->
    <!---->
    <!--                <span class="s-text11 t-center">-->
    <!--					Simply return it within 30 days for an exchange.-->
    <!--				</span>-->
    <!--            </div>-->
    <!---->
    <!--            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">-->
    <!--                <h4 class="m-text12 t-center">-->
    <!--                    Store Opening-->
    <!--                </h4>-->
    <!---->
    <!--                <span class="s-text11 t-center">-->
    <!--					Shop open from Monday to Sunday-->
    <!--				</span>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </section>-->


<?php
get_footer();
