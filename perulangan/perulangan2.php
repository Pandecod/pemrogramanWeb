<?php
require_once './header.php';
?>
    <h2>PERULANGAN 2</h2>
    <div class="container">
        <?php
        $bil = 1;
        while ($bil <= 17)
        {
        echo "Bilangan sekarang adalah $bil<br />";
        $bil++;
        }
        echo "Nilai bilangan selanjutnya adalah:".$bil;
        ?>
    </div>

<?php
require_once './footer.php';
?>   