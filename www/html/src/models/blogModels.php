<?php 
class blogModels extends ConnectDB{
    // Tạo dữ liệu mới
    function Create($user_id, $type, $title, $image, $description, $content){
        // Câu lệnh sql
        $sql = "INSERT INTO `blog`(
                    `user_id`,
                    `type`,
                    `title`,
                    `image`,
                    `description`,
                    `content`
                )
                VALUES(
                    '$user_id',
                    '$type',
                    '$title',
                    '$image',
                    '$description',
                    '$content'
                )";
        // truy vấn và kiểm tra
        mysqli_query($this->connection,$sql);
        if (mysqli_error($this->connection) == ""){
            return true;
        }else{
            return false;
        }
    }
    // trả về blog của tôi với tìm kiếm
    function selectValuesById($search){
        $type   = $_SESSION['lever'];
        $id     = $_SESSION['id'];
        // Tìm kiếm dữ liệu qua id và lever
        $sql    = "SELECT * FROM `blog` WHERE `user_id` = '$id' AND `type` = '$type' AND `title` like '%$search%' ORDER BY `created_at` DESC";
        $blogs = mysqli_query($this->connection,$sql);
        return $blogs;
    }
    // trả về blog với tìm kiếm
    function selectValues($type,$search){   
        $sql = "SELECT * FROM `blog` WHERE `type` = '$type' AND `title` like '%$search%' ORDER BY `created_at` DESC";
        $blogs = mysqli_query($this->connection,$sql);
        return $blogs;
    }
    // TRả về một nội dung blog nhất định
    function selectById($value){
        $sql = "SELECT * FROM `blog` WHERE `id` = '$value'";
        $blog = mysqli_query($this->connection,$sql);
        $blog = mysqli_fetch_array($blog);
        return $blog;
    }
    
}