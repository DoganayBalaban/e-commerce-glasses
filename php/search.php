<?php

include 'db.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    // Arama sorgusu
    $sql = "SELECT * FROM urunler WHERE urun_adi LIKE ? OR aciklama LIKE ?";
    $stmt = mysqli_prepare($conn, $sql);
    $searchTerm = '%' . $query . '%';
    mysqli_stmt_bind_param($stmt, "ss", $searchTerm, $searchTerm);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $searchResults = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults[] = $row;
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arama Sonuçları</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Header stil */
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        header nav ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        header nav ul li {
            margin: 0 10px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        header nav form {
            display: flex;
        }

        header nav form input[type="text"] {
            padding: 5px;
            border: none;
            border-radius: 3px 0 0 3px;
        }

        header nav form button {
            padding: 5px 10px;
            border: none;
            background-color: #444;
            color: #fff;
            border-radius: 0 3px 3px 0;
            cursor: pointer;
        }

        /* Arama sonuçları stil */
        .container {
            padding: 20px;
        }

        .container ul {
            list-style: none;
            padding: 0;
        }

        .container ul li {
            margin: 10px 0;
        }

        .container ul li h2 {
            margin: 0;
        }

        .container ul li p {
            margin: 5px 0;
        }

        .container ul li a {
            display: inline-block;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }

    </style>
</head>
<body>
    <?php include 'inc/header.php'; ?>
    <main>
        <div class="container">
            <h1>Arama Sonuçları</h1>
            <?php if (!empty($searchResults)): ?>
                <ul>
                    <?php foreach ($searchResults as $product): ?>
                        <li>
                            <h2><?php echo htmlspecialchars($product['urun_adi']); ?></h2>
                            <p><?php echo htmlspecialchars($product['aciklama']); ?></p>
                            <p>Fiyat: <?php echo htmlspecialchars($product['fiyat']); ?> TL</p>
                            <a href="product.php?urun_id=<?php echo $product['urun_id']; ?>">Ürüne Git</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>Aramanıza uygun sonuç bulunamadı.</p>
            <?php endif; ?>
        </div>
    </main>
    <?php include 'inc/footer.php'; ?>
</body>
</html>
