<?php
include_once("header.php");
require_once("./entities/product.class.php");

if (isset($_POST["submit"])) {
    $productName = $_POST["txtName"];
    $cateID = $_POST["txtCateID"];
    $price = $_POST["txtPrice"];
    $quantity = $_POST["txtQuantity"];
    $description = $_POST["txtDesc"];
    $picture = $_POST["txtPicture"];

    $newProduct = new Product($productName, $cateID, $price, $quantity, $description, $picture);
    $result = $newProduct->save();
    if (!$result) {
        // Handle error
        header("Location: add_product.php?failure");
    } else {
        header("Location: add_product.php?inserted");
    }
}

?>

<?php include_once("header.php"); ?>

<!-- HTML form for creating a product -->
<form method="post">
    <div class="row">
        <div class="lbltitle">
            <label>Tên sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtName" value="<?php echo isset($_POST["txtName"]) ? $_POST["txtName"] : ""; ?>" />
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Mã loại sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtCateID" value="<?php echo isset($_POST["txtCateID"]) ? $_POST["txtCateID"] : ""; ?>" />
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Giá sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtPrice" value="<?php echo isset($_POST["txtPrice"]) ? $_POST["txtPrice"] : ""; ?>" />
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Số lượng sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtQuantity" value="<?php echo isset($_POST["txtQuantity"]) ? $_POST["txtQuantity"] : ""; ?>" />
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Mô tả sản phẩm</label>
        </div>
        <div class="lblinput">
            <textarea name="txtDesc" cols="21" rows="10" value="<?php echo isset($_POST["txtDesc"]) ? $_POST["txtDesc"] : ""; ?>"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="lbltitle">
            <label>Hình ảnh sản phẩm</label>
        </div>
        <div class="lblinput">
            <input type="text" name="txtPicture" value="<?php echo isset($_POST["txtPicture"]) ? $_POST["txtPicture"] : ""; ?>" />
        </div>
    </div>
    <div class="row">
        <div class="submit">
            <input type="submit" name="submit" value="Thêm sản phẩm" />
        </div>
    </div>
</form>

<?php include_once("footer.php"); ?>
