<html>
    UserName: <?php echo $_POST["name"]; ?><br>
    Password: <?php echo $_POST["password"]; ?><br>
    city of Employment: <?php echo $_POST["city"]; ?><br>
    City: <?php echo $_POST["scity"]; ?><br>
    Role: <?php echo $_POST["role"]; ?><br>

    <?php
        $select_sso = $_POST['sso'];
        echo "Select sso server: ";
        foreach ($select_sso as $sso) {
            echo  "sso is <br> " ;
        }         

    ?>
</html>