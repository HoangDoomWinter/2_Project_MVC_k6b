<!doctype html>
<html lang="en">
    <head>
        <title>Example</title>
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
        <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    img {
        max-width: 100px;
        max-height: 100px;
    }
</style>
    </head>

    <body>
        <header id = "header">
            <!-- place navbar here -->
            <?php
                require_once "layout/top_v2.php";
            ?>
        </header>
        <main>
            <div id="banner">
                <?php
                    require_once "layout/banner.php";
                ?>
            </div>
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <?php
                        require_once "layout/left.php";
                    ?>
                    <div class="col py-3">
                        <?php
                            require_once "./MVC/views/pages/" . $data["Page"] . ".php";
                        ?>
                    </div>
                </div>
            </div>
        </main>
        <footer id = "footer">
            <!-- place footer here -->
            <?php
                require_once "layout/bottom_v2.php";
            ?>
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
