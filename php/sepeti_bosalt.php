<?php

include "../php/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "DELETE FROM sepet";
    mysqli_query($conn, $sql);

    header("Location: ../pages/Sepet.php"); // Sepet sayfasına yönlendirme
    exit;
}
