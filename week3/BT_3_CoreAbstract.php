
<?php
        abstract class Product{
            

            public function set_id($Id) {
                $this->Id = $Id;
            }
            public function get_id() {
                return $this->Id;
            }
        
            public function set_name($Name) {
                $this->Name = $Name;
            }
            public function get_name() {
                return $this->Name;
            }
            abstract public function toString();
          
        }
        

        class Laptop extends Product{
            public $Company;
            public $Color;
            public $Amount;
            public $Price;
            
            public function set_company($Company){
                $this ->Company = $Company;
            }
            public function get_company(){
                return $this ->Company;
            }

            public function set_color($Color){
                $this ->Color = $Color;
            }
            public function get_color(){
                return $this ->Color;
            }

            public function set_amount($Amount){
                $this ->Amount = $Amount;
            }
            public function get_amount(){
                return $this ->Amount;
            }
            public function set_price($Price){
                $this ->Price = $Price;
            }
            public function get_price(){
                return $this ->Price;
            }  

            public function toString() {
                return "ID: " . $this->Id . ", Name: " . $this->Name.  " Company: " . $this->Company . ", Color: " . $this->Color . ", Amount: " . $this->Amount . "-" . $this->Price."-".$this->subtotal();
            }
            public function subtotal() {
                return intval( $this->Price) * intval( $this-> Amount);
            }

        }

    ?>