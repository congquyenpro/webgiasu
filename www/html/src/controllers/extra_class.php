<?php
class extra_class extends Controllers{
    // Hiển thị tạo lớp
    public function create(){
        // Kiểm tra đăng nhập
        if(!isset($_SESSION['lever']) || $_SESSION['lever'] != 1){
            $actual_link = $this->getUrl();
            $_SESSION['error'] = "Bạn phải đăng nhập để tạo lớp";
            header("Location: $actual_link/admin/login");
        }
        $model      = $this->model("subjectModels");
        $subject    = $model->getAllValues();
        $this->view("user","user/createClass","Tạo khóa học", $subject);
    }
    // xử lý tạo lớp
    public function create_processing(){
        // Dữ Liệu gửi lên
        $user_id        = $_SESSION['id'];
        $subject_id     = addslashes($_POST['subject_id']);
        $lever          = addslashes($_POST['lever']);
        $location       = addslashes($_POST['location']);
        $gender         = addslashes($_POST['gender']);
        $day_in_week    = addslashes($_POST['day_in_week']);
        $description    = addslashes($_POST['description']);
        $price          = addslashes($_POST['price']);

        // Gọi model
        $model          = $this->model("postClassModels");
        $actual_link = $this->getUrl();
        // Lưu dữ liệu và kiểm tra
        if($model->createValues($user_id, $subject_id, $lever, $location, $gender, $day_in_week, $description, $price)){
            header("Location: $actual_link/extra_class/class_list");
        }else{
            header("Location: $actual_link/extra_class/create");
        }
    }

    // Hiển thị các lớp
    public function class_list(){
        // gọi model và hàm lấy dữ liệu
        $model      = $this->model("postClassModels");
        $newClass   = $model->selectValues();
        $model      = $this->model("subjectModels");
        $subject    = $model->getAllValues();
        $this->view("tutor","tutor/newClassList","Danh sách lớp",[$newClass, $subject]);
    }
    // Tìm kiếm lớp
    public function find_class(){

        $subject_id = $_POST['subject'];
        $lever      = $_POST['lever'];

        // gọi model và hàm lấy dữ liệu
        $model      = $this->model("postClassModels");
        $newClass   = $model->findValue($subject_id, $lever);
        $model      = $this->model("subjectModels");
        $subject    = $model->getAllValues();
        $this->view("tutor","tutor/newClassList","Danh sách lớp",[$newClass, $subject]);
    }

    // Xem lớp
    public function view_class($route = []){
        // Nếu trang không có route
        if (count($route) == 0){
            $this->class_list();
        }
        // Gọi model môn học
        $model      = $this->model("postClassModels");
        $viewClass   = $model->selectOneValue($route[0]);
        $this->view("tutor","tutor/viewClass","Xem lớp",$viewClass);
    }
}