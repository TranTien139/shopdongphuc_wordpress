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
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <?php
                    $id_cate = get_category_by_slug('tin-tuc');
                    $id_cate = $id_cate->term_id;
                    $args = array('posts_per_page' => 5, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => $id_cate);
                    $postslist = get_posts($args)
                    ?>
                    <div class="rightbar">
                        <ul class="bgwhite">
                            <?php foreach ($postslist as $post) :
                                setup_postdata($post);
                                $image = get_post_thumb(get_the_ID(), 250, 200);
                                $src = $image['src']; ?>
                                <li class="flex-w p-b-20">
                                    <a href="<?php the_permalink() ?>"
                                       class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                        <img src="<?php echo $src ?>" alt="IMG-PRODUCT">
                                    </a>

                                    <div class="w-size23 p-t-5">
                                        <a href="<?php the_permalink() ?>" class="s-text20">
                                           <?php the_title() ?>
                                        </a>
                                    </div>
                                </li>
                            <?php
                            endforeach;
                            wp_reset_postdata();
                            ?>
                    </div>

                </div>
                <div class="col-sm-9">
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
                                $image = get_post_thumb(get_the_ID(), 1200, 500);
                                $src = $image['src']; ?>
                                <div class="item-slick1 item1-slick1"
                                     style="background-image: url(<?php echo $src; ?>);">
                                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                              data-appear="fadeInDown">
<!--							--><?php //the_title()
                            ?>
						</span>
                                        <div class="wrap-btn-slide1 w-size1 animated visible-false"
                                             data-appear="zoomIn">
                                            <!-- Button -->
                                            <!--                                <a href="--><?php //the_permalink()
                                            ?><!--"-->
                                            <!--                                   class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">-->
                                            <!--                                    chi tiết-->
                                            <!--                                </a>-->
                                        </div>
                                    </div>
                                </div>

                            <?php
                            endforeach;
                            wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="blog bgwhite p-t-94">
        <?php global $post;
        global $wp;
        $id_cate = get_category_by_slug('danh-muc-san-pham');
        $id_cate = $id_cate->term_id;
        $categories = getChildCate($id_cate);

        foreach ($categories as $cat) {
            $category = get_term($cat, 'category');
            $category_link = get_category_link($cat); ?>
            <?php
            $args = array('posts_per_page' => 12, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => $category->term_id);
            $postslist = get_posts($args);
            ?>
            <?php if (count($postslist) >= 4) { ?>
                <div class="container">
                    <div class="sec-title p-b-60">
                        <a href="<?php echo esc_url($category_link); ?>"><h3 class="m-text5 t-center">
                                <?php echo $category->name; ?>
                            </h3></a>
                    </div>

                    <!-- Slide2 -->
                    <div class="wrap-slick2">
                        <div class="slick2">
                            <?php foreach ($postslist as $post) :
                                setup_postdata($post);
                                $image = get_post_thumb(get_the_ID(), 500, 400);
                                $src = $image['src'];
                                ?>
                                <div class="col-sm-12 col-md-3 p-b-30 item-slick2 p-l-15 p-r-15">
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                            <a href="<?php the_permalink() ?>"> <img src="<?php echo $src; ?>"
                                                                                     alt="IMG-PRODUCT"></a>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="<?php the_permalink() ?>"
                                               class="block2-name dis-block s-text3 p-b-5">
                                                <?php the_title() ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            <?php } else if (count($postslist) > 0){ ?>
                <div class="container">
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
            ?>
        <?php } ?>

    </section>

    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="container">
            <div class="title">
                <p><span style="color:#053c5a"><span style="font-size:36px">Quy trình làm việc</span></span></p>
            </div>
            <div class="row" >
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row text-center"><br>
                        <p style="padding-bottom: 10px; margin: 0px auto;"><img alt="" src="http://www.seamuniform.com/upload/images/Hainam/tu-van.png"
                                style="height:105px;"></p>
                        <br></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row text-center"><br>
                        <p style="padding-bottom: 10px; margin: 0px auto;"><img alt="" src="http://www.seamuniform.com/upload/images/Hainam/Thiet-ke-chot-mau.png"
                                style="height:105px; "></p>
                        <br></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row text-center">
                        <p style="padding-bottom: 10px; margin: 0px auto;"><img alt="" src="http://www.seamuniform.com/upload/images/Hainam/ky-hop-dong.png"
                                style="height:105px; "></p>
                        <br></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="row text-center">

                        <p style="padding-bottom: 10px; margin: 0px auto;"><img alt="" src="http://www.seamuniform.com/upload/images/Hainam/san-xuat.png"
                                style="height:105px;"></p>

                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();
