<?php
    # Kiểm tra xem form đã được gửi đi hay chưa
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        # Xử lí dữ liệu form ở đây

        # Gán giá trị mới cho action sau khi xử lí form
        $newAction = "";
    } else {
        # Giá trị action ban đầu
        $newAction = "deleteProduct";
    }
?>
<form method="post" action="<?php echo $newAction; ?>"> 
    <div class="mb-3">
        <div class="mb-3">
            <label for="" class="form-label">Nhập ID muốn xoá</label>
            <input
                type="text"
                class="form-control"
                name="id"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <button type="submit" class="btn btn-primary" name="btDelete">Bấm</button>
        </div>
    </div>  
</form>

<?php
    if (isset($data["result"])) {
        if ($data["result"]) {
            echo "Xoá thành công";
        } else {
            echo "Xoá khum thành công";
        }
    }
?>