<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Onlineport" content="width=device-width, initial-scale=1">

    <title>Admin ● Khách Hàng</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="Public/css/admin.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-Online">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"> <span>Sunny Food Admin</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="Public/images/Admin/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Administrator</h2>
                        </div>
                    </div>

                    <br />

                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Quản Lý</h3>
                            <ul class="nav side-menu">
                                <li class="current-page"><a href="index.php?controller=admin"><i class="fas fa-users me-2"></i>Khách hàng</a>
                                </li>
                                <li><a href="index.php?controller=admin&action=monan"><i class="fas fa-utensils me-2"></i>Món ăn</a>
                                </li>
                                <li><a href="index.php?controller=admin&action=donhang"><i class="fas fa-utensils me-2"></i>Đơn hàng</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="right_col" role="main">
                <div class="">
                    <div class="clearfix"></div>

                    <div class="row" style="display: block;">
                        <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Quản Lý Khách Hàng</h2>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">
                                    <p>Danh Sách Tất Cả Khách Hàng</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                                <tr class="headings">
                                                    <th class="column-title">ID </th>
                                                    <th class="column-title">Họ Và Tên</th>
                                                    <th class="column-title">Email</th>
                                                    <th class="column-title">Số Điện Thoại</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($id_khach_hang as $key => $value) : ?>
                                                    <tr class="pointer">
                                                        <td><?php echo $id_khach_hang[$key];?></td>
                                                        <td><?php echo $ho_ten[$key];?></td>
                                                        <td><?php echo $email[$key];?></td>
                                                        <td><?php echo $sdt[$key];?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>