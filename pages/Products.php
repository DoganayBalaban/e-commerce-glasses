<?php

include "../php/db.php";
$sql = "SELECT * FROM urunler";
$cikti = mysqli_query($conn, $sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $arama = $_POST['arama'];
    $arama_sql = "SELECT * FROM urunler WHERE urun_adi LIKE '%$arama%'";
    $result = mysqli_query($conn, $arama_sql);
}
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
<?php include '../inc/header.php'?>
<!-- Main Alanı -->
<main class="main-section">
    <div class="sidebar">
        <div class="sort-section"></div>
    </div>
    <div class="product-area">
        <div class="search-section">
            <form action="" method="POST" class="searchBar">
                <input type="text" placeholder="Gözlük Aranıyor" name="arama"/>
                <button type="submit">
                    <img id="img" src="../images/searchImage.jpeg"/>
                </button>
            </form>
        </div>
        <h2>Tüm Gözlükler</h2>
        <div class="products grid-container">
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="card">
                            <div class="discount-img">%30 İNDİRİM</div>
                            <img src="<?php echo '../'.$row["resim"]; ?>" alt=""/>
                            <div class="card-content">
                                <h2><?php echo $row["aciklama"]; ?></h2>
                                <p><?php echo $row["fiyat"]; ?> TL</p>
                                <div class="satın-al">
                                    <a href="<?php echo 'Singleproduct.php?urun_id=' . $row["urun_id"]; ?>">
                                        <button class="add-to-cart">Satın Al</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else {
                    echo "Sonuç bulunamadı";
                }
            } else {
                while ($row = mysqli_fetch_assoc($cikti)) { ?>
                    <div class="card">
                        <div class="discount-img">%30 İNDİRİM</div>
                        <img src="<?php echo '../'.$row["resim"]; ?>" alt=""/>
                        <div class="card-content">
                            <h2><?php echo $row["aciklama"]; ?></h2>
                            <p><?php echo $row["fiyat"]; ?> TL</p>
                            <div class="satın-al">
                                <a href="<?php echo 'Singleproduct.php?urun_id=' . $row["urun_id"]; ?>">
                                    <button class="add-to-cart">Satın Al</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</main>
<!-- Footer Alanı -->
<?php include '../inc/footer.php'?>
</body>
</html>
