<?php 
class admin extends Controllers{
    // Kiểm tra đăng nhập
    public function checkLogin(){
        // Kiểm tra xem trong session có tồn tại phiên đăng nhập không
        if (isset($_SESSION['lever']) == false){
            return false;
        }
        // Kiểm tra cấp
        if ($_SESSION['lever'] == 1){
            return true;
        }
        return false;
    }
    // hiển thị đăng nhập
    public function login(){
        $this->view("user","user/login","Đăng nhập",[]);
    }
    // hiển thị tài khoản của tôi
    public function my_account(){
        if ($this->checkLogin() == false){
            $actual_link = $this->getUrl();
            // Nếu chưa đăng nhập thì render về trang đăng nhập
            header("Location: $actual_link/admin/login");
        }
        // gọi model của user
        $model = $this->model('userModels');
        // Tìm Kiếm dữ liệu từ id được lưu ở SESSION
        $myAccount = $model->selectOne('id',$_SESSION['id']);
        // Hiển thi
        $this->view("user","user/myAccount","Tài khoản của tôi",[
            'email'         => $myAccount['email'],
            'phone_number'  => $myAccount['phone_number'],
            'gender'        => $myAccount['gender'],
            'address'       => $myAccount['address'],
        ]);
    }
    // Hiên Thị đổi mật khẩu
    public function change_password(){
        if ($this->checkLogin() == false){
            $actual_link = $this->getUrl();
            header("Location: $actual_link/admin/login");
        }else{
            $this->view("user","editPassword","Đổi mật khẩu",[]);
        }
    }
    // Sử lý đổi mật khẩu
    public function change_password_processing(){
        // Nhận dữ liệu gửi lên
        $password   = addslashes($_POST['old_pass']);
        $new_pass   = addslashes($_POST['new_pass']);

        // Mã hóa mật khẩu
        $secure_pass = password_hash($new_pass, PASSWORD_BCRYPT);

        // Gọi model
        $save = $this->model("userModels");
        $actual_link = $this->getUrl();
        
        // Kiểm tra mật khẩu
        if ($save->ChangePass($password,$secure_pass)){
            $_SESSION['done'] = "Đổi mk thành công";
            header("Location: $actual_link/admin/my_account");
        }else{
            $_SESSION['error'] = "Mật khẩu cũ không đúng";
            header("Location: $actual_link/admin/change_password");
        }
    }
    // Hiên Thị đổi mật khẩu
    // Xử lý đằng nhâp
    public function login_processing(){
        // Nhận dữ liệu gửi lên
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        
        // Gọi model
        $login = $this->model("userModels");
        $actual_link = $this->getUrl();

        // Gọi hàm Đăng nhập và kiểm tra
        if($login->loginUser($email,$password)){
            header("Location: $actual_link/admin/my_account");
        }else{
            $_SESSION['error'] = "Email hoặc mật khẩu không đúng!";
            header("Location: $actual_link/admin/login");
        }
    }
    // Xửa lý đăng xuất
    public function logout(){
        // Xóa Phiên và render về trang login
        session_destroy();
        $actual_link = $this->getUrl();;
        header("Location: $actual_link/admin/login");
    }
    // Sử lý cập nhập tài khoản
    public function update(){  
        // Nhận dữ liệu gửi lên
        $name           = addslashes($_POST['name']);
        $email          = addslashes($_POST['email']);
        $phone_number   = addslashes($_POST['phone_number']);
        $gender         = addslashes($_POST['gender']);
        $address        = addslashes($_POST['address']);
        $avatar         = $_SESSION['avatar'];

        // Xử lý file gửi lên
        $file = basename($_FILES["avatar"]["name"]);
        // Kiểm tra xem tên có rỗng không
        if ($file != ""){
            // Tạo tên
            $target_file = "./public/images/avatar";
            $date = new DateTime();
            $avatar = $name . $date->getTimestamp() . "." . strtolower(pathinfo($file,PATHINFO_EXTENSION));
            $target_file = $target_file . "/" . $avatar;
            // Lưu file
            move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);   
        }
        // Gọi model
        $save = $this->model("userModels");
        $actual_link = $this->getUrl();;
        // Lưu giá trị
        if ($save->updateOne($_SESSION['id'], $name, $email, $phone_number, $gender, $avatar, $address)){
            // Cập nhập lại session
            $_SESSION['name']   = $name;
            $_SESSION['avatar'] = $avatar;
            $_SESSION['done'] = "Thay Đổi thông tin thành công!";
            header("Location: $actual_link/admin/my_account");
        }else{
            $_SESSION['error'] = "Lỗi Trùng email!";
            header("Location: $actual_link/admin/my_account");
        }
    }
    // Xem toàn bộ client
    public function client($data = []){
        $type = "1";
        if (isset($data[0])){
            $type = $data[0];
        }
        $clients = $this->model("clientModels");
        $clients = $clients->selectValues($type);
        $this->view("user","user/viewClient","Xem khách hàng",[$clients]);
    }
    public function set_client($data = []){
        $id = $data[0];
        $type = $data[1];
        $clients = $this->model("clientModels");
        $clients = $clients->updateClient($id, $type);
        $actual_link = $this->getUrl();
        header("Location: $actual_link/admin/client");
    }
}