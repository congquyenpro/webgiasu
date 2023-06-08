<header class="header" id="header">
        <section class="nav-main flex">
            <a href="<?php echo $actual_link ?>/home/read" class="logo"> <img src="<?php echo $actual_link ?>/public/images/default/danh-cho-gia-su-removebg-preview.png" alt=""></a>

            <ul class="btn-home">
                <?php if (isset($_SESSION['lever'])) { ?>
                    <?php if ($_SESSION['lever'] == 1) { ?>
                        <li><a href="<?php echo $actual_link ?>/admin/my_account" class="btn-tutor-blue">Quản lý tài khoản admin</a></li>
                        <li><a href="<?php echo $actual_link ?>/admin/logout" class="btn-tutor-logout">Đăng xuất</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo $actual_link ?>/tutor/my_account" class="btn-tutor-blue">Quản lý tài khoản gia sư</a></li>
                        <li><a href="<?php echo $actual_link ?>/tutor/logout" class="btn-tutor-logout">Đăng xuất</a></li>
                    <?php } ?>
                <?php }else{ ?>
                    <li><a href="<?php echo $actual_link ?>/tutor/login" class="btn">Đăng kí làm gia sư</a></li>
                    <li><a href="<?php echo $actual_link ?>/home/hire" class="btn">Đăng ký thuê gia sư</a></li>
                <?php } ?>
                <li class="nav-phone">
                    <span><i class="fa-solid fa-phone"></i></span>
                    <a href="#">0123-486-789</a>
                </li>
            </ul>

            <div id="menu-btn" class="fas fa-bars"><span>Menu</span></div>

        </section>

        <section class="flex">
            <nav class="navbar">
                <a href="<?php echo $actual_link ?>/home/read#home">Trang chủ</a>
                <a href="<?php echo $actual_link ?>/home/read#service">Dịch vụ</a>
                <a href="<?php echo $actual_link ?>/home/read#contact">Liên hệ</a>
                <a href="<?php echo $actual_link?>/home/user_blog">Thông báo</a>
                <a href="<?php echo $actual_link?>/home/tutor_blog">Blog gia sư</a>
                <?php if(isset($_SESSION['lever'])) { ?>
                    <a href="<?php echo $actual_link?>/home/create_blog">Viết Blog</a>
                <?php if ($_SESSION['lever'] == 1) { ?>
                    <a href="<?php echo $actual_link?>/extra_class/create">Tạo lớp học</a>
                    <a href="<?php echo $actual_link?>/admin/client">Danh sách khách hàng</a>
                <?php }}?>
                <a href="<?php echo $actual_link?>/extra_class/class_list">Danh sách lớp mới</a>
            </nav>

        </section>
    </header>