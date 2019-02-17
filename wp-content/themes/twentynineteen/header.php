<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php  echo get_theme_file_uri(); ?>/assets/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php  echo get_theme_file_uri(); ?>/assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">

<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1809357332636523&autoLogAppEvents=1"></script>

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="wrap_header">
            <!-- Logo -->
            <a href="/" class="logo">
                <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/logo-neo.jpg" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="/">Trang chủ</a>
                        </li>

                        <?php create_bootstrap_menu('menu-top') ?>
                        <li>
                            <a href="/danh-muc/bang-mau">Bảng màu</a>
                        </li>
                        <li>
                            <a href="/bang-gia">Bảng giá</a>
                        </li>
                        <li>
                            <a href="/lien-he">liên hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="/" class="logo-mobile">
            <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/logo-neo.jpg" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <span class="topbar-child1">
							<a href="/">Trang chủ</a>
                    </span>
                </li>

                <?php create_bootstrap_menu('menu-top') ?>
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                     <span class="topbar-child1">
							 <a href="/danh-muc/bang-mau">Bảng màu</a>
                    </span>
                </li>
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <span class="topbar-child1">
							 <a href="/bang-gia">Bảng giá</a>
                    </span>
                </li>
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <span class="topbar-child1">
							 <a href="/lien-he">liên hệ</a>
                    </span>
                </li>
            </ul>
        </nav>
    </div>
</header>
