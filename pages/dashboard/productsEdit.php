<?php

require "products.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $urunid = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $UrunAd = $_POST["UrunAd"];
    $Marka = $_POST["Marka"];
    $Acıklama = $_POST["Acıklama"];
    $Fiyat = $_POST["Fiyat"];
    $Resim = $_POST["Resim"];

    if (urunGUNCELLE($urunid, $UrunAd, $Marka, $Acıklama, $Fiyat, $Resim)) {
        $_SESSION['message'] = $UrunAd . " isimli ürün bilgileri güncellendi.";
        $_SESSION['type'] = "success";
        header('Location: products.php');

        exit(); // Yönlendirmenin ardından kodun devam etmemesi için exit() kullanın.
    } else {
        echo "Ürün güncellenemedi.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    //$urunid = $_GET["urun_id"];
    // admin panelinde düzenleye bastığımız ürünün id'sini aldık ki duzenleyecegimiz urunu bilelim
    // $result = urunListele($urunid);
    // $selectedUrun = mysqli_fetch_assoc($result); 

    if (isset($_GET['id'])) {
        $urunid = intval($_GET['id']);

        // Anahtar tanımlı ise, işlem yapabilirsiniz
    } else {
        // Anahtar tanımlı değilse, bir hata mesajı gösterebilir veya yönlendirme yapabilirsiniz
        echo "Ürün ID bulunamadı.";
        exit();
    }
    $result = urunGetir($urunid);
    $selectedUrun = mysqli_fetch_assoc($result);
    ?>

    <header>
        <h1>otuz9optik Yönetim Paneli</h1>
    </header>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" >
                            <div class="mb-3">
                                <label for="UrunAd" class="form-label">Ürünün Adı</label>
                                <input type="text" class="form-control" name="UrunAd" id="UrunAd" value="<?php echo $selectedUrun["urun_adi"] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Marka" class="form-label">Marka</label>
                                <input type="text" class="form-control" name="Marka" id="Marka" value="<?php echo $selectedUrun["marka"] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Fiyat" class="form-label">Fiyat</label>
                                <input type="text" class="form-control" name="Fiyat" id="Fiyat" value="<?php echo $selectedUrun["fiyat"] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Acıklama" class="form-label">Açıklama</label>
                                <input type="text" class="form-control" name="Acıklama" id="Acıklama" value="<?php echo $selectedUrun["aciklama"] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Resim" class="form-label">Resim</label>
                                <input type="text" class="form-control" name="Resim" id="Resim" value="<?php echo $selectedUrun["Resim"] ?>">
                            </div>
                            <a href="products.php"><input type="submit" value="Değiştir" class="btn btn-primary "></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>