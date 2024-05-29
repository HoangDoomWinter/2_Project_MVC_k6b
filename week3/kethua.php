<html>
    <?php
        class Fruit{ #lop cha
            public $name;
            public $color;
            public function __construct($name, $color){
                $this -> name = $name;
                $this -> color = $color;
            }    
            public function intro(){
                echo " the fruit is {$this ->name} end the color is {$this -> color}";
            }                          
        }

        class Strawberry extends Fruit {
            public function message(){
                echo " i am the Fruit";
            }

        }
        $strawberry = new Strawberry("strawberry","red");
        $strawberry ->message();
        $strawberry->intro();
    ?>
</html>