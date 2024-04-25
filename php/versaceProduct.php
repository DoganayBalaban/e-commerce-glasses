<?php

include "db.php";

$sql = "SELECT * FROM urunler WHERE marka = 'Versace'";

$result = mysqli_query($conn, $sql);