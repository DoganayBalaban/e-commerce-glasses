<?php

require "products.php";
session_start();
function control_input($data) {
    // $data = strip_tags($data);
    $data = htmlspecialchars($data);
    // $title = htmlentities($data);
    $data = stripslashes($data); # sql injection

    return $data;
}

$UrunAd = $Marka = "";
$UrunAd_err= $Marka_err = "";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    

    // validate title

    $input_UrunAd = trim($_POST["UrunAd"]);
    $UrunAd= control_input($input_UrunAd);
    $input_Marka = trim($_POST["Marka"]);
    $Marka= control_input($input_Marka);
    $input_Aciklama = trim($_POST["Aciklama"]);
    $Aciklama= control_input($input_Aciklama);
    $input_Fiyat = trim($_POST["Fiyat"]);
    $Fiyat= control_input($input_Fiyat);
    $Resim = $_POST["Resim"];

    

    // validate description


        if (urunEKLE($UrunAd,  $Marka,  $Aciklama, $Fiyat,  $Resim)) {
            $_SESSION['message'] = $UrunAd." isimli ürün eklendi";
            $_SESSION['type'] = "success";
            
            header('Location: products.php');
        } else {
            echo "hata";
        }
     
 
}
?>

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
                                <input type="text" class="form-control" name="UrunAd" id="UrunAd"  require >
                            </div>
                            <div class="mb-3">
                                <label for="Marka" class="form-label">Marka</label>
                                <input type="text" class="form-control" name="Marka" id="Marka"  require>
                            </div>
                            <div class="mb-3">
                                <label for="Fiyat" class="form-label">Fiyat</label>
                                <input type="text" class="form-control" name="Fiyat" id="Fiyat" >
                            </div>
                            <div class="mb-3">
                                <label for="Acıklama" class="form-label">Açıklama</label>
                                <input type="text" class="form-control" name="Aciklama" id="Aciklama" >
                            </div>
                            <div class="mb-3">
                                <label for="Resim" class="form-label">Resim</label>
                                <input type="text" class="form-control" name="Resim" id="Resim" >
                            </div>
                            <a href="products.php"><input type="submit" value="Ürün Ekle" class="btn btn-primary "></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>