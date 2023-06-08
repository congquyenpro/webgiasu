<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/login_register.css">
<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/register_hire.css">
<span id="filter-clear"></span>
<div class="main-container">
<div class="modal">
      <div class="modal-container js-modal-container">
        <div class="modal-close js-close-modal">
          <i class="ti-close"></i>
        </div>  
        <h2>Đăng kí tìm gia sư</h2>
        <p id="alert-eros" style="color:red; transform: translateY(10px)"></p>  
        <form class="reg-form" id="register-hires" action="<?php echo $actual_link ?>/home/hire_possessing" method="POST">
          <input type="radio" id="woman" name="gender" value="0">
          <label for="woman" style="margin-right: 20px;">Chị</label>

          <input type="radio" id="men" name="gender" value="1">
          <label for="men">Anh </label>

          <br>

          <label for="fname">Họ Và Tên</label>
          <input type="text" id="name-regex" name="name" placeholder="Nhập họ và tên..." required>

          <label for="lname">Email</label>
          <input type="text" id="email-regex" name="email" placeholder="Nhập email..." required>

          <label for="country">Số Điện Thoại</label>
          <input type="text" id="phone-regex" name="phone" placeholder="Nhập số điện thoại..." required>

          <label for="address">Địa Chỉ</label>
          <input type="text" id="address" name="address" placeholder="Nhập địa chỉ..." required>

          <input type="submit" value="Submit">
        </form>
      </div>
    </div>
</div>
<script src="<?php echo $actual_link?>/public/javascript/login_register.js"></script>