<?php
    # Kiểm tra xem form đã được gửi đi hay chưa
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        # Xử lí dữ liệu form ở đây

        # Gán giá trị mới cho action sau khi xử lí form
        $newAction = "";
    } else {
        # Giá trị action ban đầu
        $newAction = "./insertProduct";
    }
?>

<form action="<?php echo $newAction; ?>" method="post" enctype="multipart/form-data">
    <div>
        <div class="mb-3">
            <label for="" class="form-label">ID Product</label>
            <input
                type="text"
                class="form-control"
                name="id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input
                type="text"
                class="form-control"
                name="pname"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Company</label>
            <input
                type="text"
                class="form-control"
                name="company"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Select Band</label> <br>
            <select
                class="form-select form-select-lg"
                name="selectBand"
                id=""
            >
                <option selected>Select one</option>
                <option value="Tinnitus Relief">Tinnitus Relief</option>
                <option value="Aralast">Aralast</option>
                <option value="Kay">Kay</option>
                <option value="EPOGEN">EPOGEN</option>
                <option value="Assured">Assured</option>
            </select>
        </div>  

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
        </div>  
        

        <div class="mb-3">
            <label for="" class="form-label">Choose Image</label>
            <input
                type="file"
                class="form-control"
                name="img"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info" name="btInsert">Insert</button>
    </div>
</form>

<?php
    if (isset($data["result"])) {
        if ($data["result"]) {
            echo "Thêm mới thành công";
        } else {
            echo "Thêm mới khum thành công";
        }
    }
?>
