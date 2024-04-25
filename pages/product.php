<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../php/db.php";

$urun_id = $_GET["urun_id"];
$sql = "SELECT * FROM urunler WHERE urun_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $urun_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$product = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Erkek Gözlük</title>

    <link rel="stylesheet" href="../css/style.css"/>

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
    />
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            rel="stylesheet"
    />
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
<!-- Header Alanı -->
<?php
include "../inc/header.php" ?>
<!-- Main Alanı -->
<main>
    <div class="product-container">


        <div class="product-image">
            <img
                    src="../<?php
                    echo $product['resim']; ?>"
                    alt="Ürün Resmi"
                    width="500px"
                    height="150px"
            />
        </div>
        <div class="product-details">
            <h2><?php
                echo $product["aciklama"] ?></h2>
            <p><strong>Fiyat: </strong><?php
                echo $product["fiyat"] ?>TL</p>
            <p><strong>Renk:</strong> Siyah</p>

            <button class="add-to-cart">Sepete Ekle</button>
            <button class="add-to-favorite">Favorilere Ekle</button>
        </div>

    </div>
</main>
<!-- Footer Alanı -->
<?php
include "../inc/footer.php" ?>
</body>
</html>
