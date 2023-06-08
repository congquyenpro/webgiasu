
    <link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/home.css">
<!-- Home section start -->

<section class="home" id="home">
        <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img
            src="<?php echo $actual_link ?>/public/images/default/slide1.jpg"
            style="width: 100%"
          />
        </div>

        <div class="mySlides fade">
          <img
            src="<?php echo $actual_link ?>/public/images/default/slide2.jpg"
            style="width: 100%"
          />
        </div>

        <div class="mySlides fade">
          <img
            src="<?php echo $actual_link ?>/public/images/default/slide3.jpg"
            style="width: 100%"
          />
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br />

      <!-- The dots/circles -->
      <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
        <div class="container">
            <div class="content">
                <h1>Trung tâm gia sư</h1>
                <p class="content-success">Mang thành công đến với bạn</p>
                <p>Bạn muốn học giỏi? Đăng ký ngay! Đội ngũ gia sư giỏi của chúng tôi sẽ giúp bạn tiến bộ nhanh chóng.</p>
                <a href="#menu" class="btn-regit">Đăng ký thuê gia sư ngay</a>
            </div>
        </div>
    </section>

    <!-- Home section end -->

    <!-- Introduce section end -->
    <!-- Introduce you are end -->
    <section class="introduce" id="introduce">
        <div class="img">
            <img src="<?php echo $actual_link?>/public/images/default/danh-cho-gia-su-removebg-preview.png" alt="Dành cho gia sư">
        </div>
        
        <div class="content">
        
            <h2 class="heading-text mb-30">Bạn là giáo viên, sinh viên?</h2>		
        
            <p class="disc mb-30">Gia nhập vào đội ngũ gia sư của chúng tôi, nhận lớp và có thêm thu nhập từ những kiến thức, kỹ năng giảng dạy của bạn.</p>
        
            <div class="join mb-48">
            <a href="#" class="join-logit"><i class="fa-solid fa-chevron-right"></i> Đăng ký làm gia sư</a>
            <a href="#" class="join-logit"><i class="fa-solid fa-chevron-right"></i> Đăng nhập vào tài khoản</a>
            </div>
        
            <div><a href="<?php echo $actual_link ?>/tutor/login" class="btn-page-tutor mb-30">Đến trang dành cho gia sư</a></div>
        </div>
    </section>
    <!-- Introduce you are end -->

    <!-- Introduce hire end -->
    <section class="hire">
        <div class="img">
            <img src="<?php echo $actual_link?>/public/images/default/dich-vu-gia-su-chat-luong.png" alt="Dành cho gia sư">
        </div>
        
        <div class="content">
        
            <h2 class="heading-text mb-30">Bạn cần thuê gia sư?</h2>
            
            <p class="sub-headline">Trải nghiệm dịch vụ chất lượng và chuyên nghiệp!</p>
        
            <p class="disc mb-30">Thật tốn thời gian khi gặp phải gia sư không phù hợp. GSBK luôn làm việc chuyên nghiệp và trách nhiệm, bắt đầu từ việc tuyển chọn đến đào tạo gia sư. Đảm bảo gia sư luôn đạt tiêu chuẩn về kiến thức và kỹ năng giảng dạy.</p>
        
            <div><a href="<?php echo $actual_link ?>/extra_class/create" class="btn-tutor-blue mb-30"><i class="fa-solid fa-arrow-right"></i>Đăng ký thuê gia sư ngay</a></div>
        </div>
    </section>
    <!-- Introduce hire end -->

    <!-- Introduce choose end -->
    <div class="choose">
        <h1 class="text-heading mb-48 text-center">
            Tại sao chọn gia sư tại đây?
        </h1>

        <div class="choose-box">
            <div class="choose-content">
                <img src="<?php echo $actual_link?>/public/images/default/phuong-phap-day-hieu-qua.svg" alt="phuong-phap-day-hieu-qua" class="img mb-30">
                <h2 class="mb-30">Dạy hiệu quả</h2>
                <p>Con chỉ có thể học tốt nếu yêu thích việc học. Gia sư ở đây luôn biết cách tạo động lực cho con, bằng các phương pháp giảng dạy thú vị, dễ hiểu và hiệu quả.</p>
            </div>

            <div class="choose-content">
                <img src="<?php echo $actual_link?>/public/images/default/cam-ket-tien-bo.svg" alt="cam-ket-tien-bo" class="img mb-30">
                <h2 class="mb-30">Tiến bộ nhanh</h2>
                <p>Với gia sư giỏi của chúng tôi, con bạn sẽ nhanh chóng học tập tiến bộ, có kết quả khác biệt chỉ sau 10 buổi học: Con chăm ngoan, học tốt hơn, điểm số cao hơn.</p>
            </div>

            <div class="choose-content">
                <img src="<?php echo $actual_link?>/public/images/default/hoc-thu-2-buoi.svg" alt="hoc-thu-2-buoi" class="img mb-30">
                <h2 class="mb-30">Học thử 2 buổi</h2>
                <p>Sau 2 buổi học thử đầu tiên, nếu không hài lòng về gia sư, bạn không cần phải thanh toán học phí. Tất nhiên, chúng tôi luôn có những gia sư khiến bạn hài lòng nhất.</p>
            </div>
        </div>
        
        <div class="text-center"><a href="#" class="btn-tutor-blue mb-30"><i class="fa-solid fa-arrow-right"></i>Đăng ký thuê gia sư ngay</a></div>
    </div>

    <!-- Introduce choose end -->

    <!-- Introduce benefit start -->
    <div class="benefit">

        <h1 class="text-heading mb-48 text-center">
            Những lợi ích mà bạn có được:
        </h1>

        <div class="benefit-box">
            <div class="benefit-content">
                <i class="fa-solid fa-check"></i>
                <p class="p-check">Không phải mất công đi lại, gia sư đến dạy trực tiếp ngay tại nhà</p>
            </div>

            <div class="benefit-content">
                <i class="fa-solid fa-check"></i>
                <p class="p-check">Con được học 1-1, tạo nên chất lượng giảng dạy tốt nhất</p>
            </div>

            <div class="benefit-content">
                <i class="fa-solid fa-check"></i>
                <p class="p-check">Dễ dàng quản lý giờ giấc học tập của con, không sợ con ham chơi, trốn học</p>
            </div>

            <div class="benefit-content">
                <i class="fa-solid fa-check"></i>
                <p class="p-check">Biết được tình trạng học tập của con bất cứ khi nào bạn muốn</p>
            </div>

            <div class="benefit-content">
                <i class="fa-solid fa-check"></i>
                <p class="p-check">Không còn lo lắng mỗi khi con đối mặt với thi cử, bởi gia sư đã giúp con đã nắm vững kiến thức</p>
            </div>

            <div class="benefit-content">
                <i class="fa-solid fa-check"></i>
                <p class="p-check">Việc học tập của con được đảm bảo, trong khi bạn không phải tốn quá nhiều công sức và thời gian</p>
            </div>
        </div>
        
        <div class="text-center"><a href="<?php echo $actual_link ?>/extra_class/create" class="btn-tutor-blue mb-30"><i class="fa-solid fa-arrow-right"></i>Đăng ký thuê gia sư ngay</a></div>
    </div>
    <!-- Introduce benefit end -->
    <!-- Introduce section end -->

    <!-- Service section start -->
    <div class="service" id="service">
        <h1 class="text-heading mb-48 text-center">
            Dịch vụ của chúng tôi
        </h1>

        <div class="service-contain">

            <p class="service-sub-heading text-center">Chúng tôi luôn nỗ lực để cung cấp cho bạn dịch vụ gia sư chất lượng:</p>
            
            <div class="service-block">
                <span class="icon-number">1</span>
                <div class="service-block-content">
                    <h3 class="block-content">Các môn phổ thông</h3>
                    <p class="block-text">Chủ yếu dành cho những người đã đi làm, bao gồm gia sư dạy giao tiếp các môn: Tiếng Anh, Tiếng Nhật, Tiếng Hàn, Tiếng Pháp, Tiếng Trung, Tiếng Tây Ban Nha và các môn ngoại ngữ khác.</p>
                </div>
            </div>

            <div class="service-block">
                <span class="icon-number">2</span>
                <div class="service-block-content">
                    <h3 class="block-content">Các môn ngoại ngữ</h3>
                    <p class="block-text">Bao gồm tất cả các môn trong chương trình học phổ thông: Toán, Vật Lý, Hóa Học, Sinh Học, Ngữ Văn, Lịch Sử, Địa Lý, Tiếng Anh, Các môn Tiểu Học, và nhiều môn học khác nữa.</p>
                </div>
            </div>

            <div class="service-block">
                <span class="icon-number">3</span>
                <div class="service-block-content">
                    <h3 class="block-content">Các môn năng khiếu</h3>
                    <p class="block-text">Chủ yếu liên quan đến các môn nghệ thuật như: Piano, Guitar, Organ, Mỹ Thuật, Thanh Nhạc, ... Đối với những môn này, để bạn có được gia sư sẽ tốn nhiều thời gian hơn.</p>
                </div>
            </div>
        </div>

        <div class="line"></div>
    </div>
    <!-- Service section end -->

    <!-- Contact section start -->
    <div class="contact" id="contact">
        <div class="img">
            <img src="<?php echo $actual_link?>/public/images/default/tao-dung-tuong-lai-cho-con.png" alt="tao-dung-tuong-lai-cho-con">
        </div>

        <div class="contact-container">
            <h2 class="text-heading text-justify">Tạo dựng tương lai cho bản thân</h2>
            <p class="contact-disc">Cùng BK giúp con học giỏi và mang đến cho con một tương lai tốt đẹp. Dù con bạn đang ở mức học lực nào, chúng tôi đều có thể giúp bạn. Hãy liên hệ với bộ phận Quản Lý Đào Tạo để được tư vấn tốt nhất.</p>

            <div class="contact-call">
                <i class="fa-solid fa-phone"></i>
                <span class="tu-van">Gọi tư vấn</span>
                <a href="09724456789">0123 456 789</a>
            </div>

            <div class="contact-phone text-center"><a href="<?php echo $actual_link ?>/extra_class/create" class="btn-tutor-blue mb-30"><i class="fa-solid fa-arrow-right"></i>Đăng ký thuê gia sư ngay</a></div>
            <div id="return"><a href="#header" class="return">Quay về trang chủ</a></div>
        </div>

    </div>
    <!-- Contact section end -->
    <script src="<?php echo $actual_link?>/public/javascript/main.js"></script>
    <!-- script slider -->
    <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>