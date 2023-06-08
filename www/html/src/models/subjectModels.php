<?php 
class subjectModels extends ConnectDB{
    // Lấy tất cả dữ liệu từ bảng subject
    function getAllValues(){
        $sql = "SELECT * FROM `subject`";
        $subJect = mysqli_query($this->connection,$sql);
        return $subJect;
    }
}
