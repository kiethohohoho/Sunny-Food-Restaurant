<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sunny Food ● Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="Public/css/homepage.css" />
    <link rel="stylesheet" href="Public/css/reponsive.css">
</head>
<style>
    .price {
        margin-left: 10px;
    }
</style>

<body>
    <div class="py-1 bg-black top">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span class="text">SĐT: 0347057544</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span class="text">
                                <a href="#">sunnyfoodvietnam@gmail.com</a>
                            </span>
                        </div>
                        <div class=" col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                            <p class="mb-0 register-link">
                                <span>Mở cửa từ:</span>
                                <span>Thứ 2 - Chủ nhật</span>
                                <span>7:00AM - 11:00PM</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <!-- thanh navbar khi mobi -->
            <a class="navbar-brand" href="index.php">Sunny Food</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <!-- thanh navbar khi ở pc -->
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Trang Chủ</a></li>
                    <li class="nav-item active"><a href="index.php?controller=menu" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="index.php?controller=order" class="nav-link">Giỏ hàng</a></li>
                    <?php
                    if (!isset($_COOKIE['sf-useronlinename'])) {
                        echo '<li class="nav-item cta"><a href="index.php?controller=signin" class="nav-link" style="margin-right: 10px;"> Đăng Nhập </a></li>
                                <li class="nav-item cta"><a href="index.php?controller=signup" class="nav-link"> Đăng Ký </a></li>';
                    }
                    ?>
                    <?php
                    if (isset($_COOKIE['sf-useronlineid'])) {
                        echo '<li class="nav-item d-flex">
                                    <div class="nav-link avatar-proflie-cover-div ">
                                        <a href="" class="avatar-profile-cover">
                                            <span class="fas fa-user-alt"></span>
                                            <span>';
                        echo $_COOKIE['sf-useronlinename'];
                        echo '</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item cta"><a href="index.php" class="nav-link signout"> Đăng Xuất </a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap hero-wrap-2" style="background-image:url(Public/images/imagesMenu/xbg_3.jpg.pagespeed.ic.RHn8WPcUap.webp)" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Thực Đơn</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Ăn Sáng</a>
                            <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Ăn Trưa</a>
                            <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Ăn Tối</a>
                            <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Nước Uống</a>
                            <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Tráng Miệng</a>
                            <a class="nav-link ftco-animate" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Rượu</a>
                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <?php foreach ($id_mon_an_sang as $key => $value) : ?>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="padding: 10px;">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="box-shadow: rgb(0, 0, 0, 10%) 0px 0px 6px;">
                                                <div class="menu-img img" style="background-image:url(<?php echo $link_anh_sang[$key]; ?>)">
                                                </div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3><?php echo $mon_an_sang[$key]; ?></h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">
                                                                    <?php 
                                                                        echo $gia_sang[$key];
                                                                        echo "₫";
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p><span><?php echo $mo_ta_sang[$key]; ?></span></p>
                                                        <p><a 
                                                            id="<?php echo $id_mon_an_sang[$key]; ?>" 
                                                            data_name="<?php echo $mon_an_sang[$key];?>" 
                                                            data_price="<?php echo $gia_sang[$key];?>"
                                                            data_description="<?php echo $mo_ta_sang[$key];?>" 
                                                            data_avatar="<?php echo $link_anh_sang[$key];?>"
                                                            class="btn btn-primary addtocart">Thêm vào giỏ hàng</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <?php foreach ($id_mon_an_trua as $key => $value) : ?>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="padding: 10px;">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="box-shadow: rgb(0, 0, 0, 10%) 0px 0px 6px;">
                                                <div class="menu-img img" style="background-image:url(<?php echo $link_anh_trua[$key]; ?>)">
                                                </div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3><?php echo $mon_an_trua[$key]; ?></h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">
                                                                    <?php 
                                                                        echo $gia_trua[$key];
                                                                        echo "₫"; 
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p><span><?php echo $mo_ta_trua[$key]; ?></span></p>
                                                        <p><a 
                                                            id="<?php echo $id_mon_an_trua[$key]; ?>" 
                                                            data_name="<?php echo $mon_an_trua[$key];?>" 
                                                            data_price="<?php echo $gia_trua[$key];?>"
                                                            data_description="<?php echo $mo_ta_trua[$key];?>" 
                                                            data_avatar="<?php echo $link_anh_trua[$key];?>"
                                                            class="btn btn-primary addtocart">Thêm vào giỏ hàng</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <?php foreach ($id_mon_an_toi as $key => $value) : ?>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="padding: 10px;">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="box-shadow: rgb(0, 0, 0, 10%) 0px 0px 6px;">
                                                <div class="menu-img img" style="background-image:url(<?php echo $link_anh_toi[$key]; ?>)">
                                                </div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3><?php echo $mon_an_toi[$key]; ?></h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">
                                                                    <?php 
                                                                        echo $gia_toi[$key];
                                                                        echo "₫"; 
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p><span><?php echo $mo_ta_toi[$key]; ?></span></p>
                                                        <p><a 
                                                            id="<?php echo $id_mon_an_toi[$key]; ?>" 
                                                            data_name="<?php echo $mon_an_toi[$key];?>" 
                                                            data_price="<?php echo $gia_toi[$key];?>"
                                                            data_description="<?php echo $mo_ta_toi[$key];?>" 
                                                            data_avatar="<?php echo $link_anh_toi[$key];?>"
                                                            class="btn btn-primary addtocart">Thêm vào giỏ hàng</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <?php foreach ($id_mon_an_nuoc as $key => $value) : ?>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="padding: 10px;">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="box-shadow: rgb(0, 0, 0, 10%) 0px 0px 6px;">
                                                <div class="menu-img img" style="background-image:url(<?php echo $link_anh_nuoc[$key]; ?>)">
                                                </div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3><?php echo $mon_an_nuoc[$key]; ?></h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">
                                                                    <?php 
                                                                        echo $gia_nuoc[$key];
                                                                        echo "₫"; 
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p><span><?php echo $mo_ta_nuoc[$key]; ?></span></p>
                                                        <p><a 
                                                            id="<?php echo $id_mon_an_nuoc[$key]; ?>" 
                                                            data_name="<?php echo $mon_an_nuoc[$key];?>" 
                                                            data_price="<?php echo $gia_nuoc[$key];?>"
                                                            data_description="<?php echo $mo_ta_nuoc[$key];?>" 
                                                            data_avatar="<?php echo $link_anh_nuoc[$key];?>"
                                                            class="btn btn-primary addtocart">Thêm vào giỏ hàng</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <?php foreach ($id_mon_an_trang_mieng as $key => $value) : ?>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="padding: 10px;">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="box-shadow: rgb(0, 0, 0, 10%) 0px 0px 6px;">
                                                <div class="menu-img img" style="background-image:url(<?php echo $link_anh_trang_mieng[$key]; ?>)">
                                                </div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3><?php echo $mon_an_trang_mieng[$key]; ?></h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">
                                                                    <?php 
                                                                        echo $gia_trang_mieng[$key];
                                                                        echo "₫"; 
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p><span><?php echo $mo_ta_trang_mieng[$key]; ?></span></p>
                                                        <p><a 
                                                            id="<?php echo $id_mon_an_trang_mieng[$key]; ?>" 
                                                            data_name="<?php echo $mon_an_trang_mieng[$key];?>" 
                                                            data_price="<?php echo $gia_trang_mieng[$key];?>"
                                                            data_description="<?php echo $mo_ta_trang_mieng[$key];?>" 
                                                            data_avatar="<?php echo $link_anh_trang_mieng[$key];?>"
                                                            class="btn btn-primary addtocart">Thêm vào giỏ hàng</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-day-6-tab">
                                <div class="row no-gutters d-flex align-items-stretch">
                                    <?php foreach ($id_mon_an_ruou as $key => $value) : ?>
                                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="padding: 10px;">
                                            <div class="menus d-sm-flex ftco-animate align-items-stretch" style="box-shadow: rgb(0, 0, 0, 10%) 0px 0px 6px;">
                                                <div class="menu-img img" style="background-image:url(<?php echo $link_anh_ruou[$key]; ?>)">
                                                </div>
                                                <div class="text d-flex align-items-center">
                                                    <div>
                                                        <div class="d-flex">
                                                            <div class="one-half">
                                                                <h3><?php echo $mon_an_ruou[$key]; ?></h3>
                                                            </div>
                                                            <div class="one-forth">
                                                                <span class="price">
                                                                    <?php 
                                                                        echo $gia_ruou[$key];
                                                                        echo "₫"; 
                                                                    ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <p><span><?php echo $mo_ta_ruou[$key]; ?></span></p>
                                                        <p><a 
                                                            id="<?php echo $id_mon_an_ruou[$key]; ?>" 
                                                            data_name="<?php echo $mon_an_ruou[$key];?>" 
                                                            data_price="<?php echo $gia_ruou[$key];?>"
                                                            data_description="<?php echo $mo_ta_ruou[$key];?>" 
                                                            data_avatar="<?php echo $link_anh_ruou[$key];?>"
                                                            class="btn btn-primary addtocart">Thêm vào giỏ hàng</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Sunny Food</h2>
                        <p>Nhà hàng tự hào là nơi cung cấp dịch vụ, trải nghiệm và đồ ăn tốt nhất đến khách hàng.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fab fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fab fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Mở cửa</h2>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Thứ hai</span><span>7:00 - 23:00</span></li>
                            <li class="d-flex"><span>Thứ ba</span><span>7:00 - 23:00</span></li>
                            <li class="d-flex"><span>Thứ tư</span><span>7:00 - 23:00</span></li>
                            <li class="d-flex"><span>Thứ năm</span><span>7:00 - 23:00</span></li>
                            <li class="d-flex"><span>Thứ sáu</span><span>7:00 - 23:00</span></li>
                            <li class="d-flex"><span>Thứ bảy</span><span>7:00 - 23:00</span></li>
                            <li class="d-flex"><span>Chủ nhật</span><span> 7:00 - 23:00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Instagram</h2>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image:url(Public/images/imagesHome/xinsta-1.jpg.pagespeed.ic.WRwgq-vxaD.webp)">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image:url(Public/images/imagesHome/xinsta-2.jpg.pagespeed.ic.qCi3QqEcr1.webp)">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image:url(Public/images/imagesHome/xinsta-3.jpg.pagespeed.ic.e8JUIHgfyF.webp)">
                            </a>
                        </div>
                        <div class="thumb d-flex">
                            <a href="#" class="thumb-menu img" style="background-image:url(Public/images/imagesHome/xinsta-4.jpg.pagespeed.ic.5aKPNrRvM0.webp)">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image:url(Public/images/imagesHome/xinsta-5.jpg.pagespeed.ic.R22CfBvKGc.webp)">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image:url(Public/images/imagesHome/xinsta-6.jpg.pagespeed.ic.LkDqIcw1ZE.webp)">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(".signout").click(function() {
                document.cookie = "sf-useronlineid=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "sf-useronlinename=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "sf-useronlinephone=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                window.location.href = "index.php";
            });
            $(".addtocart").click(function(e) {
                let monAnTrongGioHang = {
                    id: e.target.id, 
                    soluong: 1, 
                    name: $(this).attr('data_name'),
                    price: $(this).attr('data_price'),
                    description: $(this).attr('data_description'),
                    avatar: $(this).attr('data_avatar'),
                };
                let giohang = JSON.parse(localStorage.getItem("sf-giohang"));
                if (giohang) {
                    let ind = 0;
                    giohang.some((val, index) => {
                        ind = index;
                        return val.id == monAnTrongGioHang.id;
                    }) ? giohang[ind].soluong += 1 : giohang.push(monAnTrongGioHang);
                } else {
                    giohang = [monAnTrongGioHang];
                }
                localStorage.setItem("sf-giohang", JSON.stringify(giohang));
            });
        });
    </script>

    <script src="Public/js/jquery.min.js"></script>
    <script src="Public/js/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js.pagespeed.jc.IQ_SRk8I0J.js"></script>
    <script>
        eval(mod_pagespeed_JbYhMf9Iz9);
    </script>
    <script>
        eval(mod_pagespeed_ckvjIE4Jm9);
    </script>
    <script>
        eval(mod_pagespeed_jV5e6asuIo);
    </script>
    <script src="Public/js/jquery.easing.1.3.js+jquery.waypoints.min.js+jquery.stellar.min.js+owl.carousel.min.js.pagespeed.jc.ZdCc2F1V_H.js"></script>
    <script>
        eval(mod_pagespeed_B6hsZYl_KB);
    </script>
    <script>
        eval(mod_pagespeed_gSjf11SdHX);
    </script>
    <script>
        eval(mod_pagespeed_Pach_MboQG);
    </script>
    <script>
        eval(mod_pagespeed_K3GrDXNqkX);
    </script>
    <script src="Public/js/jquery.magnific-popup.min.js+aos.js+jquery.animateNumber.min.js+bootstrap-datepicker.js.pagespeed.jc.77XZS0W-YA.js"></script>
    <script>
        eval(mod_pagespeed_sW9VCBJnIb);
    </script>
    <script>
        eval(mod_pagespeed_DXYvb6R5PC);
    </script>
    <script>
        eval(mod_pagespeed_iHuWmOUy9r);
    </script>
    <script>
        eval(mod_pagespeed_uEE_rWB$Yv);
    </script>
    <script src="Public/js/jquery.timepicker.min.js+scrollax.min.js+google-map.js+main.js.pagespeed.jc.7z6TuS7Aay.js"></script>
    <script>
        eval(mod_pagespeed_p1Gv7L0zXQ);
    </script>
    <script>
        eval(mod_pagespeed_sRYRqiThAe);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script>
        eval(mod_pagespeed_Kt0jhk7CZv);
    </script>
    <script>
        eval(mod_pagespeed_eCpyIjaD0i);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"69e81cb229106e33","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.9.0","si":100}'></script>
</body>

</html>