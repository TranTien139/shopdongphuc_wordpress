<?php
/*
Template Name: Liên hệ
*/
get_header(); ?>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <div class="contact-map size21">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9059390483903!2d105.78449875002441!3d21.036449292824074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4a68ad8821%3A0xf73c48a07ed837e2!2zTmfDtSAxNjUgWHXDom4gVGjhu6d5LCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1547978537043" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <form class="leave-comment">
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Send us your message
                    </h4>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Phone Number">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
                    </div>

                    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

                    <div class="w-size25">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
