<?php

include "../php/db.php";

if (!isset($_SESSION['ad'])){
    header('Location: Girisyap.php');
}

$sql = "SELECT sepet.id, sepet.deger, urunler.urun_adi, urunler.fiyat, urunler.resim
        FROM sepet
        JOIN urunler ON sepet.urun_id = urunler.urun_id";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sepet</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .cart-container .container {
        height: 100vh;
      display: flex;
      flex-direction: column;
      width: 80%;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .cart-container .title {
      text-align: center;
      font-size: 2em;
      margin: 20px;
    }

    .cart-container .cart {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    .cart-container .cart th,
    .cart-container .cart td {
      border-bottom: 1px solid #ddd;
      padding: 10px;
      text-align: left;
    }

    .cart-container .cart th {
      background-color: #f2f2f2;
    }

    .cart-container .product {
      display: flex;
      align-items: center;
    }

    .cart-container .product img {
      width: 50px;
      margin-right: 10px;
    }

    .cart-container .quantity {
      display: flex;
      align-items: center;
    }

    .cart-container .quantity button {
      background-color: #eee;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
    }

    .cart-container .quantity .remove {
      margin-left: 10px;
      background-color: #ff6b6b;
      color: #fff;
    }

    .cart-container .summary {
      text-align: right;
      margin-top: 20px;
    }

    .cart-container .summary p {
      margin: 5px 0;
    }

    .cart-container .summary .total {
      font-size: 1.5em;
      font-weight: bold;
    }

    .cart-container .checkout {
      display: block;
      width: 100%;
      padding: 15px;
      background-color: #000;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1.2em;
      margin-top: 20px;
    }
  </style>
  </body>
</head>

<body>
  <?php include "../inc/header.php"; ?>
  <div class="cart-container">
    <div class="container">
      <h1 class="title">Sepet</h1>
      <table class="cart">
        <thead>
          <tr>
            <th>Ürün</th>
            <th>Fiyat</th>
            <th>Adet</th>
            <th>Toplam</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
              <td class="product">
                <img width="50" height="50" src="../<?php echo $row['resim']; ?>" alt="<?php echo $row['urun_adi']; ?>">
                <span><?php echo $row['urun_adi']; ?></span>
              </td>
              <td>₺<?php echo $row['fiyat']; ?></td>
              <td class="quantity">
                <span><?php echo $row['deger']; ?></span>
              </td>
              <td>₺<?php echo $row['fiyat'] * $row['deger']; ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
      <div class="summary">
        <?php
        $sql_total = "SELECT SUM(urunler.fiyat * sepet.deger) AS toplam_fiyat FROM sepet JOIN urunler ON sepet.urun_id = urunler.urun_id";
        $result_total = mysqli_query($conn, $sql_total);
        $total = mysqli_fetch_assoc($result_total);
        ?>
        <p class="total">Toplam ₺<?php echo $total['toplam_fiyat']; ?></p>
        <p>Kargo, vergi ve kupon kodları sonraki aşamada hesaplanacaktır.</p>
        <form method="post" action="../php/satin-al.php">
            <button class="checkout" name="order">Satın Al</button>
        </form>
        <form method="POST" action="../php/sepeti_bosalt.php" style="margin-top: 10px;">
          <button type="submit" class="btn btn-danger">Sepeti Boşalt</button>
        </form>
      </div>
    </div>
  </div>
  <?php include "../inc/footer.php"; ?>
</body>

</html>