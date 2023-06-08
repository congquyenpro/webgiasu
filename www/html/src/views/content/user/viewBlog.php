<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/detail_blog.css">
    <section class="container-main">
        <div class="container">
            <nav>
                <ol class="my-home">
                    <li class="breadcumb-item">
                        <a href="<?php echo $actual_link ?>/home/read"><i class="fa-brands fa-accusoft"></i></a>
                    </li>
                    <span>/</span>
                    <li class="breadcumb-item">
                        <?php if ($data['type'] == 1) { ?>
                            <a href="<?php echo $actual_link ?>/home/user_blog">Blog khách hàng</a>
                        <?php }else{ ?>
                            <a href="<?php echo $actual_link ?>/home/tutor_blog">Blog gia sư</a>
                        <?php } ?>
                    </li>
                    <span>/</span>
                    <li class="detail-item">
                        <span><?php echo $data["title"]?></span>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="content">
            <h1 class="text-heading mb-20"><?php echo $data["title"]?></h1>
            <p class="sub-heading mb-20"><?php echo $data["description"]?></p>
            <img width="100%" height="auto" src="<?php echo $actual_link ?>/public/images/blog/<?php echo $data['image'] ?>" alt="">
            <?php echo $data['content']?>
        </div>

    </section>