<?php
    class Home extends Controller {
        function displayIntrodution()
        {
            echo "Hello";
        }

        function displayUser() 
        {
            echo "Welcome Kin TiNo";
        }

        function displayIndex() {
            $this->view("master", ["Page" => "home"]);
        }
    }
?>