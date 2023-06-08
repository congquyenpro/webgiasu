<?php 
class userModels extends ConnectDB{
    // Tạo dữ liệu mới
    function CreateUser($name,$email,$password){
        // Câu truy vấn
        $sql = "INSERT INTO `user`(
                    `name`,
                    `email`,
                    `password`
                )
                VALUES(
                    '$name',
                    '$email',
                    '$password'
                )";
        // Thực hiện truy vẫn
        mysqli_query($this->connection,$sql);
        // Kiểm tra xem có lỗi xảy ra không
        if (mysqli_error($this->connection) == ""){
            return true;
        }else{
            return false;
        }
    }
    // Hàm đăng nhập
    function loginUser($email,$password){
        // tìm kiếm dữ liệu qua email
        $user = $user = $this->selectOne('email', $email);

        // Kiểm tra xem dữ liệu có tồn tại hay không
        if (isset($user['password'])){
            // Kiểm tra mật khẩu
            $verify = password_verify($password, $user['password']);
            if ($verify){
                // Lưu phiên hay session
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['avatar'] = $user['avatar'];
                $_SESSION['lever'] = 1;
                return true;
            }  
        }else{
            return false;
        }
    }
    // hàm đổi mật khẩu
    function ChangePass($password,$secure_pass){
        $id = $_SESSION['id'];
        // tìm kiếm dữ liệu qua id
        $user = $this->selectOne('id', $id);

        // Kiểm tra xem dữ liệu có tồn tại hay không
        if (isset($user['password'])){
            // Kiểm tra mật khẩu
            $verify = password_verify($password, $user['password']);
            if ($verify){
                $sql = "UPDATE
                        `user`
                    SET
                        `password` = '$secure_pass'
                    WHERE
                        `id` = '$id'";
                mysqli_query($this->connection,$sql);
                return true;
            }  
        }else{
            return false;
        }
    }
    // Lấy dữ liệu từ 1 hàng
    function selectOne($key,$value){
        // Truy vấn
        $sql = "SELECT * FROM `user` WHERE `$key` = '$value'";
        $user = mysqli_query($this->connection,$sql);
        // Ép dữ liệu từ mảng về 1
        $user = mysqli_fetch_array($user);
        return $user;
    }
    // Cập nhập dữ liệu
    function updateOne($id, $name, $email, $phone_number, $gender, $avatar, $address){
        // Câu truy vấn
        $sql = "UPDATE
                    `user`
                SET
                    `name` = '$name',
                    `email` = '$email',
                    `phone_number` = '$phone_number',
                    `gender` = '$gender',
                    `avatar` = '$avatar',
                    `address` = '$address'
                WHERE
                    `id` = '$id'";
        // Thực hiện truy vấn và kiểm tra
        mysqli_query($this->connection,$sql);
        if (mysqli_error($this->connection) == ""){
            return true;
        }else{
            return false;
        }
    }
}