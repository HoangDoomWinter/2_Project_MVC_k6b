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
        
        <?php
        // this is a comment
        #this is a comment
        /* this is 
        comment all */
       /* ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        Echo "Hello World!<br>";
        */
        /*
        $color = "blue";
        $COLOR = "red";
        $coLOR = "pink";
        echo "My car is". $color ."<br>";
        echo "My House is". $COLOR ."<br>";
        echo "My Booat is". $coLOR ."<br>";
        $ThisIsVariables = "Value"; // this is Variables and Gia Tri
        */
        /*
        $txt = "Hanoi";
        echo "I Love $txt!<br>";
        echo " I Love" . $txt . "!<br>";
        $x = 5;
        $y = 6;
        echo $x+$y;

        $x = 5;
        $y = "Jonh";

        echo $x;
        echo "<br>";
        echo $y ;
        $name ="Nguyen Van An";
        echo " xin chao <H1> $name ! </H1>";
        var_dump($x);
        var_dump($y);
        var_dump(3.14);
        var_dump(true);
        var_dump([2, 3, 56]);
        var_dump(NULL);
        echo "<br>";
        // gan gia tri cho nhieu bien
        $x = $y = $z = "Fruit";
        echo $x;
        echo $y;
        echo $z;
        */

        /*
        //tess vd1

        $x = 5;
        function myTest(){
            global $x;        
            echo "<p> bien o ben trong ham functuon la: $x </P>";

        }
        myTest();
        echo "<p> bien o ngoai ham funtion la: $x </p>";
        */
        /*
        //tesst vd2
        $m = 5;
        $n = 6;
        function myTest2(){
            global $m, $n;
            $p = $m+$n;
        }
        */
        /*
        function myTest(){
            static $x = 0;
            echo $x;
            $x++;
        }
        myTest();
        echo "<br>";
        myTest();

        
       // array("Volo","khgfk","dhfsh");
        */
        /*
        $name = "Nguyen Thanh An";
        $lop = "KHMTK6B";

        echo "Xin Chao \"$name\" hoc lop \"$lop\" ! ";
        */

       // PHP_INT_MAX;// duwa ra gia tri lon nhat
       // PHP_INT_Min; // dua ra gia tri nho nhat
       // PHP_INT_SIZE; // dua ra gi tri kich thuoc
       // PHP_FLOAT_MAX/MIN // tra ve gia tri lon nhat nhor nhat cua so thuc
       // PHP_FLOAT_DIG 
       
       $x = 5985;
       var_dump(is_numeric($x));
       echo "<br>";
       $x = "5985";
       var_dump(is_numeric($x));
       echo "<br>";
       $x ="59.85" + 100;
       var_dump(is_numeric($x));
       echo "<br>";

       // tao ra sau
       define("Name", " xin chao dai hoc ha long");
       echo Name;
       echo "<br>";

       $ho = "Nguyen Van";
       $ten = "Minh";
       echo $ten . $ho;
       echo "<br>";
       echo $ho .= $ten;

       //bai tap

       $Hoten = "Nguyen An";
       $GioiTinh = "Nam" ;
       $Tuoi = 25 ;


       if($Tuoi < 20){
        echo " xin chao em $Hoten";
       }elseif($Tuoi >= 20){
            if($GioiTinh == "Nam"){
                echo " xin chao anh \"$Hoten\" ";
            }else {
                echo " xin chao chi";
        }
       }
        elseif($Tuoi >= 40){
            if($GioiTinh == "Nam"){
                echo " xin chao bac";
            }else {
                echo " xin chao co";
            }
        }
        
        elseif($Tuoi > 60 ){
            if($GioiTinh == "Nam"){
                echo " xin chao ong";
            }else {
                echo " xin chao ba";
            }
        }

        /* swich(dieu khien){
            case dieukien1:
             code
            break;
            case dieukien2
                code
            break;
        default:
            code
        }*/
        // bai tap: nhap vao 1 nam va 1 thang trong nam do neu nam nhuan thi se la 29
        echo "<br>";
        $nam = 2024;
        $thang = 5;

        switch($thang){
            case $thang== 1:
                echo "day khong phai nam nhuan";
                break;
            case $thang == 2:
                echo "day khong phai nam nhuan";
                break;
            case $thang ==3:
                echo "day khong phai nam nhuan";
                break;
            case $thang == 4:
                echo "day khong phai thang nhuan";
                break;
            case $thang == 5:
                echo "day la thang nhuan";
                break;
            case $thang == 6:
                echo "day khong phai thang nhuan";
                break;
            case $thang == 7:
                echo "day khong phai thang nhuan";
                break;
            case $thang == 8:
                echo "day khong phai thang nhuan";
                break;
            case $thang == 9:
                echo "day khong phai thang nhuan";
                break;  
            case $thang == 10:
                echo "day khong phai thang nhuan";
                break; 
            case $thang == 11:
                echo "day khong phai thang nhuan";
                break;
            case $thang == 12:
                echo "day khong phai thang nhuan";
                break;         

        }
        // vong lap
        /*
        while(dieukien){
            code theo dang c c#....
        }

        while(dieukien):
            code theo dang python
        endwhile;

        do{
            code...
        }while(dieuKien);

        for(dieukien1, dieukien2, dieukien3){
            code
        }

        foreach($array as $value){
            code
        }

        froeach($array as $key => $dieukien){

        }
        */
        // bai tap: tao 1 mang gom ten cua ten sinh vien in ten ra man hinh moi ten tren 1 dong
        //bai tap 2: tao 1 mang chua thong tin cua khach hang bao gom ten, dia chi, gioi tinh, sdt, tuoi. dua ra thong tin cua khach hang do
        $tensv = array("nguyen van A", "Nguyen Van ongdee", "nguyen thi max", "Bui van bac");
        foreach($tensv as $ten){
            echo "ho ten sinh vien la $ten ! <br>";
        }
        //////////////////////////////////////////////////////////////////////////
        $khach_hang = array(
            "ten" => "Nguyen QUoc Bao",
            "dia_chi" => "Quảng Ninh",
            "gioi_tinh" => "Nam",
            "so_dien_thoai" => "0123456789",
            "tuoi" => 21
        );
        
        foreach ($khach_hang as $key => $element) {
            echo $key . ": " . $element . "<br>";
        }
        ////////////// ham
        /*
        function functionname([$var1,....$varn]){
            code
        }

         function functionname([$var1,....$varn]){
            code
            return $value;
        }
        bai tap1 viet 1 ham nhap vao diem so dua ra diem chu
        bai tap 2 viet 1 ham de xet hoc bong dua vao dtb kh va dtbrl
        */
        function diemSoToDiemChu($diem) {
            $diemChu = '';       
            if ($diem >= 9) {
                $diemChu = 'A+';
            } elseif ($diem >= 8.5) {
                $diemChu = 'A';
            } elseif ($diem >= 7.5) {
                $diemChu = 'B+';
            } elseif ($diem > 7) {
                $diemChu = 'B';
            } elseif ($diem >= 6) {
                $diemChu = 'C+';
            } elseif ($diem >= 5) {
                $diemChu = 'C';
            } elseif ($diem >= 4) {
                $diemChu = 'D';
            } else {
                $diemChu = 'F';
            }
        
            return $diemChu;
        }
        $diem1 = 8;
        $diem2 = 9;
        $diem3 = 2;
        
        echo "Điểm số $diem1 chuyển thành điểm chữ: " . diemSoToDiemChu($diem1) . "<br>";
        echo "Điểm số $diem2 chuyển thành điểm chữ: " . diemSoToDiemChu($diem2) . "<br>";
        echo "Điểm số $diem3 chuyển thành điểm chữ: " . diemSoToDiemChu($diem3) . "<br>";
           
        ?>
        <header>
            <!-- place navbar here -->
        </header>
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
