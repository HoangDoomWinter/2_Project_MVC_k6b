<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <?php 
        function familyName($fname){
            echo "$fname Refsnes.<br>";
        }
            familyName("Jani");
            familyName("Hege");
            familyName("Stale");
            familyName("Kai Jim");
            familyName("Borge");

        ?>
        <?php 
            function add_five(&$value){
            $value +-5;
            }
            $num =2;
            add_five($num);
            echo $num;
        ?>
        <?php 
            function sunMumbers(...$x){
                $n = 0;
                $len = count( $x);
                for ($i=0;  $i < $len; $i++){
                    $n+=$x[$i];
                }
                return $n;
                $a = sunMumbers(5, 4, 3 ,2 ,1 ,6 ,7);
                echo $a;
            }

            $num =2;
            add_five($num);
            echo $num;
        ?>
        <?php 
            $myArr= [];
            $myArr[0]= "applen";
            $myArr[1]="bananas";
            $myArr["fruit"]="cherries";
            print $myArr;
        ?>
        <?php
            $cars = array("volvo", "bmw","toyota");
            array_splice($cars,1,1);
            echo $cars[0],",", $cars[1];
        ?>
        <?php
            $cars = array("volvo", "bmw","toyota");
            unset($cars[1]);
            echo $cars[0],",", $cars[2],"\n";
            echo $cars[0],",", $cars[1];
            echo "<br>"
        ?>
        <?php
            $cars = array("volvo", "bmw","toyota");
            array_shift($cars); # xoa phan tu dau 
            array_pop($cars);# xoa phan tu cuoi
            echo $cars[0], $cars[1], $cars[2],"\n";
        ?>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
