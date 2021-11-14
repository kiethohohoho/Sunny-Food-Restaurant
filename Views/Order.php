<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sunny Food ● Giỏ Hàng</title>
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
<style>
    .gh-xoa-monan,
    .gh-giam,
    .gh-tang {
        cursor: pointer;
        user-select: none;
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
                        echo '<li class="nav-item"><a href="index.php?controller=history" class="nav-link">Lịch sử đơn hàng</a></li>
                        <li class="nav-item d-flex">
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
    <section class="hero-wrap" style="background-image:url(Public/images/imagesMenu/xbg_3.jpg.pagespeed.ic.RHn8WPcUap.webp); height: 115px;" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

        </div>
        </div>
    </section>
    <section class="oder py-3 pb-5">
        <div class="container">
            <ul class="oder-link">
                <li class="logo">
                    <a href="index.php">Sunny Food</a>
                </li>
                <li class="oder-link-item ">
                    <a href="">/ Gio Hang</a>
                </li>
            </ul>
            <h2 class="font-bold"></h2>
            <div class="d-md-flex  d-flex-wrap font-primary mb-8">
                <div class="col-lg-9 border-gray">
                    <!-- HTML ở đây được render bằng javascript -->
                </div>
                <div class="col-lg-3 border-gray border-left-none ">
                    <div class="checkout_sidebar py-4 space-y-4 ">
                        <div class="d-flex justify-between align-items-center px-0 border- pb-4" style="gap: 10px;">
                            <div class="font-bold text-sm">Tạm tính:</div>
                            <div class="text-base" id="tam-tinh"></div>
                        </div>
                        <div class="d-flex justify-between align-items-center px-0 border- pb-4" style="gap: 10px;">
                            <div class="font-bold text-sm">Phí ship:</div>
                            <div class="text-base" id="phi-ship"></div>
                        </div>
                        <div class="d-flex justify-between align-items-center px-0 border- pb-4" style="gap: 10px;">
                            <div class="font-bold text-sm">Voucher:</div>
                            <div class="text-base">0&nbsp;%</div>
                        </div>
                        <div class="d-flex justify-between items-center px-0 border-b border-gray-100 pb-4">
                            <div class="font-bold text-sm">Thành tiền:</div>
                            <div class="text-lg text-red-400 font-bold" id="thanh-tien"></div>
                        </div>
                        <div class="py-3">
                            <a href="index.php?controller=pay" onclick="handle()" class="btn-color"> Tiến hành đặt hàng</a>
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
                            <li class="d-flex"><span>Chủ nhật</span><span>7:00 - 23:00</span></li>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        let giohang = JSON.parse(localStorage.getItem("sf-giohang"));
        setCookie('sl', giohang.length, 3600);
        if (giohang) {
            document.querySelector(".font-bold").innerHTML = `Giỏ hàng ● ${giohang.length} món`;
            let html = giohang.map(val =>
                `<div class="list-cart">
                    <div class="p-2 border-b last-border-b-0">
                        <div class="d-flex">
                            <div class="ava mr-6 w-20 h-20 md-h-168px">
                                <a href="">
                                    <div class="images">
                                        <img src=${val.avatar}>
                                    </div>
                                </a>

                            </div>
                            <div class="flex-1 content space-y-2">
                                <h3 class="font-default text-base md-text-xl font-bold">
                                    <a href="" class="food-name">${val.name}</a>
                                </h3>
                                <div class="dereption-food">${val.description}</div>
                                <div class="font-primary text-base leading-5 md-hidden font-bold" style="padding-top: 0.5rem">
                                    <div>${val.price}&nbsp;₫</div>
                                </div>
                                <div id="sl-${val.id}" class="text-sm leading-5 pt-3 sl">Số lượng: ${val.soluong}</div>
                                <div class="text-sm leading-5 text-right pt-3">
                                    <a id="${val.id}" class="gh-giam p-1"> GIẢM </a>
                                    <span>|</span>
                                    <a id="${val.id}" class="gh-tang p-1"> TĂNG </a>
                                    <span>|</span>
                                    <a id="${val.id}" class="gh-xoa-monan p-1"> XÓA </a>
                                </div>
                            </div>
                            <div class="ml-auto hidden md-block">
                                <div class="font-bold text-base text-black pr-6">
                                    <div class="price">${val.price}&nbsp;₫</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>`);
            document.querySelector(".col-lg-9.border-gray").innerHTML = html;

        } else {
            document.querySelector(".font-bold").innerHTML = `Giỏ hàng ● 0 món`;
        }
    </script>
    <script>
        $(document).ready(function() {
            $(document).ready(function() {
                $(".signout").click(function() {
                    document.cookie = "sf-useronlineid=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    document.cookie = "sf-useronlinename=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    document.cookie = "sf-useronlinephone=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                    window.location.href = "index.php";
                });
            });

            function formatMoney(params) {
                return Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                }).format(params);
            }

            let phiship = 30000;
            let voucher = 0;
            let tamtinh = 0;
            let thanhtien = 0;

            function UpdateColRight() {
                tamtinh = 0;
                let array_all_price = document.getElementsByClassName("price");
                let array_all_count = document.getElementsByClassName("sl");

                for (let i = 0; i < array_all_price.length; i++) {
                    let a = array_all_price[i].textContent.slice(0, -2).replaceAll('.', '')*1;
                    let b = array_all_count[i].textContent.slice(10)*1;
                    tamtinh += a * b;
                }
                thanhtien = tamtinh + phiship - voucher * tamtinh / 100;

                document.getElementById('tam-tinh').innerHTML = formatMoney(tamtinh);
                document.getElementById('phi-ship').innerHTML = formatMoney(phiship);
                document.getElementById('thanh-tien').innerHTML = formatMoney(thanhtien);
            }
            UpdateColRight();
            //xử lý sự kiện click tăng giảm xóa món ăn trong giỏ hàng
            $(".gh-giam").click(function(e) {
                let selector = `#sl-${e.target.id}`;
                let soluong_fe = document.querySelector(selector).textContent.slice(10) * 1 - 1;
                if (soluong_fe) {
                    document.querySelector(selector).innerHTML = `Số lượng: ${soluong_fe}`;
                    UpdateColRight();
                } else {
                    document.querySelector(selector).innerHTML = `Số lượng: ${soluong_fe}`;
                    UpdateColRight();
                    $(`.list-cart:has(${selector})`).addClass("hidden");
                    let new_sl = document.querySelector(".font-bold").textContent.slice(11, -4) * 1 - 1;
                    document.querySelector(".font-bold").innerHTML = `Giỏ hàng ● ${new_sl} món`;
                }

                let giohang = JSON.parse(localStorage.getItem("sf-giohang"));
                let soluong = 0;
                giohang.forEach(val => {
                    if (val.id == e.target.id) {
                        soluong = val.soluong;
                        return;
                    }
                });

                if (soluong > 1) {
                    giohang = giohang.map(val => val.id == e.target.id ? {
                        ...val,
                        soluong: soluong - 1
                    } : {
                        ...val
                    });
                } else {
                    giohang = giohang.filter(val => val.id != e.target.id);
                }

                localStorage.setItem("sf-giohang", JSON.stringify(giohang));
            });
            $(".gh-tang").click(function(e) {
                let selector = `#sl-${e.target.id}`;
                let soluong_fe = document.querySelector(selector).textContent.slice(10) * 1 + 1;
                document.querySelector(selector).innerHTML = `Số lượng: ${soluong_fe}`;
                UpdateColRight();

                let giohang = JSON.parse(localStorage.getItem("sf-giohang"));
                let soluong = 0;
                giohang.forEach(val => {
                    if (val.id == e.target.id) {
                        soluong = val.soluong;
                        return;
                    }
                });

                giohang = giohang.map(val => val.id == e.target.id ? {
                    ...val,
                    soluong: soluong + 1
                } : {
                    ...val
                });

                localStorage.setItem("sf-giohang", JSON.stringify(giohang));
            });
            $(".gh-xoa-monan").click(function(e) {
                let selector = `#sl-${e.target.id}`;
                let soluong_fe = document.querySelector(selector).textContent.slice(10) * 1 - 1;
                soluong_fe = 0;
                document.querySelector(selector).innerHTML = `Số lượng: ${soluong_fe}`;
                UpdateColRight();
                $(`.list-cart:has(${selector})`).addClass("hidden");
                let new_sl = document.querySelector(".font-bold").textContent.slice(11, -4) * 1 - 1;
                document.querySelector(".font-bold").innerHTML = `Giỏ hàng ● ${new_sl} món`;
                let giohang = JSON.parse(localStorage.getItem("sf-giohang"));
                giohang = giohang.filter(val => val.id != e.target.id);

                localStorage.setItem("sf-giohang", JSON.stringify(giohang));
            });

            function setCookie(cname, cvalue, exdays) {
                const d = new Date();
                d.setTime(d.getTime() + (exdays * 1000));
                let expires = "expires=" + d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
            //Xử lý đặt hàng
            setCookie(`ttn`, formatMoney(tamtinh), 3600);
            setCookie(`ps`, formatMoney(phiship), 3600);
            setCookie(`vc`, voucher, 3600);
            setCookie(`tti`, formatMoney(thanhtien), 3600);
        });
    </script>
    <script>
        function setCookie(cname, cvalue, exdays) {
            const d = new Date();
            d.setTime(d.getTime() + (exdays * 1000));
            let expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        //Xử lý đặt hàng
        $(document).ready(function() {
            $(".btn-color").click(function(e) {
                let localGiohang = JSON.parse(localStorage.getItem('sf-giohang'));
                let i = 1;
                localGiohang.map(val => {
                    setCookie(`id${i}`, val.id, 86400);
                    setCookie(`price${i}`, val.price, 86400);
                    setCookie(`zzzsoluong${i}`, val.soluong, 86400);
                    i++;
                })
            });
        });
    </script>
</body>

</html>