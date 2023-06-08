<?php
class home extends Controllers{
    // Hiển thị phần home
    public function read(){
        $this->view("user","user/home","Trang chủ",[]);
    }
    // Hiển thị phần blog khách hàng
    public function user_blog($route = []){
        // Sử lý phần tìm kiếm
        $search = "";
        if (isset($_GET['search'])){
            $search = $_GET['search'];
        }
        $model = $this->model('blogModels');
        $blogs = $model->selectValues(1,$search);
        $this->view("user","user/Blog","blog khách hàng 1",[$search, $blogs]);
    }
    // Hiển thị phần blog gia sư
    public function tutor_blog($route = []){
        // Sử lý phần tìm kiếm
        $search = "";
        if (isset($_GET['search'])){
            $search = $_GET['search'];
        }
        $model = $this->model('blogModels');
        $blogs = $model->selectValues(2,$search);
        $this->view("user","tutor/Blog","blog gia sư",[$search, $blogs]);
    }
    // Xem blog chi tiết
    public function view_blog($route = []){
        $model = $this->model('blogModels');
        $blog = $model->selectById($route[0]);
        $this->view("user","user/viewBlog",$blog["title"],$blog);
    }
    // Hàm tạo blog
    public function create_blog(){
        // Kiểm tra đăng nhập
        if (isset($_SESSION['lever'])){
            $this->view("user","createBlog","Viết Blog",[]);
        }else{
            $actual_link = $this->getUrl();
            $_SESSION['error'] = "Bạn phải đăng nhập để tạo blog";
            header("Location: $actual_link/tutor/login");
        }
    }
    // Hiển thị blog của tôi
    public function my_blog(){
        // Kiểm tra đăng nhập
        if (!isset($_SESSION['lever'])){
            $actual_link = $this->getUrl();
            $_SESSION['error'] = "Bạn phải đăng nhập để tạo blog";
            header("Location: $actual_link/tutor/login");
        }else{
            $search = "";
            if (isset($_GET['search'])){
                $search = $_GET['search'];
            }
            $model = $this->model('blogModels');
            $blogs = $model->selectValuesById($search);
            $this->view("tutor","myBlog","my blog",[$search, $blogs]);
        }
    }
    // Xử lý tạo blog
    public function save_blog(){
        // Dữ liệu gửi lên
        $model = $this->model('blogModels');
        $user_id    =  addslashes($_SESSION['id']);
        $type       =  addslashes($_SESSION['lever']);
        $title      =  addslashes($_POST['title']);
        $description=  addslashes($_POST['description']);
        $content    =  addslashes($_POST['content-blog']);
        
        // Xử lý file
        $file = basename($_FILES["image"]["name"]);
        $target_file = "./public/images/blog";
        $date = new DateTime();
        // Đặt tên file
        $image = $_SESSION['name'] . $date->getTimestamp() . "." . strtolower(pathinfo($file,PATHINFO_EXTENSION));
        $target_file = $target_file . "/" . $image;
        // Lưu file
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);   

        $actual_link = $this->getUrl();
        if ($model->Create($user_id, $type, $title, $image, $description, $content)) {
            header("Location: $actual_link/home/my_blog");
        }else{
            header("Location: $actual_link/home/create_blog");
        }
    }
    public function hire(){
        $this->view("user","user/register","Đăng kí thuê gia sư",[]);
    }
    public function hire_possessing(){
        $model = $this->model('clientModels');
        $name =addslashes($_POST['name']);
        $gender = addslashes($_POST['gender']);
        $email = addslashes($_POST['email']);
        $phone = addslashes($_POST['phone']);
        $address = addslashes($_POST['address']);

        $model->createValue($name,$gender,$email,$phone,$address);
        $actual_link = $this->getUrl();

        header("Location: $actual_link/home/thank_hire");

    }
    public function thank_hire(){
        $this->view("user","user/thank_register","Cảm ơn",[]);
    }
}
?>