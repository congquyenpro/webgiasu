<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/login_register.css">
<div class="main-container">
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Đăng nhập cho admin</span>
                <form id="submit-login" method="post" action="<?php echo $actual_link ?>/admin/login_processing">
                    <?php
                    if (isset($_SESSION['success'])) {
                        echo "<p style='color:blue; translateY(25px);'>" . $_SESSION['success'] . "</p>";
                        unset($_SESSION['success']);
                    } elseif (isset($_SESSION['error'])) {
                        echo "<p style='color:red; translateY(25px);'>" . $_SESSION['error'] . "</p>";
                        unset($_SESSION['error']);
                    }
                    ?>
                    <p id="alert-eros" style="color:red; transform: translateY(25px)"></p>
                    <div class="input-field">
                        <input type="email" id="email-regex" name="email" placeholder="Nhập email của bạn" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input id="password-regex" type="password" name="password" class="password" placeholder="Nhập mật khẩu" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Nhớ tài khoản</label>
                        </div>

                        <a href="#" class="text">Quên mật khẩu ?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Đăng nhập">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="<?php echo $actual_link?>/public/javascript/login_register.js"></script>