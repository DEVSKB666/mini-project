<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - iT Store</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            Mini <small class="text-danger">Project</small>
        </div>
        <!-- /.login-logo -->
        <div class="login-card-body rouneded">
            <p class="login-box-msg">ระบบ ร้านค้าออนไลน์ CRUD</p>

            <form action="api/api_login.php" method="post" id="frm_login">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" name="username"
                            id="username" required>
                        <div class="input-group-text">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password" id="password"
                            required>
                        <div class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-block">เข้าสู่ระบบ</button>
                </div>
            </form>


            <div class="text-center mt-2">
                <a href="register.php" class="text-decoration-none text-danger">( สมัครสมาชิก )</a>
            </div>
        </div>
        <!-- /.login-card-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).on('submit', '#frm_login', function() {
        var url = $(this).attr('action');
        var data = new FormData(this);

        $.ajax({
            url: url,
            type: 'POST',
            dataType: "JSON",
            data: data,
            contentType: false,
            processData: false,
            success: function(res, status) {
                if (res.status == true) {
                    window.location.href = 'index.php';
                } else {
                    alert(res.message);
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr, status, error);
            }
        });
        return false;
    });
    </script>
</body>

</html>