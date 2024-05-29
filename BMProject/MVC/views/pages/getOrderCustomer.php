<?php
    # Kiểm tra xem form đã được gửi đi hay chưa
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        # Xử lí dữ liệu form ở đây

        # Gán giá trị mới cho action sau khi xử lí form
        $newAction = "";
    } else {
        # Giá trị action ban đầu
        $newAction = "displayOrderCustomer";
    }
?>
<form method="post" action="<?php echo $newAction; ?>"> 
    <div class="mb-3">
        <div class="mb-3">
            <label for="" class="form-label">Input CID</label>
            <input
                type="text"
                class="form-control"
                name="inpCID"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <label for="" class="form-label">Input OID</label>
            <input
                type="text"
                class="form-control"
                name="inpOID"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <button type="submit" class="btn btn-primary" name="btSearch">Bấm</button>
        </div>
    </div>  
</form>
<?php
    if(isset($data["Products"])) {
        $row = mysqli_fetch_array($data["Products"]);
        echo "<h3 style='text-align: center;'> Invoice </h3>";
        echo "<div style= 'display: flex; justify-content: space-between;'>";
        echo "<label>Customer Name: ". $row["cname"] . "</label> <br>";
        echo "<label>Address: ". $row["address"] . "</label> <br>";
        echo "</div>";
        echo "<label>Order Date: ". $row["odate"] . "</label>";
        

        echo "<table>";
        echo "<tbody>";
        echo "<thead>";
        echo "<tr>";
        $fieldNames = $data["Products"]->fetch_fields();
        foreach ($fieldNames as $field) {
            echo "<th class = \"text-center\">" . strtoupper($field->name) ."</th>";
            
            // $fieldName = strtoupper($field->name);
            // if ($fieldName !== "CID" && $fieldName !== "CNAME" && $fieldName !== "ADDRESS" && $fieldName !== "OID" && $fieldName !== "ODATE") {
            //     echo "<th class=\"text-center\">" . $fieldName ."</th>";
            // }
        }   
        echo "</tr>";
        echo "</thead>";
        while ($row = mysqli_fetch_array($data["Products"])){
            echo "<tr>";
            echo "<td class= \"text-left\">". $row["cid"] ."</td>";
            echo "<td class= \"text-left\">". $row["cname"] ."</td>";
            echo "<td class= \"text-left\">". $row["address"] ."</td>";
            echo "<td class= \"text-left\">". $row["oid"] ."</td>";
            echo "<td class= \"text-left\">". $row["odate"] ."</td>";
            echo "<td class= \"text-left\">". $row["pid"] ."</td>";
            echo "<td class= \"text-left\">". $row["pname"] ."</td>";
            echo "<td class= \"text-left\">". $row["company"] ."</td>";
            echo "<td class= \"text-left\">". $row["quantity"] ."</td>";
            echo "<td class= \"text-left\">". $row["unit_price"] ."</td>";
            echo "<td class= \"text-left\">". $row["total"] ."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";

        
    }
?>


