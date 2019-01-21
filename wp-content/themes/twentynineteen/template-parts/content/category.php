<!-- Content page -->

<?php
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$total_product = $category->count;
$slug = $category->slug;
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array('posts_per_page' => 12, 'order' => 'DESC', 'orderby' => 'post_date','paged'=>$paged ,'category' => $cat_id);
$postslist = get_posts($args);
?>

<?php if($slug !== 'bang-mau'){ ?>
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text14 p-b-7">
                        Danh mục sản phẩm
                    </h4>

                    <ul class="p-b-54">
                        <?php global $post;
                        global $wp;
                        $id_cate = get_category_by_slug('danh-muc-san-pham');
                        $id_cate = $id_cate->term_id;
                        $categories= getChildCate($id_cate);

                        foreach ($categories as $cat) {
                            $category = get_term($cat, 'category');
                            $category_link = get_category_link($cat); ?>
                            <li class="p-t-4">
                                <a href="<?php echo esc_url($category_link); ?>" class="s-text13 active1">
                                    <?php echo $category->name; ?>
                                </a>
                            </li>
                        <?php }
                        ?>
                    </ul>

                    <div class="filter-color p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-12">
                            Color
                        </div>

                        <ul class="flex-w">
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
                                <label class="color-filter color-filter1" for="color-filter1"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
                                <label class="color-filter color-filter2" for="color-filter2"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
                                <label class="color-filter color-filter3" for="color-filter3"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
                                <label class="color-filter color-filter4" for="color-filter4"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
                                <label class="color-filter color-filter5" for="color-filter5"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
                                <label class="color-filter color-filter6" for="color-filter6"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
                                <label class="color-filter color-filter7" for="color-filter7"></label>
                            </li>
                        </ul>
                    </div>

                    <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">

                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!-- Product -->
                <div class="row">
                    <?php foreach ($postslist as $post) :
        setup_postdata($post);
        $image = get_post_thumb(get_the_ID(), 600, 800);
        $src = $image['src']; ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                <a href="<?php the_permalink() ?>"><img src="<?php echo $src; ?>" alt="no img"></a>

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
                    endforeach;
                    wp_reset_postdata(); ?>
                </div>

                <?php
                global $wp;
                $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
                ?>

                <!-- Pagination -->
                <div class="pagination flex-m flex-w p-t-26">
                    <?php for($k=1; $k <= $total_product/12+1; $k++){ ?>
                        <a href="<?php echo $current_url.'?paged='.($k);?>" class="item-pagination flex-c-m trans-0-4 <?php if($k === $paged) echo "active-pagination"; ?>"><?php echo $k; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } else { ?>
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 p-b-50">
                    <!-- Product -->

                    <div class="row">
                        <?php foreach ($postslist as $post) :
                            setup_postdata($post);
                            $image = get_post_thumb(get_the_ID(), 600, 800);
                            $src = $image['src']; ?>
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <a href="<?php the_permalink() ?>"><img src="<?php echo $src; ?>" alt="no img"></a>

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
                        endforeach;
                        wp_reset_postdata(); ?>
                    </div>

                    <?php
                    global $wp;
                    $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
                    ?>

                    <!-- Pagination -->
                    <div class="pagination flex-m flex-w p-t-26">
                        <?php for($k=1; $k <= $total_product/12+1; $k++){ ?>
                            <a href="<?php echo $current_url.'?paged='.($k);?>" class="item-pagination flex-c-m trans-0-4 <?php if($k === $paged) echo "active-pagination"; ?>"><?php echo $k; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
