<?php

require '../php/db.php';

$user_id = $_SESSION['user_id']; // Kullanıcı ID'sini oturumdan al

// Favori ürünleri çek
$query = "SELECT urunler.urun_id, urunler.urun_adi, urunler.fiyat, urunler.resim 
          FROM urunler 
          INNER JOIN favoriler ON urunler.urun_id = favoriler.urun_id 
          WHERE favoriler.kullanici_id = ?";
$stmt = mysqli_prepare($conn,$query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$favorites = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorilerim</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container-favori {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            height: 100vh;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            background-color: #fff;
            width: calc(33.333% - 20px);
            box-sizing: border-box;
        }

        .product img {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .product h2 {
            font-size: 1.2em;
            margin: 0 0 10px 0;
        }

        .product p {
            font-size: 1em;
            color: #b12704;
            margin: 0 0 10px 0;
        }

        .btn {
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #ff9900;
            color: #fff;
        }

    </style>

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
</head>
<body>
<?php
include "../inc/header.php";
?>
<div class="container-favori">
    <h1>Favorilerim</h1>
    <?php if (count($favorites) > 0): ?>
        <div class="products">
            <?php foreach ($favorites as $product): ?>
                <div class="product">
                    <img src="<?= htmlspecialchars($product['resim']) ?>" alt="<?= htmlspecialchars($product['urun_adi']) ?>">
                    <h2><?= htmlspecialchars($product['urun_adi']) ?></h2>
                    <p>₺<?= number_format($product['fiyat'], 2) ?></p>
                    <form method="post" action="../php/remove_favorite.php">
                        <input type="hidden" name="product_id" value="<?= $product['urun_id'] ?>">
                        <button type="submit" class="btn btn-danger">Favorilerden Çıkar</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>Favori ürün bulunamadı!</p>
    <?php endif; ?>
</div>
<?php
include "../inc/footer.php";
?>
</body>
</html>
