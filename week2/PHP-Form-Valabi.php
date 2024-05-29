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
    <style>        
          .main {
            width: 700px;
            margin-left: 600px;
            margin-top: 100px;
            border: #ff0000 solid 2px;  
          }
          .login{
            margin-left: 150px;
          }
          input{
            max-width: 500px;
          }
          select{
            max-width: 500px;
          }

         
      </style>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <div class="main">
    <h1>PHP Form Validation Example</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                aria-describedby="nameHelpId"
                placeholder="Enter your name"
            />
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                name="email"
                id="email"
                aria-describedby="emailHelpId"
                placeholder="abc@mail.com"
            />
        </div>

        <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input
                type="text"
                class="form-control"
                name="website"
                id="website"
                aria-describedby="websiteHelpId"
                placeholder="Enter your website (optional)"
            />
        </div>

        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <input
                type="text"
                class="form-control"
                name="comment"
                id="comment"
                aria-describedby="commentHelpId"
                placeholder="Enter your comment"
            />
        </div>

        <label class="form-check-label" for="gender">Gender</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Female" id="gender-radio-female" />
            <label class="form-check-label" for="gender-radio-female">Female</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Male" id="gender-radio-male" />
            <label class="form-check-label" for="gender-radio-male">Male</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="Other" id="gender-radio-other" />
            <label class="form-check-label" for="gender-radio-other">Other</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = $email = $gender = $comment = $website = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);

        echo "<h2>Your Input:</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Website:</strong> $website</p>";
        echo "<p><strong>Comment:</strong> $comment</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
    }
    ?>
</div>

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
