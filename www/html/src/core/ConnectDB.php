<?php
    class ConnectDB{
        // Thông tin về web
        protected $connection;
        private $hostname = 'db4';
        private $user = 'root';
        private $password = 'mypassword';
        private $nameDB = 'testdb'; 

        // kết nối với DB
        function __construct(){
            $this->connection = mysqli_connect("$this->hostname","$this->user","$this->password","$this->nameDB");
            if (!$this->connection){
                die ('Failed to connect with server');
            }  
            mysqli_set_charset($this->connection,'utf8');
        }
    }
?>