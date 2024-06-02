<?php
// db.php veya favorilerle ilgili dosyanızın başına ekleyin
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db.php';

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];

// Daha önce eklenmiş mi kontrol et
$query = "SELECT * FROM favoriler WHERE kullanici_id = $user_id AND urun_id = $product_id";
$result = mysqli_query($conn,$query);


if (mysqli_num_rows($result) === 0) {
    // Favorilere ekle
    $query = "INSERT INTO favoriler (kullanici_id, urun_id) VALUES ($user_id,$product_id)";
    $result = mysqli_query($conn,$query);
}

header('Location: ../pages/favoriler.php');
exit;

