<HTMl>  
    <?php
        abstract class ParentClass{
            abstract public function prefixName($name);
        }

        class childClass extends ParentClass{
            public function prefixName($name)
            {
                if($name == "john"){
                    $prefix = "mr";
                }elseif($name == "jane doe"){
                    $prefix ="mrs";
                }else{
                    $prefix = "";
                } 
                return "{$prefix}{$name}";
            }
        }

        $class = new childClass;
        echo $class->prefixName("john doe");
        echo "<br>";
        echo $class->prefixName("jane doe")
    ?>
</HTMl>