<?php 
class postClassModels extends ConnectDB{
    // Lấy Tất cả dữ liệu
    function selectValues(){
        // Truy vấn
        $sql = "SELECT `post_class`.*, `subject`.`name` FROM `post_class` INNER JOIN `subject` ON `post_class`.`subject_id` = `subject`.`id` ORDER BY `post_class`.`created_at` DESC";
        $subJect = mysqli_query($this->connection,$sql);
        return $subJect;
    }
    // Tìm kiếm dữ liệu
    public function findValue($subject, $lever){
        // Truy vấn
        $subject_query = "";
        $lever_query = "";
        if ($subject != 0){
            $subject_query = " AND `post_class`.`subject_id` = '$subject'";
        }
        if ($lever != 0){
            $lever_query = " AND `post_class`.`lever` = '$lever'";
        }
        $sql = "SELECT `post_class`.*, `subject`.`name` FROM `post_class` 
                INNER JOIN `subject` ON `post_class`.`subject_id` = `subject`.`id` 
                WHERE `subject`.`name` like '%%'" . $subject_query . $lever_query . 
                "ORDER BY `post_class`.`created_at` DESC";
        $subJect = mysqli_query($this->connection,$sql);
        return $subJect;
    }
    // Lấy 1 dữ liệu
    function selectOneValue($id){
        // Truy vấn
        $sql = "SELECT `post_class`.*, `subject`.`name` FROM `post_class` INNER JOIN `subject` ON `post_class`.`subject_id` = `subject`.`id` WHERE `post_class`.`id` = '$id'";
        $subJect = mysqli_query($this->connection,$sql);
        // Nén từ mảng thành biến
        $subJect = mysqli_fetch_array($subJect);
        return $subJect;
    }
    // Tạo lớp mới
    function createValues($user_id, $subject_id, $lever, $location, $gender, $day_in_week, $description, $price){
        // Truy vấn và kiêm tra
        $sql = "INSERT INTO `post_class`(
            `user_id`,
            `subject_id`,
            `lever`,
            `location`,
            `gender`,
            `day_in_week`,
            `description`,
            `price`
        )
        VALUES(
            '$user_id',
            '$subject_id',
            '$lever',
            '$location',
            '$gender',
            '$day_in_week',
            '$description',
            '$price'
        )";
        mysqli_query($this->connection,$sql);
        if (mysqli_error($this->connection) == ""){
            return true;
        }else{
            return false;
        }
    }
}
