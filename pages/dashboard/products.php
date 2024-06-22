<?php
    require "products-islemler.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"/>
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

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>


<header>
    <h1>otuz9optik Yönetim Paneli</h1>
    <nav>
        <ul>
            <li><a href="dashboard.php">Ana Sayfa</a></li>
            <li><a href="products.php">Ürünler</a></li>
            <li><a href="orders.php">Siparişler</a></li>
            <!-- Diğer bağlantılar -->
        </ul>
    </nav>
</header>
<div class="container my-3">

    <div class="row">

        <div class="col-12 ">

            <table class="table .table-bordered">
                <tr>
                    <th>Ürün Resmi</th>
                    <th>Ürün Adı</th>
                    <th>Marka</th>
                    <th>Fiyat</th>
                    <th>Açıklama</th>
                    <th>Durum</th>
                    <th><a href="productsCreate.php" class="btn btn-dark">Ürün Ekle</a></th>

                </tr>

                <tbody><?php
                $result = urunListele();
                while ($urun = mysqli_fetch_assoc($result)) : ?>
                <tr class="table-primary">
                    <td>
                        <img width="50px" height="50px" src="../../<?php
                        echo $urun["resim"] ?> " class="img-fluid">
                    </td>
                    <td><?php
                        echo $urun["urun_adi"] ?></td>
                    <td><?php
                        echo $urun["marka"] ?></td>
                    <td><?php
                        echo $urun["fiyat"] ?></td>
                    <td><?php
                        echo $urun["aciklama"] ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="productsEdit.php?id=<?php
                        echo $urun["urun_id"] ?> ">düzenle</a>
                        <a class="btn btn-danger btn-sm" href="products-Delete.php?id=<?php
                        echo $urun["urun_id"] ?>">kaldır</a>
                    </td>
                    <td class="bg-dark" style="opacity:0.15"></td>
                </tr>

                <tr class="table-primary">

                </tr>

                </tbody><?php
                endwhile; ?>


            </table>


        </div>
    </div>
</div>


</body>

</html>