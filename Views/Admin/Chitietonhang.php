<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Onlineport" content="width=device-width, initial-scale=1">

    <title>Chi Tiết Đơn Hàng</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="Public/css/admin.css" rel="stylesheet">
</head>

<style>
    .main_container {
        display: flex;
        justify-content: center;
    }

    .nav-md .container.body .right_col {
        padding: 0;
        margin-left: 0;
        margin-top: 100px;
    }
    .x_title span{
        color: #FF7600;
    }
    .x_panel{
        background-color: #f5f5f5;
    }
</style>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="right_col" role="main">
                <div class="">
                    <div class="clearfix"></div>

                    <div class="row" style="display: block;">
                        <div class="clearfix"></div>

                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2> Chi Tiết Đơn Hàng <?php echo "<span>$id</span>";?></h2>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">
                                    <p>Tất Cả Món Ăn</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table bulk_action">
                                            <thead>
                                                <tr class="headings">
                                                    <th class="column-title">ID Món Ăn</th>
                                                    <th class="column-title">Số lượng </th>
                                                    <th class="column-title">Giá Tiền</th>
                                                    <th class="column-title">Thành Tiền</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($id_mon_an as $key => $value) : ?>
                                                    <tr class="pointer">
                                                        <td><?php echo $id_mon_an[$key]; ?></td>
                                                        <td><?php echo $so_luong[$key]; ?></td>
                                                        <td><?php echo $giatien[$key]; ?></td>
                                                        <td><?php echo $tongtien[$key]; ?></td>
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