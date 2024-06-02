<?php

require "products.php";


// $urunid = intval($_GET["urun_id"]);
$urunid = isset($_GET['id']) ? intval($_GET['id']) : 0;
if (urunSILME($urunid)) {
    $_SESSION['message'] = $urunid . " id numaralı ürün silindi.";
    $_SESSION['type'] = "danger";

    header('Location: products.php');
    exit(); // Yönlendirmenin ardından kodun devam etmemesi için exit() kullanın.
} else {
    echo "Ürün silinemedi.";
}
