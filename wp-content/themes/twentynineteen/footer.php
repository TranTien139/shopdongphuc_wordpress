<?php wp_footer(); ?>

<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90" style="padding-bottom: 10px;">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Liên hệ
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    - Địa chỉ: 103 Núi Trúc, Ba Đình, Hà Nội
                </p>
                <p class="s-text7 w-size27">
                    - Sdt: 096 352 13 65
                </p>
                <p class="s-text7 w-size27">
                    - Email: dongphucneo@gmail.com
                </p>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <a href="/danh-muc/danh-muc-san-pham"><h4 class="s-text12 p-b-30">
                    Danh mục
                </h4></a>
            <a href="/bang-mau"><h4 class="s-text12 p-b-30">
                    Bảng màu
                </h4></a>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <a href="/bang-gia"><h4 class="s-text12 p-b-30">
                    Bảng giá
                </h4></a>
            <a href="/lien-he"><h4 class="s-text12 p-b-30">
                    Liên hệ
                </h4></a>
        </div>

        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <div class="fb-page" data-href="https://www.facebook.com/neouniform/"
                 data-tabs="timeline" data-width="400" data-height="200" data-small-header="false"
                 data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/neouniform/"
                            class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/neouniform/">Neouniform
                        Vocabulary</a></blockquote>
            </div>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <div class="t-center s-text8 p-t-20">
            Copyright © 2019 All rights reserved.
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>


<!--===============================================================================================-->
<script type="text/javascript"
        src="<?php echo get_theme_file_uri(); ?>/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript"
        src="<?php echo get_theme_file_uri(); ?>/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript"
        src="<?php echo get_theme_file_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/js/slick-custom.js"></script>
<!--===============================================================================================-->

<script type="text/javascript"
        src="<?php echo get_theme_file_uri(); ?>/assets/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript"
        src="<?php echo get_theme_file_uri(); ?>/assets/vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/vendor/noui/nouislider.min.js"></script>
<script type="text/javascript">
    /*[ No ui ]
    ===========================================================*/
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [50, 200],
        connect: true,
        range: {
            'min': 50,
            'max': 200
        }
    });

    var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function (values, handle) {
        skipValues[handle].innerHTML = Math.round(values[handle]);
    });
</script>

<!--===============================================================================================-->
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/main.js"></script>

</body>
</html>
