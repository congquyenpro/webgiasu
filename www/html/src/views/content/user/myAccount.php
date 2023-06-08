<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/my_account.css">
<div class="main-container">
        <div class="row">
            <div class="box-config">
                <h2 class="text-header">Tài khoản của tôi</h2>
                <p class="text-content"> Mã tài khoản: </p>
                <p class="text-content" style="color: green;">GC<?php echo $_SESSION['id']?></p>
                <div style="width: 100%; height: 13px"></div>
                <div class="box-control-config">
                    <input type="checkbox">
                    <label for="">Nhận thông báo qua SMS</label>
                    <div style="width: 100%; height: 13px"></div>
                    <input type="checkbox">
                    <label for="">Nhận thông báo qua Email</label>
                </div>
                <div class="box-control-config">
                    <div style="width: 100%; height: 10px"></div>
                    <a href="<?php echo $actual_link ?>/home/my_blog/">
                        Quản lý bài đăng
                    </a>
                    <div style="width: 100%; height: 10px"></div>
                    <a href="<?php echo $actual_link ?>/admin/change_password/">
                        Thay đổi mật khẩu
                    </a>
                </div>
            </div>
            <div class="box-info">
                <div id="box-view" class="box-info-view">
                    <div class="name-header">
                        Hồ sơ thông tin
                    </div>
                    <?php
                        if (isset($_SESSION['done'])){
                            echo "<span style='color: blue;'>Cập nhập tài khoản thành công</span>";
                            unset($_SESSION['done']);
                        }else if (isset($_SESSION['error'])){
                            echo "<span style='color: blue;'>Lỗi trùng Email hoặc lỗi file</span>";
                            unset($_SESSION['done']);
                        } 
                    ?>
                    <div id="my-infor">
                        <div class="avatar-preview">
                            <img src="<?php echo $actual_link ?>/public/images/avatar/<?php echo $_SESSION['avatar']?>" alt="<?php echo $_SESSION['name']?>">
                        </div>
                        <ul>
                            <li>
                                <span style="color: blue; font-weight: 600">Họ tên:</span>
                                <?php echo $_SESSION['name']?>
                            </li>
                            <li>
                                <span style="color: blue; font-weight: 600">Giới tính: </span> 
                                <?php
                                    if ($data['gender'] == 1){
                                        echo "Nam";
                                    }else if ($data['gender'] == 2){
                                        echo "Nữ";
                                    }else if ($data['gender'] == 0){
                                        echo "<span style='color:red'>Chưa Xác định</span>";
                                    }
                                ?>
                            </li>
                            <li>
                                <span style="color: blue; font-weight: 600">Email: </span>
                                <?php echo $data['email']?>
                            </li>
                            <li>
                                <span style="color: blue; font-weight: 600">Số điện thoại: </span>
                                <?php
                                    if ($data['phone_number'] == null){
                                        echo "<span style='color:red'>Chưa Xác định</span>";
                                    }else{
                                        echo $data['phone_number'];
                                    }
                                ?>
                            </li>
                            <li>
                                <span style="color: blue; font-weight: 600">Địa chỉ: </span>
                                <?php
                                    if ($data['phone_number'] == null){
                                        echo "<span style='color:red'>Chưa Xác định</span>";
                                    }else{
                                        echo $data['address'];
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="box-btn-config">
                        <button class="btn" onclick="changeView()">
                            Thay đổi thông tin tài khoản
                        </button>
                    </div>
                </div>

                <form action="<?php echo $actual_link ?>/admin/update" method="post" id="box-edit" class="box-info-view hidden" enctype="multipart/form-data">
                    <div class="name-header">
                        Chỉnh sửa thông tin cá nhân
                    </div>
                    <div id="my-change-infor">
                        <ul>
                            <span id="error-message" style="color: red; font-size: 17px"></span>
                            <li>
                                <span>Avatar:</span>
                                <input name="avatar" class="input-set-new-value" type="file">
                            </li>
                            <li>
                                <span>Họ tên:</span>
                                <input id="name-regex" name="name" class="input-set-new-value" type="text" value="<?php echo $_SESSION['name'] ?>" required>
                            </li>
                            <li>
                                <span>Giới tính: </span> 
                                <select class="input-set-new-value" name="gender" >
                                    <?php if ($data['gender'] == 2) { ?>
                                        <option value="2">nữ</option>
                                        <option value="1">nam</option>
                                    <?php } else { ?>
                                        <option value="1">nam</option>
                                        <option value="2">nữ</option>
                                    <?php } ?>
                                </select>
                            </li>
                            <li>
                                <span>Email: </span>
                                <input id="email-regex" name="email" class="input-set-new-value" type="email" value="<?php echo $data['email']?>" required>
                            </li>
                            <li>
                                <span>Điện thoại: </span>
                                <input id="phone-regex" name="phone_number" class="input-set-new-value" type="text" value="<?php echo $data['phone_number']?>" required>
                            </li>
                            <li>
                                <span>Địa chỉ: </span>
                                <br>
                                <textarea class="box-set-new-value" name="address" required><?php echo $data['address']?></textarea>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="box-btn-config">
                        <button type="submit" class="btn btn-change-info">
                            Cập nhật thông tin tài khoản
                        </button>
                        <button class="btn btn-change-info" style="background: #ccc; color: rgb(83, 57, 57)" onclick="changeView()">
                            Trở lại
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="<?php echo $actual_link ?>/public/javascript/myaccount.js"></script>