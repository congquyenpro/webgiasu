<?php 
class clientModels extends ConnectDB{
    // Lấy Tất cả dữ liệu
    function selectValues($type){
        // Truy vấn
        $sql = "SELECT * FROM `client` WHERE `type`='$type' ORDER BY `id` DESC";
        $subJect = mysqli_query($this->connection,$sql);
        return $subJect;
    }

    function createValue($name, $gender, $email, $phone, $address){
        $sql = "INSERT INTO `client`(`name`,`gender` ,`email`, `phone`, `address`) VALUES ('$name','$gender' ,'$email', '$phone', '$address')";
        $subJect = mysqli_query($this->connection,$sql);
        return $subJect;
    }

    function updateClient($id, $type){
        $sql = "UPDATE `client` SET `type` = '$type' WHERE `id` = '$id'";
        $subJect = mysqli_query($this->connection,$sql);
        return $subJect;
    }
}
