<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "../../php/db.php";
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['siparis_id'])){
    $siparis_id = $_POST['siparis_id'];
    $user_id = $_SESSION['user_id'];
    $query = "select * from siparisler where kullanici_id = $user_id";
    $sonuc = mysqli_query($conn,$query);
    $siparis = mysqli_fetch_assoc($sonuc);
    if ($siparis['NULL']==0){
        $sql = "UPDATE siparisler set durum=1 where siparis_id=$siparis_id";
        $result = mysqli_query($conn,$sql);
    }
}

mysqli_close($conn);

header("Location: orders.php");
