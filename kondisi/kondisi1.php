<?php
require_once './header.php';
?>
     <h2>KONDISI 1</h2>
    <div class="container">
        <?php
        $nilai = 80;
        if ($nilai >= 60) {
        echo "Anda Lulus dengan Nilai $nilai";
        }
        ?>
    </div>
<?php
require_once './footer.php';
?>    