<?php
require_once './header.php';
?>
    <h2>PERULANGAN 6</h2>
    <div class="container">
        <?php
        $d = 1;
        do{
        echo "Perulangan NIM Mahasiswa 10101001 ke-$d <br>";
        $d++;
        }while($d <= 20);
        ?>
    </div>
<?php
require_once './footer.php';
?>   