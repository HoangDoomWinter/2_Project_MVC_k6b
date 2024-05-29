<?php
    class Application {
        protected $controller = "Home";
        protected $action = "displayIndex";
        protected $params = [];

        function __construct()
        {
            $arr = $this->urlProcess();
            $n = count($arr);

            #Xử lí controller
            if (file_exists("./MVC/controllers/" . $arr[$n-2] . ".php")) { #kiểm tra file có tồn tại hay không
                $this->controller = $arr[$n-2];
                unset($arr[$n-2]); #dùng xong thì phải huỷ
            }

            require_once "./MVC/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;

            #xử lí actions
            if (isset($arr[$n-1])) {
                if (method_exists($this->controller, $arr[$n-1])) {
                    $this->action = $arr[$n-1];
                }
                unset($arr[$n-1]);
            }

            #xử lí params
            $this->params = $arr ? array_values($arr) : [];
            call_user_func_array([new $this->controller, $this->action], $this->params);
        }

        function urlProcess() 
        {
            if (isset($_SERVER["REQUEST_URI"])) {
                //echo $_SERVER["REQUEST_URI"], "<br>";
                return explode("/", filter_var(trim($_SERVER['REQUEST_URI'], "/"))); #explode: tách phần phần trong mảng bởi dấu sọc; filter_var :lọc ra biến
            }
        }
    }
?>