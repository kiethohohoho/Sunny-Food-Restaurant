<!doctype html>
<html lang="en">

<head>
    <title>Xác Nhận Email</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Public/reset.css">
    <link rel="stylesheet" href="Public/css/SignInUp.css">

</head>

<style>
    p {
        font-size: 14px;
        color: white !important;
        margin-bottom: 3px;
    }
    p:nth-child(3) {
        margin-bottom: 15px !important;
    }
</style>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                        <div class="img d-flex align-items-center justify-content-center">Sunny Food</div>
                        <h3 class="text-center mb-0">Xác Nhận Email</h3>
                        <form id="confirm-form" action="index.php?controller=signup&action=handle" class="login-form" method="POST">
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fas fa-key"></span></div>
                                <input autocomplete="off" type="text" name="OTP" class="form-control" placeholder="Nhập mã OTP" required>
                            </div>
                            <p>Kiểm email của bạn để lấy mã OTP</p>
                            <p>Lưu ý: Mã OTP chỉ có hiệu lực trong vòng 5 phút</p>
                            <div class="form-group">
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3" name="OTP-submit"> Xác Nhận
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("#confirm-form").validate({
            rules: {
                OTP: "required"
            },
            messages: {
                OTP: "Địa chỉ không được để trống"
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
</body>

</html>