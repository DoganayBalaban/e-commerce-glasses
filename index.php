<?php include 'php/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>KluGözlük</title>
    <link rel="stylesheet" href="css/SearchBar.css"/>
    <link rel="stylesheet" href="css/style.css"/>

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
<!-- Header Alanı -->
<?php
include "inc/header.php";
?>
<!-- Hero Alanı -->
<main>
    <header class="hero-section">
        <div class="hero-content">
            <h1 id="deneme">Çok Satanlar</h1>
            <a href="pages/Products.php" class="cta-button">Şimdi Satın Al</a>
        </div>
    </header>
</main>
<!-- Content Alanı -->
<section id="content">
    <div class="container">
        <!-- Çok Satan Markalar -->
        <div class="cok-satan">
            <div class="cok-satan-yazi">
                <h2 id="coksatan">Çok Satan Markalar</h2>
            </div>
            <div class="brands">
                <a href="#versace"
                ><img src="images/gabbana/gabba3.jpg" alt="" class="brand"
                    /></a>
                <a href=""
                ><img src="images/rbbannerbrkn1.webp" alt="" class="brand"
                    /></a>
                <a href=""
                ><img src="images/rbbannerbrkn1.webp" alt="" class="brand"
                    /></a>
                <a href=""
                ><img src="images/rbbannerbrkn1.webp" alt="" class="brand"
                    /></a>
                <a href=""
                ><img src="images/rbbannerbrkn1.webp" alt="" class="brand"
                    /></a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div id="indirim" class="discount-product">
            <div class="discount-product-yazi">
                <h2>İndirimli Ürünler</h2>
            </div>
            <div class="grid-container">
                <div class="card">
                    <div class="discount-img">%30 İNDİRİM</div>
                    <img src="images/gabbana/gabba3.jpg" alt=""/>
                    <div class="card-content">
                        <h2>Versace 4436-U 108/73 57-18 Kadın Güneş Gözlüğü</h2>
                        <del>6.950.00 TL</del>
                        <p>4.865.00 TL</p>
                    </div>
                </div>
                <div class="card">
                    <div class="discount-img">%30 İNDİRİM</div>
                    <img src="images/bvlgari/bvlgari2.jpg" alt=""/>
                    <div class="card-content">
                        <h2>Versace 4436-U 108/73 57-18 Kadın Güneş Gözlüğü</h2>
                        <del>6.950.00 TL</del>
                        <p>4.865.00 TL</p>
                    </div>
                </div>
                <div class="card">
                    <div class="discount-img">%30 İNDİRİM</div>
                    <img src="images/gabbana/gabbana1.jpg" alt=""/>
                    <div class="card-content">
                        <h2>Versace 4436-U 108/73 57-18 Kadın Güneş Gözlüğü</h2>
                        <del>6.950.00 TL</del>
                        <p>4.865.00 TL</p>
                    </div>
                </div>
                <div class="card">
                    <div class="discount-img">%30 İNDİRİM</div>
                    <img src="images/gucci/gucci3.jpg" alt=""/>
                    <div class="card-content">
                        <h2>Versace 4436-U 108/73 57-18 Kadın Güneş Gözlüğü</h2>
                        <del>6.950.00 TL</del>
                        <p>4.865.00 TL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ürünler -->
<section class="content">
    <h1 id="versace">VERSACE</h1>
    <div class="container">
        <div class="grid-container">
           <?php
           include "inc/card.php"; ?>
        </div>
    </div>
</section>
<section class="content">
    <h1>TOM FORD</h1>
    <div class="container">
        <div class="grid-container">
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img
                        src="images/tomford/tmf1.jpg"
                        width="400px"
                        height="200px"
                        alt=""
                />
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img
                        src="images/tomford/tmf2.jpg"
                        width="400px"
                        height="200px"
                        alt=""
                />
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img
                        src="images/tomford/tmf3.jpg"
                        width="400px"
                        height="200px"
                        alt=""
                />
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img
                        src="images/tomford/tmfr4.jpg"
                        width="400px"
                        height="200px"
                        alt=""
                />
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <h1>GUCCI</h1>
    <div class="container">
        <div class="grid-container">
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/gucci/gucci1.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/gucci/gucci2.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/gucci/gucci3.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/gucci/gucci4.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <h1>GABBANA</h1>
    <div class="container">
        <div class="grid-container">
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/gabbana/gabbana1.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/gabbana/gabbana2.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/gabbana/gabba3.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/gabbana/gabbana4.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <h1>BVLGARİ</h1>
    <div class="container">
        <div class="grid-container">
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/bvlgari/bvlgari1.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/bvlgari/bvlgari2.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/bvlgari/bvlgari3.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
            <div class="card">
                <div class="discount-img">%30 İNDİRİM</div>
                <img src="images/bvlgari/bvlgari4.jpg" alt=""/>
                <div class="card-content">
                    <h2>Tom Ford TF 904 01A 52-19 Erkek Güneş Gözlüğü</h2>
                    <del>12.990.00 TL</del>
                    <p>9.093.00 TL</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Biz Kimiz Alanı -->
<section class="about-us">
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="images/download.png" alt=""/>
            </div>
            <div class="about-content">
                <h2>Kaliteli Gözlükler</h2>
                <p>
                    4 kişi ortaklığıyla bir araya kaliteli, hızlı ve basit bir şekilde
                    gözlük satmaya girişen bir topluluğuz. Otuz9 optik olarak
                    önceliğimiz müşterilerimizin rahatı ve memnuniyeti.
                </p>
                <a href="" class="read-more">Daha fazla</a>
            </div>
        </section>
    </div>
</section>
<!-- İletişim Alanı-->
<section class="contact">
    <div class="contact-container">
        <form method="post" action="php/mail-gonder.php" class="contact-left">
            <div class="contact-left-title">
                <h2>Bize Ulaşın</h2>
                <hr/>
            </div>
            <input
                    style="color: white"
                    type="text"
                    name="name"
                    placeholder="İsminiz"
                    class="contact-inputs"
            />
            <input
                    style="color: white"
                    type="email"
                    name="email"
                    placeholder="Emailiniz"
                    class="contact-inputs"
            />
            <textarea
                    style="color: white"
                    name="message"
                    placeholder="Mesajınız"
                    class="contact-inputs"
                    required
            ></textarea>
            <button type="submit">Gönder <img src="#" alt=""/></button>
        </form>
        <div class="contact-right">
            <img src="" alt=""/>
        </div>
    </div>
</section>
<!-- Footer Alanı -->
<?php
include "inc/footer.php"; ?>

<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
></script>

<script src="js/index.js"></script>
</body>
</html>
