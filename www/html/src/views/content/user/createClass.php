<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/create_blog.css">
    <div class="main">
        <div class="tilte">
            Tạo Lớp học mới
        </div>
        <form class="form" method="post" action="<?php echo $actual_link ?>/extra_class/create_processing">
            <div class="input-value">
                <div class="name-title">
                    Môn học
                </div>
                <select class="select-input" name="subject_id" id="">
                    <?php foreach ($data as $subject) { ?>
                        <option value="<?php echo $subject['id']?>"><?php echo $subject['name']?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="input-value">
                <div class="name-title">
                    Cấp học
                </div>
                <select class="select-input" name="lever" id="">
                    <?php for($i = 1; $i < 13; $i++) { ?>
                        <option value="<?php echo $i?>">lớp <?php echo $i?></option>
                    <?php } ?>
                    <option value="13">Đại học</option>
                    <option value="14">Đi Làm</option>
                </select>
            </div>
            
            <div class="input-value">
                <div class="name-title">
                    Giới tính yêu cầu
                </div>
                <select class="select-input" name="gender" id="">
                    <option value="0">không</option>
                    <option value="1">nam</option>
                    <option value="2">nữ</option>
                </select>
            </div>

            <div class="input-value">
                <div class="name-title">
                    Giá Tiền 1 giờ
                </div>
                <input name="price" class="select-input" type="number" >
            </div>

            <div class="input-value">
                <div class="name-title">
                    Số ngày trên 1 tuần
                </div>
                <select class="select-input" name="day_in_week" id="">
                    <?php for($i = 1; $i < 8; $i++) { ?>
                        <option value="<?php echo $i?>"><?php echo $i?> Buổi / Tuần</option>
                    <?php } ?>
                </select>
            </div>

            <div class="input-value">
                <div class="name-title">
                    Mô Tả lớp học
                </div>
                <textarea name="description" placeholder="Nhập mô tả của lớp học"></textarea>
            </div>

            <div class="input-value">
                <div class="name-title">
                    Địa chỉ lớp học
                </div>
                <textarea name="location" placeholder="Nhập địa chỉ của lớp học"></textarea>
            </div>
            
            <div class="input-value">
                <button type="submit">Tạo lớp học</button>
            </div>
        </form>
    </div>