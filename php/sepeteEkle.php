<?php
include "../php/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['urun_id'])) {
    $urun_id = intval($_POST['urun_id']);
    $adet = 1; // Varsayılan olarak 1 adet ekliyoruz, isterseniz farklı değer alabilirsiniz.

    // Sepette aynı ürün var mı kontrol et
    $sql_check = "SELECT * FROM sepet WHERE urun_id = $urun_id";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
        // Sepette aynı ürün varsa adetini artır
        $sql_update = "UPDATE sepet SET deger = deger + $adet WHERE urun_id = $urun_id";
        mysqli_query($conn, $sql_update);
    } else {
        // Ürün sepette yoksa yeni kayıt ekle
        $sql_insert = "INSERT INTO sepet (urun_id, deger) VALUES ($urun_id, $adet)";
        mysqli_query($conn, $sql_insert);
    }

    header("Location: ../pages/Sepet.php"); // Sepet sayfasına yönlendirme
    exit;
}
