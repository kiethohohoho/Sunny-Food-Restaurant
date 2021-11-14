<!doctype html>
<html lang="en">

<head>
    <title>Đăng Ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="Public/reset.css">
    <link rel="stylesheet" href="Public/css/SignInUp.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                        <div class="img d-flex align-items-center justify-content-center">Sunny Food</div>
                        <h3 class="text-center mb-0">Tạo Tài Khoản</h3>
                        <form action="index.php?controller=signup&action=handle" id="login-form" class="login-form" method="POST">
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                <input type="text" class="form-control" placeholder="Tên hiển thị" autocomplete="off" name="fullname" required>
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
                                <input type="email" class="form-control" placeholder="Email" autocomplete="off" name="email" required>
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input type="password" #password class="form-control" placeholder="Mật khẩu" name="password" required>
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-sync"></span></div>
                                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="cpassword" required>
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-mobile-alt"></span></div>
                                <input type="text" class="form-control" placeholder="Số điện thoại" name="phonenumber" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <div class="w-100">
                                    <input type="checkbox" required>
                                    <label class="checkbox-wrap checkbox-primary">Tôi đồng ý tất cả các tuyên bố về điều khoản dịch vụ
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3" name="signupsubmit"> Đăng Ký
                                </button>
                            </div>
                        </form>
                        <div class="w-100 text-center mt-4 text">
                            <p class="mb-0">Đã có tài khoản?</p>
                            <a href="index.php?controller=signin">Đăng Nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("#login-form").validate({
            rules: {
                fullname: "required",
                address: "required",
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                cpassword: {
                    required: true,
                    minlength: 5
                },
                phonenumber: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
            },

            messages: {
                fullname: "Tên hiển thị không được để trống",
                password: {
                    required: "Mật khẩu không được để trống",
                    minlength: "Mật khẩu phải dài ít nhất 5 ký tự"
                },
                cpassword: {
                    required: "Xác nhận mật khẩu không được để trống",
                    minlength: "Mật khẩu phải dài ít nhất 5 ký tự"
                },
                email: {
                    required: "Email không được để trống",
                    email: "Email không hợp lệ"
                },
                phonenumber: {
                    required: "Số điện thoại không được để trống",
                    minlength: "Số điện thoại phải gồm 10 chữ số",
                    maxlength: "Số điện thoại chỉ gồm 10 chữ số"
                },
                address: "Địa chỉ không được để trống"
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
</body>

</html>