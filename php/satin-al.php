<?php

include 'db.php';

if (isset($_POST['order'])) {
    $user_id = $_SESSION['user_id'];

    // Sepetteki ürünleri çekme
    $query = "SELECT * FROM sepet WHERE kullanici_id = $user_id";
    $result = mysqli_query($conn, $query);

    // Her ürünü sipariş tablosuna ekleme
    while ($row = mysqli_fetch_assoc($result)) {
        $urun_id = $row['urun_id'];
        $deger = $row['deger'];
        $order_date = date('Y-m-d H:i:s');

        $order_query = "INSERT INTO siparisler (kullanici_id, urun_id, deger, siparis_tarihi) VALUES ($user_id, $urun_id, $deger, '$order_date')";
        mysqli_query($conn, $order_query);
    }

    // Sepeti temizleme
    $clear_cart_query = "DELETE FROM sepet WHERE kullanici_id = $user_id";
    mysqli_query($conn, $clear_cart_query);

    // Siparişler sayfasına yönlendirme
    header('Location: ../pages/siparisler.php');
    exit();
}

