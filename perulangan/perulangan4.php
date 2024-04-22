<?php
require_once './header.php';
?>
    <h2>PERULANGAN 4</h2>
    <div class="container">
        <?php
        $bilangan = 5;
        for ($a=1; $a<=10; $a++){
        echo "Bilangan Sekarang adalah $bilangan <br>"; $bilangan =
        $bilangan + $a;
        }
        ?>
    </div>
<?php
require_once './footer.php';
?>   