<?php 
class giaSuModels extends ConnectDB{
    // Tạo dữ liệu mới
    function CreateUser($name,$email,$password){
        // Câu truy vấn
        $sql = "INSERT INTO `instructor`(
                    `name`,
                    `email`,
                    `password`
                )
                VALUES(
                    '$name',
                    '$email',
                    '$password'
                )";
        // Thực hiện truye vấn và kiểm tra
        mysqli_query($this->connection,$sql);
        if (mysqli_error($this->connection) == ""){
            return true;
        }else{
            return false;
        }
    }
    // Đăng nhập
    function loginUser($email,$password){
        // tìm kiếm dữ liệu qua email
        $user = $this->selectOne('email', $email);

        // Kiểm tra dữ liệu có tồn tại hay không
        if (isset($user['password'])){
            // Kiểm tra mật khẩu
            $verify = password_verify($password, $user['password']);
            if ($verify){
                // Lưu phiên hay session
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['avatar'] = $user['avatar'];
                $_SESSION['lever'] = 2;
                return true;
            }  
        }else{
            return false;
        }
    }
    // Đổi mật khẩu
    function ChangePass($password,$secure_pass){
        $id = $_SESSION['id'];
        // tìm kiếm dữ liệu qua id
        $user = $this->selectOne('id', $id);
        // Kiểm tra xem dữ liệu có tồn tại hay không
        if (isset($user['password'])){
            // Kiểm tra mật khẩu
            $verify = password_verify($password, $user['password']);
            if ($verify){
                // Truy vấm cập nhập
                $sql = "UPDATE
                        `instructor`
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
    // Hàm chọn 1 hàng dữ liệu
    function selectOne($key,$value){
        $sql = "SELECT * FROM `instructor` WHERE `$key` = '$value'";
        $user = mysqli_query($this->connection,$sql);
        // Ép dữ liệu từ mảng về biên
        $user = mysqli_fetch_array($user);
        return $user;
    }
    // Hàm update
    function updateOne($id, $name, $email, $phone_number, $gender, $avatar, $school_level, $subject, $address, $description){
        // Câu truy vấn
        $sql = "UPDATE
                    `instructor`
                SET
                    `name` = '$name',
                    `email` = '$email',
                    `phone_number` = '$phone_number',
                    `gender` = '$gender',
                    `avatar` = '$avatar',
                    `school_level`  = '$school_level',
                    `subject`   = '$subject',
                    `address` = '$address',
                    `description` = '$description'
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