<?php
require "../php/db.php";
$kullanici_id = $_SESSION['user_id'];
$query = "SELECT * FROM siparisler,urunler where siparisler.urun_id = urunler.urun_id and siparisler.kullanici_id=$kullanici_id ORDER BY siparis_tarihi DESC ";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siparişlerim</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container-siparis {
            max-width: 800px;
            height: 100vh;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
        }
        .header .email {
            font-size: 14px;
            color: #888;
        }
        .nav {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .nav a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }
        .orders {
            list-style: none;
            padding: 0;
        }
        .order {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            background-color: #fdfdfd;
        }
        .order img {
            max-width: 50px;
            max-height: 50px;
            border-radius: 5px;
        }
        .order-info {
            flex-grow: 1;
            margin-left: 20px;
        }
        .order-info h4 {
            margin: 0;
            font-size: 18px;
            color: #5cb85c;
        }
        .order-info p {
            margin: 5px 0;
            color: #555;
        }
        .order-info .price {
            font-weight: bold;
            color: #000;
        }
    </style>
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
</head>
<body>
<?php include "../inc/header.php"?>
<div class="container-siparis">
    <div class="header">
        <div>
            <h2>Merhaba <?php echo $_SESSION['ad'] ?></h2>
            <p class="email"><?php echo $_SESSION['email'] ?></p>
        </div>
    </div>
    <div class="nav">
        <a href="#">Siparişlerim</a>
    </div>
    <ul class="orders">
        <?php while ($row = mysqli_fetch_assoc($result)){ ?>
        <li class="order">
            <img src="<?php echo $row['resim']?>">
            <div class="order-info">
                <?php if ($row['durum'] == 0){ ?>
                    <h4 style="color: red">Teslim Edilmedi</h4>
                <?php } else { ?>
                    <h4 style="color: green">Teslim Edildi</h4>
                <?php } ?>
                <p><?php echo $row['aciklama']?></p>
                <p><?php echo $row['siparis_tarihi']?> tarihinde sipariş ettin.</p>
                <p class="price">Fiyat: <?php echo $row['fiyat']*$row['deger'].' TL'?></p>
            </div>
        </li>
        <?php }?>
    </ul>
</div>
<?php include "../inc/footer.php"?>
</body>
</html>
