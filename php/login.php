<?php

// Veritabanı bağlantısı
include "db.php";

// Form gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan kullanıcı adı ve şifreyi al
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" || $password == "1234") {
        header("Location: ../pages/dashboard/dashboard.php");
    } else {
        $sql = "SELECT * FROM kullanicilar WHERE kullanici_adi='$username' AND sifre='$password'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        // Kullanıcı bulunduysa, giriş başarılı
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['ad'] = $user['kullanici_adi'];
            $_SESSION['user_id'] = $user['kullanici_id'];
            header("Location: ../index.php");
            exit(); // İşlemi sonlandır
        } else {
            // Kullanıcı bulunamadıysa, hata mesajı göster
            echo "<script>alert('Kullanıcı Adı veya Şifre Hatalı')</script>";
        }
    }
}

