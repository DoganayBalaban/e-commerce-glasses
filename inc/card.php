<?php
include "php/versaceProduct.php";

while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card">
        <div class="discount-img">%30 İNDİRİM</div>
        <img src="<?php echo $row["resim"]; ?>" alt=""/>
        <div class="card-content">
            <h2><?php echo $row["aciklama"]; ?></h2>
            <p><?php echo $row["fiyat"]; ?>TL</p>
            <div class="satın-al">
                <a href="pages/<?php echo 'product.php?urun_id='.$row["urun_id"]; ?>"><button class="add-to-cart">Satın Al</button></a>
            </div>
        </div>
    </div>
    <?php
}
mysqli_close($conn);
?>