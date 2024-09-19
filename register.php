<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="register-page">
        <div class="register-box">
            <div class="login-logo">
                Mini <small class="text-danger">Project</small>
            </div>

            <div class="card-body">
                <p class="login-box-msg">ระบบ ร้านค้าออนไลน์ CRUD</p>

                <form action="api/api_register.php" method="post">
                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="firstname" placeholder="ชื่อ" required>
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="lastname" placeholder="นามสกุล" required>
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="อีเมล์" required>
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="phonenumber" placeholder="เบอร์โทรศัพท์"
                                required>
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <textarea name="address" class="form-control" placeholder="ที่อยู่" rows="3"
                            required></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้" required>
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="agreeTerms" name="terms" value="agree"
                                required>
                            <label class="form-check-label" for="agreeTerms">
                                ฉันยอมรับเงื่อนไข การใช้งาน
                            </label>
                        </div>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" name="insert" class="btn btn-success">สมัครสมาชิก</button>
                    </div>
                </form>

                <div class="text-center">
                    <a href="login.php" class="text-decoration-none">( ฉันมีบัญชีอยู่แล้ว )</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>