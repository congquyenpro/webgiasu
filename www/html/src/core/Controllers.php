<?php
    class Controllers{
        // hàm gọi model
        protected function model($model){
            require_once "./src/models/". $model .".php";
            return new $model;
        }
        // Hàm gọi phần view
        protected function view($template,$view,$name_page,$data=[]){
            $actual_link = $this->getUrl();
            require_once "./src/views/template/". $template .".php";
        }
        //  nhận đường dẫn hiện tại
        protected function getUrl(){
            if ("$_SERVER[HTTP_HOST]" == "localhost"){
                return "/web_gia_su";
            }
            return "http://$_SERVER[HTTP_HOST]";
        }
    }
?>