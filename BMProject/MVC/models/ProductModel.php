<?php
    class ProductModel extends dbProduct {
        public function getRecord($tablename) 
        {
            $qr = "SELECT * FROM $tablename";
            return mysqli_query($this->con, $qr);
        }

        public function getRecordbyField($tblname, $field, $keyword) {
            $sql = "SELECT * FROM $tblname where $field='$keyword'";
            return mysqli_query($this->con, $sql);
        }

        public function getRecordby2Field($tblname, $field1, $field2, $keyword1, $keyword2) {
            $sql = "SELECT * FROM $tblname where $field1='$keyword1' AND $field2='$keyword2'";
            return mysqli_query($this->con, $sql);
        }

        public function insertProduct($id, $pname, $company, $year, $band, $pimage) {
            $result = false;
            $sql = "insert into tblproduct(pid, pname, company, year, band, pimage) 
            values ('$id', '$pname', '$company', '$year', '$band', '$pimage')";
            if (mysqli_query($this->con, $sql)) {
                $result = true;
            }
            return json_decode($result);
        }

        public function delProduct($tblname, $field, $keyword) {
            $result = false;
            $sql = "DELETE FROM $tblname where $field='$keyword'";
            if (mysqli_query($this->con, $sql)) {
                $result = true;
            }
            return json_decode($result);
        }
    }
?>