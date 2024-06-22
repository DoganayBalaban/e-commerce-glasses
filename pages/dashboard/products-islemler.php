<?php


function urunGetir(int $urunid)
{
    include "../../php/db.php";
    $query = "SELECT * FROM urunler WHERE urun_id=$urunid";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Hata: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    return $result;
}

function urunEKLE(string $urunAdi, string $marka, string $aciklama, float $fiyat, string $resim)
{
    include "../../php/db.php";
    // sorgu
    $query = "INSERT INTO urunler(urun_adi,marka,aciklama,fiyat,resim) VALUES('$urunAdi','$marka','$aciklama',$fiyat,'$resim')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Hata: " . mysqli_error($conn);
        mysqli_close($conn);
        return false;
    }
    mysqli_close($conn);
    return $result;
}

function urunSILME(int $urunid)
{
    include "../../php/db.php";
    $query = "DELETE FROM urunler WHERE urun_id=$urunid ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Hata: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    return $result;
}

function urunListele()
{
    include "../../php/db.php";
    $query = "SELECT * from urunler ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Hata: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    return $result;
}

function urunGUNCELLE(int $urunid, string $urunAdi, string $marka, string $aciklama, float $fiyat, string $resim)
{
    include "../../php/db.php";
    // SQL sorgusunda Resim sütununa tırnak içindeki değerlerin eklenmesi gerekiyor.
    $query = "UPDATE urunler SET urun_adi='$urunAdi', marka='$marka', aciklama='$aciklama', fiyat=$fiyat, resim='$resim' WHERE urun_id=$urunid";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        // Hata olursa hata mesajını yazdır
        echo "Hata: " . mysqli_error($conn);
    }
    // Bağlantıyı kapat
    mysqli_close($conn);
    return $result;
}

