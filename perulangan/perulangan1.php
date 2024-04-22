<?php
require_once './header.php';
?>
    <h2>PERULANGAN 1</h2>
    <div class="container">
        <?php
        $bil = 1;
        while($bil <= 10){
        echo "Bilangan Sekarang adalah $bil <br>";
        $bil++;
        }
        ?>
    </div>
<?php
require_once './footer.php';
?>   