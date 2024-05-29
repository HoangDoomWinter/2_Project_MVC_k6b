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
    class Fruit{
        public $name;
        public $color;

        function set_name($name){ # gán thì dùng set lấy thì dùng get
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }

        function set_color($color){
            $this->color = $color;                   
        }

        function get_color(){
            return $this->color;
        }
    }

    #cú pháp tạo đối tượng $<object Name> = new <class name>();
    $lemon = new Fruit();
    $lemon->set_name("Lemon");
    echo "The first fruit is ".$lemon->get_name()."<br>";

    $blueberry = new Fruit();
    $blueberry->set_name("Blueberry");
    echo "The second fruit is ".$blueberry->get_name()."<br>";

    $Apple = new Fruit();
    $Apple->set_color("Red");
    echo "The first fruit is ".$Apple->get_color()."<br>";
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
