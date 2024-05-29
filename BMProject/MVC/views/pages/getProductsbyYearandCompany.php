<?php
    # Kiểm tra xem form đã được gửi đi hay chưa
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        # Xử lí dữ liệu form ở đây

        # Gán giá trị mới cho action sau khi xử lí form
        $newAction = "";
    } else {
        # Giá trị action ban đầu
        $newAction = "displayProductByYearAndCompany";
    }
?>

<form method="post" action="<?php echo $newAction; ?>"> 
    <div class="mb-3">
        <label for="" class="form-label">Select Year</label> <br>
        <select
            class="form-select form-select-lg"
            name="selectYear"
            id=""
        >
            <option selected>Select one</option>
            <?php
                for ($year = 2015; $year <= 2030; $year++) {
                    echo '<option value="' . $year . '">' . $year . '</option>';
                }
            ?>
        </select>
        <input type="checkbox" name="checkYear" value="true">
    </div>  
    <div class="mb-3">
        <label for="" class="form-label">Select Company</label> <br>
        <select
            class="form-select form-select-lg"
            name="selectCompany"
            id=""
        >
            <option selected>Select one</option>
            <option value="Cardinal Health">Cardinal Health</option>
            <option value="ALK-Abello, Inc.">ALK-Abello, Inc.</option>
            <option value="Safeway">Safeway</option>
            <option value="Amgen Inc">Amgen Inc</option>
            <option value="Eon Labs, Inc.">Eon Labs, Inc.</option>
        </select>
        <input type="checkbox" name="checkCompany" value="true">
    </div>  
    <div class="mb-3">
        <button type="submit" class="btn btn-primary" name="btSearch">Bấm</button>
    </div>
</form>

<?php
    if(isset($data["Products"])) {
        echo "<table>";
        echo "<tbody>";
        echo "<thead>";
        echo "<tr>";
        $fieldNames = $data["Products"]->fetch_fields();
        foreach ($fieldNames as $field) {
            echo "<th class = \"text-center\">" . strtoupper($field->name) ."</th>";
        }
        echo "</tr>";
        echo "</thead>";
        while ($row = mysqli_fetch_array($data["Products"])){
            echo "<tr>";
            echo "<td class= \"text-left\">". $row["id"] ."</td>";
            echo "<td class= \"text-left\">". $row["pid"] ."</td>";
            echo "<td class= \"text-left\">". $row["pname"] ."</td>";
            echo "<td class= \"text-left\">". $row["company"] ."</td>";
            echo "<td class= \"text-left\">". $row["year"] ."</td>";
            echo "<td class= \"text-left\">". $row["band"] ."</td>";
            echo "<td class= \"text-left\">". '<img src="' . $row["pimage"] . '" alt="Image">' . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
?>
