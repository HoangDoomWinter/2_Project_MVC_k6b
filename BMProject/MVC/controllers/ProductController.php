<?php
    class ProductController extends Controller
    {
        public $productModel;

        public function __construct()
        {
            $this->productModel = $this->model("ProductModel");
        }

        function displayIntroduction() 
        {
            $this->view("master", ["Page" => "home"]);
        }

        function getProductsbyBand() 
        {
            $this -> view("master", [
                "Page" => "getProductsbyBand"
            ]);
        }

        function displayProductByBand() 
        {
            if (isset($_POST["btSearch"])) {
                $band = $_POST["selectBand"];
                $tblname = 'tblproduct';
                $field = "band";
                $products = $this->productModel->getRecordbyField($tblname, $field, $band);
                $this->view(
                    "master",
                    [
                        "Page" => "getProductsbyBand",
                        "Products" => $products
                    ]
                );
            }
        }

        function getProductsbyYear() 
        {
            $this -> view("master", [
                "Page" => "getProductsbyYear"
            ]);
        }

        function displayProductByYear() 
        {
            if (isset($_POST["btSearch"])) {
                $year = $_POST["selectYear"];
                $tblname = 'tblproduct';
                $field = "year";
                $products = $this->productModel->getRecordbyField($tblname, $field, $year);
                $this->view(
                    "master",
                    [
                        "Page" => "getProductsbyYear",
                        "Products" => $products
                    ]
                );
            }
        }

        function getProductsbyYearandCompany() 
        {
            $this -> view("master", [
                "Page" => "getProductsbyYearandCompany"
            ]);
        }

        function displayProductByYearandCompany() 
        {
            if (isset($_POST["btSearch"])) {
                if (isset($_POST["checkCompany"]) && isset($_POST["checkYear"])) {
                    $year = $_POST["selectYear"];
                    $company = $_POST["selectCompany"];
                    $tblname = 'tblproduct';
                    $field1 = "year";
                    $field2 = "company";
                    $products = $this->productModel->getRecordby2Field($tblname, $field1, $field2, $year, $company);
                } else if(isset($_POST["checkYear"])) {
                    $year = $_POST["selectYear"];
                    $tblname = 'tblproduct';
                    $field1 = "year";
                    $products = $this->productModel->getRecordbyField($tblname, $field1, $year);
                } else if (isset($_POST["checkCompany"])){
                    $company = $_POST["selectCompany"];
                    $tblname = 'tblproduct';
                    $field2 = "company";
                    $products = $this->productModel->getRecordbyField($tblname, $field2, $company);
                } else {
                    echo "Nhập 1 trong 2.";
                }
                $this->view(
                    "master",
                    [
                        "Page" => "getProductsbyYearandCompany",
                        "Products" => $products
                    ]
                );
            }
        }

        function getOrderCustomer() 
        {
            $this -> view("master", [
                "Page" => "getOrderCustomer"
            ]);
        }

        function displayOrderCustomer() 
        {
            if (isset($_POST["btSearch"])) {
                $cid = $_POST["inpCID"];
                $oid = $_POST["inpOID"];
                $tblname = 'viewordercustomer';
                $field1 = "cid";
                $field2 = "oid";
                $products = $this->productModel->getRecordby2Field($tblname, $field1, $field2, $cid, $oid);
                $this->view(
                    "master",
                    [
                        "Page" => "getOrderCustomer",
                        "Products" => $products
                    ]
                );
            }
        }
        
        function impInsertProduct() 
        {
            $this -> view("master", [
                "Page" => "insertProduct"
            ]);
        }

        function insertProduct() {
            if (isset($_POST["btInsert"])) {
                $id = $_POST["id"];
                $pname = $_POST["pname"];
                $company = $_POST["company"];
                $selectband = $_POST["selectBand"];
                $year = $_POST["selectYear"];
                if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                    $img = 'data: image/png;base64,'
                    . base64_encode(file_get_contents($_FILES['img']["tmp_name"]));
                }

                $result = $this->productModel->insertProduct($id, $pname, $company, $year, $selectband, $img);
                $this->view(
                    "master",
                    [
                        "Page" => "insertProduct",
                        "result" => $result
                    ]
                );
            }
        }

        function impdelProduct() 
        {
            $this -> view("master", [
                "Page" => "deleteProduct"
            ]);
        }

        function deleteProduct() 
        {
            if (isset($_POST["btDelete"])) {
                $id = $_POST["id"];
                $tblname = 'tblproduct';
                $field = "pid";
                $result = $this->productModel->delProduct($tblname, $field, $id);
                $this->view(
                    "master",
                    [
                        "Page" => "deleteProduct",
                        "result" => $result
                    ]
                );
            }
        }

        function displayProducts() 
        {
            $this -> view("master", [
                "Page" => "getAllProduct"
            ]);
        }
        function getAllProduct()
        {
            $tblname = 'tblproduct';
            $result = $this->productModel->getRecord($tblname);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $products[] = $row;
                }
            }
            $this->view(
                "master",
                [
                    "Page" => "getAllProducts",
                    "Products" => $products
                ]
            );
        }

    }
?>