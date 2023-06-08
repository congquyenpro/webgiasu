<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/login_register.css">
<div class="main-container">
    <div class="container active">
        <div class="forms">
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Đăng kí tài khoản gia sư</span>

                <form id="register-submit" method="post" action="<?php echo $actual_link ?>/tutor/register_processing">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<p style='color:red; translateY(25px);'>" . $_SESSION['error'] . "</p>";
                        unset($_SESSION['error']);
                    }
                    ?>
                    <p id="alert-eros" style="color:red; transform: translateY(25px)"></p>
                    <div class="input-field">
                        <input id="name-regex" type="text" name="name" placeholder="Nhập tên của bạn" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input id="email-regex" type="email" name="email" placeholder="Nhập email của bạn" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input id="password-regex" type="password" name="password" class="password" placeholder="Tạo mật khẩu" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input id="confirm-password-regex" type="password" class="password" placeholder="Nhập lại mật khẩu" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck" required>
                            <label for="sigCheck" class="text">
                                Bạn đồng ý với
                                <a href=""> Điều khoản sử dụng</a>
                            </label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Đăng kí">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Đã có tài khoản?
                        <a href="<?php echo $actual_link ?>/tutor/login" class="text login-link">Đăng nhập</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $actual_link?>/public/javascript/login_register.js"></script>