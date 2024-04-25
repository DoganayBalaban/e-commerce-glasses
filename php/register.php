<?php

include "db.php";

if (isset($_POST["kaydet"])) {
    $username = $_POST["username"];
    $eposta = $_POST["eposta"];
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $password = $_POST["password"];


    $sql = "INSERT INTO kullanicilar (kullanici_adi,sifre,eposta,ad,soyad) VALUES ('$username','$password','$eposta','$ad','$soyad')";

    $runsql = mysqli_query($conn, $sql);

    if ($runsql) {
        echo "<script>alert('Kayıt Başarıyla Eklendi')</script>";
    } else {
        echo "<script>alert('Kayıt Ekleme Başarısız')</script>";
    }
    mysqli_close($conn);
}

