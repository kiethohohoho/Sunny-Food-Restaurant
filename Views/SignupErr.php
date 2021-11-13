<!doctype html>
<html lang="en">

<head>
    <title>Lỗi Xác Nhận Email</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
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
                        <h3 class="text-center mb-0">Lỗi!</h3>
                        <h3 class="text-center mb-0">Email bạn cung cấp không tồn tại!</h3>
                        <button onclick="redirect()" style="margin-top: 20px;" type="submit" class="btn form-control btn-primary rounded submit px-3" name="OTP-submit"> Quay Lại
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function redirect() {
            window.location.href = "index.php?controller=signup"
        }
    </script>
</body>

</html>