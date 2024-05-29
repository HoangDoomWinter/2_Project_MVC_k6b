<html>
<?php
    class Fruit{
        public $name;
        public $color;
        public $weight;
        function set_name($n){
            $this->name = $n;
        }
        protected function set_color($n){
            $this->color = $n;
        }
        private function set_weight($n){
            $this->weight = $n;
        }
    }
    $mango = new Fruit();
    $mango->set_name("Mango");
    $mango->set_color("yellow");
    $mango->weight = "weight";
?>
</html>
# tao 1 lop product chua thuoc tinh id name company color 
