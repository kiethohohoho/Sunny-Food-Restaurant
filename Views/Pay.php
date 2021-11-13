<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sunny Food - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="Public/css/homepage.css" />
    <link rel="stylesheet" href="Public/css/reponsive.css">
</head>

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
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
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
            <a class="navbar-brand" href="index.html">Sunny Food</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <!-- thanh navbar khi ở pc -->
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Trang Chủ</a></li>
                    <li class="nav-item"><a href="index.php?controller=menu" class="nav-link">Menu</a></li>
                    <li class="nav-item active"><a href="index.php?controller=order" class="nav-link">Giỏ hàng</a></li>
                    <?php
                    if (!isset($_COOKIE['sf-useronlineid'])) {
                        echo '<li class="nav-item cta"><a href="index.php?controller=signin" class="nav-link" style="margin-right: 10px;"> Đăng Nhập </a></li>
                                <li class="nav-item cta"><a href="index.php?controller=signup" class="nav-link"> Đăng Ký </a></li>';
                    }
                    ?>
                    <?php
                    if (isset($_COOKIE['sf-useronlineid'])) {
                        echo '<li class="nav-item d-flex">
                                    <div class="avatar-proflie-cover-div ">
                                        <a href="" class="avatar-profile-cover">
                                            <span class="fas fa-user-alt"></span>
                                            <span>';
                        echo $_COOKIE['sf-useronlinename'];
                        echo '</span>
                                        </a>
                                    </div>
                                </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-wrap" style="background-image:url(Public/images/imagesMenu/xbg_3.jpg.pagespeed.ic.RHn8WPcUap.webp); height: 115px;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

        </div>
        </div>
    </section>
    <section class="oder py-3 pb-5">
        <div class="container">
            <ul class="oder-link">
                <li class="logo">
                    <a href="./homePage.html">Sunny Food</a>
                </li>
                <li class="oder-link-item">
                    <a href="#">/ Gio Hang</a>
                </li>
                <li class="oder-link-item">
                    <a href="#">/Dat Hang</a>
                </li>
            </ul>
            <h2 class="font-bold">Đặt hàng</h2>
            <div class="d-md-flex  d-flex-wrap font-primary mb-8 md:mb-14">
                <div class="col-lg-9 border-gray">
                    <div class="list-cart ">
                        <div class="p-2 border-b last-border-b-0">
                            <div class="form-defaut">
                                <div class="title-form font-bold">
                                    <span>Thông tin người nhận</span>
                                </div>
                                <div class="d-flex">
                                    <div class="col-md-6 form-group">
                                        <div class="input-wrap ">
                                            <input type="text" placeholder="Họ và Tên" class="form-control" value="<?php if(isset($_COOKIE['sf-useronlinename'])){echo $_COOKIE['sf-useronlinename'];}?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="input-wrap">
                                            <input type="text" placeholder="Số điện thoại" class="form-control" value="<?php if(isset($_COOKIE['sf-useronlinephone'])){echo $_COOKIE['sf-useronlinephone'];}?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="title-form font-bold">
                                    <span>Địa chỉ nhận hàng</span>
                                </div>
                                <div class="d-flex">
                                    <div class="col-md-4 form-group">
                                        <div class="input-wrap ">
                                            <input type="text" placeholder="Tỉnh/ Thành Phố" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="input-wrap">
                                            <input type="text" placeholder="Quận/ Huyện" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <div class="input-wrap">
                                            <input type="text" placeholder="Xã/ Phường" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="col-md-12 form-group">
                                        <div class="input-wrap">
                                            <input type="text" placeholder="Số nhà,tên đường, phường, xã,.." class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 border-gray border-left-none ">
                    <div class="checkout_sidebar py-4 space-y-4 ">

                        <div class="d-flex justify-between px-0 md:px-4 border- pb-4">
                            <div class="font-bold text-sm">Đơn hàng(3sp)</div>
                            <a href="oder.html" class="text-base font-bold">Sửa</a>
                        </div>

                        <div class="d-flex justify-between px-0 md:px-4 border- pb-4">
                            <div class="font-bold text-sm">Tạm tính:</div>
                            <div class="text-base">600.000&nbsp;₫</div>
                        </div>
                        <div class="d-flex justify-between items-center px-0 md:px-4 border-b border-gray-100 pb-4">
                            <div class="font-bold text-sm">Thành tiền:</div>
                            <div class="text-lg text-red-400 font-bold">
                                600.000&nbsp;₫
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="py-3 col-md-4">
                <a href="index.php?controller=pay&action=handle" class="btn-color"> Đặt hàng</a>
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
</body>

</html>