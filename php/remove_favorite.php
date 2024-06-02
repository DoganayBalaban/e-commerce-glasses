<?php
require 'db.php';

$user_id = $_SESSION['user_id'];
$product_id = $_POST['product_id'];

$query = "DELETE FROM favoriler WHERE kullanici_id = $user_id AND urun_id = $product_id";
$result = mysqli_query($conn,$query);

header('Location: ../pages/favoriler.php');
exit;
?>
