<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ticaret Yönetim Paneli</title>
    <style>
        /* Temel stiller */
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

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Sayfa içeriği ögeleri */
        section {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
        }

        #summary {
            text-align: center;
        }

        #latest-orders {
            max-width: 600px;
            margin: 0 auto;
        }

        #latest-orders table {
            width: 100%;
            border-collapse: collapse;
        }

        #latest-orders th, #latest-orders td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #latest-orders th {
            background-color: #333;
            color: #fff;
        }

        /* Diğer stillendirmeler */
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
            <li><a href="customers.php">Müşteriler</a></li>
            <!-- Diğer bağlantılar -->
        </ul>
    </nav>
</header>

<main>
    <section id="summary">
        <h2>Genel Özet</h2>
        <!-- Genel site özeti, toplam sipariş sayısı, toplam gelir, vb. -->
    </section>

    <section id="latest-orders">
        <h2>Son Siparişler</h2>
        <table>
            <thead>
            <tr>
                <th>Sipariş ID</th>
                <th>Müşteri</th>
                <th>Tarih</th>
                <th>Durum</th>
                <th>Toplam</th>
            </tr>
            </thead>
            <tbody>
            <!-- Son siparişlerin listesi buraya gelecek -->
            </tbody>
        </table>
    </section>

    <section id="statistics">
        <h2>İstatistikler</h2>
        <!-- Grafikler, veri görselleştirmeleri, vb. -->
    </section>
</main>

<footer>
    <p>&copy; 2024 E-Ticaret</p>
</footer>
</body>
</html>
