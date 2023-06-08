<?php
class App{
    // Định nghĩa giá trị
    private $url = [];
    private $controller = "home";
    private $action = "read";
    private $route = [];

    // Hàm main chính
    function __construct() {
        // Nhận các định nghĩa về controller, action, route
        $this->ConvertUrl();
        $this->getController();
        $this->getAction();
        $this->route = $this->url?array_values($this->url):[];
        // Gọi hàm 
        call_user_func([$this->controller, $this->action], $this->route);
    }

    // Hàm chỉnh sửa, tách đường dẫn
    public function ConvertUrl(){
        if(isset($_GET['url'])){
            // Tách biến thành mảng
            $this->url = explode("/", trim($_GET['url']));
        }
    }

    // Gọi controllers
    public function getController(){
        if (isset($this->url[0])){
            // Kiểm tra xem file có tồn tại hay không
            if (file_exists("./src/controllers/". strtolower($this->url[0]) .".php")){
                $this->controller = strtolower($this->url[0]);
            }else{
                $this->controller = "home";
            }
            unset($this->url[0]);
        }
        // Gọi file vừa kiểm tra
        require_once "./src/controllers/". $this->controller .".php";
        // Tạo gọi class
        $this->controller = new $this->controller;
    }

    // Hàm chỉnh sửa, tách đường dẫn
    public function getAction(){
        if (isset($this->url[1])){
            // Kiểm tra xem hàm có tồn tại hay không
            if (method_exists($this->controller, strtolower($this->url[1]))){
                $this->action = strtolower($this->url[1]);
            }else{
                $this->action = "errors";
            }
            unset($this->url[1]);
        }
    }

}
?>