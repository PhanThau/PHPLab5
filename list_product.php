<?php
require_once("entities/product.class.php");

include_once("header.php");

$prods = Product::list_product();

// Sẵn sàng để thiết kế mẫn hình này sao cho đẹp mắt
foreach ($prods as $item) {
    echo "<p>Tên sản phẩm: ".$item["ProductName"]."</p>";
}

include_once("footer.php");
?>
