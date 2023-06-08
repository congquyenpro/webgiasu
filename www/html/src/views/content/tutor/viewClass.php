<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/view_class.css">
<!-- Main-container section start -->
<section class="container-main">
        <div class="container">
            <nav>
                <ol class="my-home">
                    <li class="breadcumb-item">
                        <a href="<?php echo $actual_link ?>/home/read"><i class="fa-brands fa-accusoft"></i></a>
                    </li>
                    <span>/</span>
                    <li class="breadcumb-item">
                        <a href="<?php echo $actual_link ?>/extra_class/class_list">Danh sách lớp mới</a>
                    </li>
                    <span>/</span>
                    <li class="detail-item">
                        <span>C<?php echo $data['id']?></span>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="content-container">
            <div class="content">
                <h1 class="mb-20">Chi tiết lớp C<?php echo $data['id']?></h1>
                <div class="status mb-20">
                    <span class="mr-5">Tình trạng:</span>
                    <?php if ($data['status'] == 1) { ?>
                        <span class="mr-5 spare">Đang còn</span>
                        <i class="fa-regular fa-circle-check"></i>
                    <?php }else{ ?>
                        <span style="color: red" class="mr-5 spare">Đã hết</span>
                        <i style="color: red" class="fa-regular fa-circle-check"></i>
                    <?php } ?>
                </div>
                <div class="content-class-detail mb-20">
                    <p class="mb-5 sub-heading"><i class="fa-solid fa-book mr-5"></i><?php echo $data['name']?> - Lớp <?php echo $data['lever']?></p>
                    <p class="mb-5"><i class="fa-solid fa-location-dot mr-5"></i><?php echo $data['location']?></p>
                    <p class="mb-5"><i class="fa-solid fa-dollar-sign mr-5"></i><?php echo number_format($data['price'], 0, '', '.')?> ₫/buổi, <?php echo $data['day_in_week']?> buổi/tuần</p>
                    <p class="mb-5"><i class="fa-solid fa-bookmark mr-5"></i>Yêu cầu: 
                    <?php 
                        if ($data['gender'] == 0){
                            echo "Sinh Viên";
                        }else if ($data['gender'] == 1){
                            echo "Sinh Viên Nam";
                        }else if ($data['gender'] == 2){
                            echo "Sinh Viên Nữ";
                        }
                    ?>
                    </p>
                    <p class="mb-5"><i class="fa-solid fa-clock mr-5"></i>Thời gian có thể học: Các buổi tối. Những thời gian khác, cần trao đổi thêm với phụ huynh</p>
    
                </div>
                <div class="content-bonus-info bdbottom mb-20">
                    <p class="sub-heading mb-5">Thông tin bổ sung:</p>
                    <p class="mb-5"><?php echo nl2br($data['description'])?></p>
                </div>
                <div class="content-salary mb-20">
                    <p class="mb-5">Mức thu nhập: <span class="salary"><?php echo number_format(($data['price']*4*$data['day_in_week']), 0, '', '.')?> ₫/tháng</span></p>
                    <a onclick = "warning()"  class="regit-btn" id="js-reg-btn">Đăng ký nhận lớp</a>
                    <p class="fee-claim mt-5">Phí nhận lớp: <span class="fee-percent">40%</span> <span class="only-one">| Chỉ nộp phí 1 lần, những tháng tiếp theo sẽ không mất phí</span></p>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo $actual_link?>/public/javascript/main.js"></script>