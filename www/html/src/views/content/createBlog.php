<link rel="stylesheet" href="<?php echo $actual_link ?>/public/css/create_blog.css">
<script src="https://cdn.tiny.cloud/1/qft0y7nd2fkpbh6iu02sd4mi8drr27xu3vdx2zvpjl2tjbxj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<div class="main">
        <div class="tilte">
            Tạo blog của bạn
        </div>
        <form class="form" action="<?php echo $actual_link ?>/home/save_blog" method="post" enctype="multipart/form-data">
            <div class="input-value">
                <div class="name-title">
                    Tiêu đề
                </div>
                <input name="title" type="text" placeholder="Nhập tiêu đề của bạn" required>
            </div>

            <div class="input-value">
                <div class="name-title">
                    Ảnh nổi bật
                </div>
                <input name="image" type="file" placeholder="Nhập ảnh nổi bật" required>
            </div>

            <div class="input-value">
                <div class="name-title">
                    Tiêu đề nổi bật (250 kí tự)
                </div>
                <textarea name="description" placeholder="Nhập tiêu đề nổi bật của ban" required></textarea>
            </div>

            <div class="input-value">
                <div class="name-title">
                    Nội Dung bài viết
                </div>
                <textarea name="content-blog" id="myTextarea"></textarea>
            </div>
            <div class="input-value">
                <button type="submit">Tạo bài đăng</button>
            </div>
        </form>
    </div>
</body>
<script>
    tinymce.init({
        selector: "#myTextarea",
    });
</script>