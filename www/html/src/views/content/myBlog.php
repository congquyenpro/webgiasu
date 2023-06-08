<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/blog.css">
<!-- Main-container section start -->
<section class="container-main">
        <div class="container">
            <nav>
                <ol class="my-home">
                    <li class="breadcumb-item">
                        <a href="<?php echo $actual_link ?>/home/read"><i class="fa-solid fa-house"></i></a>
                    </li>
                    <span>/</span>
                    <li class="breadcumb-item">
                        <span>Blog của tôi</span>
                    </li>
                </ol>
            </nav> 
        </div>
        
        <div class="form">
            <div class="text-heading">
                <h1>Blog của tôi</h1>
            </div>
            <div class="form-fill">
                <div class="form-all">
                    <input id="search-input" type="search" class="search-input" size="35px" placeholder="Tìm kiếm blog" value="<?php echo $data[0]?>">
                    <a id="search" href="my_blog&search=">
                        <button class="search-btn"><i class="icon-search fa-solid fa-magnifying-glass"></i></button>
                    </a>
                </div>
                <div class="category-box-group">
                    <div class="category-box-item">
                        <a href="#">
                            <h3 class="category-title">Học tập</h3>
                        </a>
                    </div>
                    <div class="category-box-item">
                        <a href="#">
                            <h3 class="category-title">Thuê gia sư</h3>
                        </a>
                    </div>
                    <div class="category-box-item">
                        <a href="#">
                            <h3 class="category-title">Kiến thức</h3>
                        </a>
                    </div>
                    <div class="category-box-item">
                        <a href="#">
                            <h3 class="category-title">Luyện thi cử</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="general">
            <?php $count = 0  ?>
            <?php foreach ($data[1] as $blog) { $count++; ?>
                <div class="content-block">
                    <a href="<?php echo $actual_link ?>/home/view_blog/<?php echo $blog['id']?>" class="content-img">
                        <img src="<?php echo $actual_link ?>/public/images/blog/<?php echo $blog['image'] ?>" alt="">
                    </a>
                    <div class="content-disc">
                        <a href="<?php echo $actual_link ?>/home/view_blog/<?php echo $blog['id']?>"><h3 class="disc-title mb-30">
                            <?php echo $blog['title'] ?>
                        </h3></a>
                        <div class="disc-disc mb-30 text-justify fix-size">
                            <!-- <?php echo substr($blog['description'], 0 , 200) ?> -->
                            <?php echo $blog['description'] ?>
                        </div>
                        <div class="disc-more-detail">
                            <a href="<?php echo $actual_link ?>/home/view_blog/<?php echo $blog['id']?>" class="disc-detail mr-20">
                                <i class="fa-solid fa-chevrons-right"></i>
                                Xem chi tiết
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if ($count == 0) { ?>
                <div class="content-block">
                    <h2 style="color:red">Danh sách blog trống</h2>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- Main-container section end -->
    <script>
        document.getElementById('search-input').addEventListener('keyup', function(e) {
            document.getElementById('search').href = "my_blog&search=" + this.value;
        })
    </script>