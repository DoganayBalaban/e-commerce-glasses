<?php include 'php/db.php' ?>

<header>
    <div class="anouncment"><p>Sepette Net %50 İndirim !!</p></div>
    <div class="container">
        <div class="img-logo">
            <a href="../index.php"
            ><img
                        src="images/download.png"
                        alt="logo"
                        width="120px"
                        height="100px"
                /></a>
        </div>
        <!-- Navbar Alanı -->
        <nav>
            <ul>
                <li>
                    <a href="http://localhost/e-ticaret-2/pages/Products.php">ÜRÜNLER</a>
                </li>
                <li><a href="pages/ManGlasses.html">ERKEK</a></li>
                <li><a href="pages/WomanGlasses.html">KADIN</a></li>
                <li><a class="discount" href="#indirim">İNDİRİM</a></li>
            </ul>
        </nav>
        <!-- Simgeler -->

        <nav>
            <?php
            if (!isset($_SESSION["ad"])) {
                ?>
                <ul>
                    <li><a href="pages/Girisyap.php"><i class="fa-regular fa-user"></i></a></li>
                    <li><a class="search-bar" href="pages/Products.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li><a href="pages/Sepet.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
                <?php
            } else {
                ?>
                <ul>
                    <li><a href="#"><i class="fa-regular fa-user"></i></a>
                    <ul>
                        <a href="pages/favoriler.php"><li>Favoriler</li></a>
                        <a href="php/Cikisyap.php"><li>Çıkış Yap</li></a>
                    </ul>
                    </li>
                    <li><a class="search-bar" href="pages/Products.php"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                    <li><a href="pages/Sepet.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
                <?php
            }
            ?>
        </nav>
    </div>
</header>

