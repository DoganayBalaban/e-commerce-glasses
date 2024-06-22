
# Gözlük E-ticaret Web Sitesi

Bu proje, bir üniversite web programlama dersi kapsamında geliştirilmiş bir e-ticaret web sitesidir. Bu web sitesi, kullanıcıların çeşitli gözlük modellerini inceleyip satın alabileceği bir platform sunar.

## İçindekiler

- [Özellikler](#özellikler)
- [Kurulum](#kurulum)
- [Kullanım](#kullanım)
- [Veritabanı Yapısı](#veritabanı-yapısı)
- [Geliştirici Bilgileri](#geliştirici-bilgileri)
- [Lisans](#lisans)

## Özellikler

- Gözlük ürünlerini listeleme
- Ürün detay sayfası
- Sepet ve sipariş yönetimi
- Kullanıcı kayıt ve giriş işlemleri
- Yönetici paneli üzerinden ürün ve sipariş yönetimi

## Kurulum

Projeyi yerel ortamınızda çalıştırmak için aşağıdaki adımları takip edebilirsiniz:

### Gereksinimler

- [XAMPP](https://www.apachefriends.org/index.html) (veya PHP ve MySQL çalıştırabileceğiniz başka bir ortam)
- [Git](https://git-scm.com/)

### Adımlar

1. **Depoyu Klonlayın:**

   ```bash
   git clone https://github.com/kullaniciadi/proje-adi.git
   ```

2. **Proje Dosyalarını Kopyalayın:**

   Klonladığınız proje dosyalarını XAMPP'ın `htdocs` klasörüne kopyalayın.

3. **Veritabanını Ayarlayın:**

    - XAMPP kontrol panelinden MySQL'i başlatın.
    - `phpMyAdmin` üzerinden yeni bir veritabanı oluşturun. (Örneğin, `gozluk_e_ticaret`)
    - `database` klasöründeki `e-ticaret.sql` dosyasını içe aktararak veritabanını oluşturun.

4. **Veritabanı Bağlantı Ayarları:**

   `php/db.php` dosyasını açarak veritabanı bağlantı bilgilerinizi düzenleyin:

   ```php
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "gozluk_e_ticaret";

   // Bağlantı oluştur
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Bağlantıyı kontrol et
   if ($conn->connect_error) {
       die("Bağlantı hatası: " . $conn->connect_error);
   }
   ?>
   ```

5. **XAMPP'ta Projeyi Çalıştırın:**

   XAMPP kontrol panelinden Apache'i başlatın ve tarayıcınızdan `http://localhost/proje-adi` adresine gidin.

## Kullanım

- **Ana Sayfa:** Tüm ürünleri görüntüleyebilirsiniz.
- **Ürün Detayları:** Ürünlerin detay sayfasına giderek daha fazla bilgi alabilirsiniz.
- **Sepet:** Ürünleri sepete ekleyebilir ve sipariş verebilirsiniz.
- **Kullanıcı Girişi/Kayıt:** Kullanıcı olarak kayıt olabilir veya giriş yapabilirsiniz.
- **Yönetici Paneli:** Ürün ve siparişleri yönetebilirsiniz. (Yönetici girişi gereklidir.)

## Veritabanı Yapısı

Veritabanı şu tabloları içerir:

- `users`: Kullanıcı bilgileri
- `products`: Ürün bilgileri
- `orders`: Sipariş bilgileri
- `cart`: Sepet
- `favorites`: favoriler

## Geliştirici Bilgileri

- **İsim:** [Doğanay Balaban]
- **E-posta:** [dbalaban1907@gmail.com]
- **GitHub:** [github.com/DoganayBalaban]


