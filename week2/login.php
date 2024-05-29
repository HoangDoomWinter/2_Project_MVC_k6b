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
        <style>        
          .sump {
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
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <div class="sump">
            <form action="Form_Login.php" method="post">
                <div class="login"><h1>Login From</h1></div>
                <div class="mb-3">
                    <label for="" class="form-label">username</label>
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id=""
                        aria-describedby="helpId"
                        placeholder="nhập tên"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        id=""
                        placeholder="nhập mật khẩu"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">city of Employment</label>
                    <input
                        type="text"
                        class="form-control"
                        name="city"
                        id=""
                        aria-describedby="helpId"
                        placeholder="nhập thành phố"
                    />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <select
                        class="form-select form-select-lg"
                        name="scity"
                        id=""
                    >
                        <option selected>Select one</option>
                        <option value="">New Delhi</option>
                        <option value="">Istanbul</option>
                        <option value="">Jakarta</option>
                    </select>
                </div>

                <label class="form-check-label" for=""> Please specity your role </label>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="Admin" id="admin-radio" />
                    <label class="form-check-label" for=""> Admin </label>
                    
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="Engineer" id="admin-radio" />
                    <label class="form-check-label" for=""> Engineer </label>
                    
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="Manager" id="admin-radio" />
                    <label class="form-check-label" for=""> Manager </label>
                    
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="role" value="Guest" id="admin-radio" />
                    <label class="form-check-label" for=""> Guest </label>
                    
                </div>
                
                <label class="form-check-label" for=""> Single Sign-on to the following </label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="sso[]" value="Mail" id="Mai-lcheckbox" />
                    <label class="form-check-label" for=""> Mail </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="sso[]" value="Payroll" id="Payroll-checkbox" />
                    <label class="form-check-label" for=""> Payroll </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="sso[]" value="Setf-service" id="Setf-service-checkbox" />
                    <label class="form-check-label" for=""> Setf-service </label>
                </div>      

                <button
                    type="login"
                    class="btn btn-primary"
                >
                    Login
                </button>   
                <button
                    type="reset"
                    class="btn btn-primary"
                >
                    Reset
                </button>
                        
            </form>
        </div>

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
