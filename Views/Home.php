<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sunny Food ● Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
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
            <a class="navbar-brand" href="index.php">Sunny Food</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <!-- thanh navbar khi ở pc -->
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Trang Chủ</a></li>
                    <li class="nav-item"><a href="index.php?controller=menu" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="index.php?controller=order" class="nav-link">Giỏ hàng</a></li>
                    <?php
                    if (!isset($_COOKIE['sf-useronlineid'])) {
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
                    <!-- <li class="nav-item cta"><a href="index.php?controller=signin" class="nav-link" style="margin-left: 10px;"> Đăng Xuất </a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    <section class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight" style="background-image:url(Public/images/imagesHome/xbg_1.jpg.pagespeed.ic.fr5R6zAvsf.webp)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Sunny Food</span>
                        <h1 class="mb-4">Nhà hàng chất lượng</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image:url(Public/images/imagesHome/xbg_2.jpg.pagespeed.ic.4YuLMDNFuv.webp)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Sunny Food</span>
                        <h1 class="mb-4">Ngon &amp; Bổ dưỡng</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image:url(Public/images/imagesHome/xbg_3.jpg.pagespeed.ic.RHn8WPcUap.webp)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Sunny Food</span>
                        <h1 class="mb-4">đặt sản ba miền</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex">
                    <div class="img img-1 mr-md-2" style="background-image:url(Public/images/imagesHome/xabout.jpg.pagespeed.ic.MGrWED85sH.webp)">
                    </div>
                    <div class="img img-2 ml-md-2" style="background-image:url(Public/images/imagesHome/xabout-1.jpg.pagespeed.ic.kE_mUxjyD0.webp)">
                    </div>
                </div>
                <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                    <div class="heading-section mb-4 my-5 my-md-0">
                        <span class="subheading">Giới thiệu</span>
                    </div>
                    <p class="mt-5">Một nơi tuyệt vời để có thể trải nghiệm những món ăn đặc sắc, được chế biến từ những nguyên liệu sạch và vô cùng tươi sống qua bàn tay của những đầu bếp hàng đầu.</p>
                    <pc class="time">
                        <span>Thứ 2 - Chủ Nhật <strong>8 AM - 11 PM</strong></span>
                        <span><a href="#">034 705 7544</a></span>
                    </pc>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Dịch Vụ</span>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fas fa-birthday-cake fa-3x"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Tiệc Sinh Nhật</h3>
                            <p>Tổ chức, setup không gian ấm cúng cho buổi tiệc theo yêu cầu. Thực đơn đặt biệt dành cho tiệc sinh nhật.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fas fa-handshake fa-3x"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Tiệc gặp gỡ công tác</h3>
                            <p>Tổ chức không gian trang trọng, lịch sự kết hợp món ăn đặt biệt. Nơi gặp gỡ đối tác lí tưởng.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="fas fa-glass-cheers fa-3x"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Tiệc cưới</h3>
                            <p>Tổ chức tiệc cưới với đầy đủ những dịch vụ đi kèm, không gian, âm nhạc đầy lãng mạn</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Thực Đơn</span>
                </div>
            </div>
            <div class="row no-gutters d-flex align-items-stretch">
                <?php foreach ($id_mon_an as $key => $value) : ?>
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="padding: 10px;">
                        <div class="menus d-sm-flex ftco-animate align-items-stretch" style="box-shadow: rgb(0, 0, 0, 10%) 0px 0px 6px;">
                            <div class="menu-img img" style="background-image:url(<?php echo $link_anh[$key]; ?>)">
                            </div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3><?php echo $mon_an[$key]; ?></h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">
                                                <?php
                                                echo $gia[$key];
                                                echo "₫";
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                    <p><span><?php echo $mo_ta[$key]; ?></span></p>
                                    <p><a id="<?php echo $id_mon_an[$key]; ?>" data_name="<?php echo $mon_an[$key]; ?>" data_price="<?php echo $gia[$key]; ?>" data_description="<?php echo $mo_ta[$key]; ?>" data_avatar="<?php echo $link_anh[$key]; ?>" class="btn btn-primary addtocart">Thêm vào giỏ hàng</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">Đầu Bếp</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image:url(https://scontent.fdad3-2.fna.fbcdn.net/v/t1.6435-9/34794667_409490566215370_5280697869941080064_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=174925&_nc_ohc=QRLIfHYGrSsAX9N46k4&_nc_ht=scontent.fdad3-2.fna&oh=01eac2967f8994e5352adf9e2674ea61&oe=61AD4433)">
                        </div>
                        <div class="text pt-4">
                            <h3>Lê Quốc Bảo</h3>
                            <span class="position mb-2">MEMBER</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="ftco-animate"><a href="https://www.facebook.com/lequocbao241"><i class="fab fa-facebook"></i></a></li>
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image:url(https://scontent.fdad3-3.fna.fbcdn.net/v/t1.6435-9/235031886_606773054041834_5776506903169735302_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=B81yDH5iEuUAX8og3Xc&_nc_ht=scontent.fdad3-3.fna&oh=2a65ec576fb2e1347e49192019417159&oe=61AC95E8)">
                        </div>
                        <div class="text pt-4">
                            <h3>Lê Tấn Kiệt</h3>
                            <span class="position mb-2">LEADER</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="ftco-animate"><a href="https://www.facebook.com/kiemsiwibu"><i class="fab fa-facebook"></i></a></li>
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img" style="background-image:url(https://scontent.fdad3-4.fna.fbcdn.net/v/t1.6435-9/123221654_2784161141906836_7043307761420510597_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=ATZLnCeeKv0AX8Pe7Lc&_nc_ht=scontent.fdad3-4.fna&oh=3a0e752456dd91f67bef0aa83523587c&oe=61AC87D4)">
                        </div>
                        <div class="text pt-4">
                            <h3>Trần Ngọc Nhật</h3>
                            <span class="position mb-2">MEMBER</span>
                            <div class="faded">
                                <ul class="ftco-social d-flex">
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="ftco-animate"><a href="https://www.facebook.com/ngocnhat2k1"><i class="fab fa-facebook"></i></a></li>
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li class="ftco-animate"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section img" style="background-image:url(Public/images/imagesHome/xbg_3.jpg.pagespeed.ic.RHn8WPcUap.webp)" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5 pt-6">
                    <div class="heading-section ftco-animate mb-5 text-center">
                        <span class="subheading" style="user-select: none;">Đặt Bàn</span>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Họ Tên</label>
                                    <input type="text" class="form-control" placeholder="Tên của bạn..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="Email của bạn..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Số Điện Thoại</label>
                                    <input type="text" class="form-control" placeholder="Số điện thoại của bạn..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ngày đặt</label>
                                    <input type="text" class="form-control" id="book_date" placeholder="Chọn ngày">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Giờ</label>
                                    <input type="text" class="form-control" id="book_time" placeholder="Giờ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Số Người</label>
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Có bao nhiêu người ?</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <input type="submit" value="Đặt Bàn" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
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
    <script>
        eval(mod_pagespeed_eCpyIjaD0i);
    </script>
</body>

</html>