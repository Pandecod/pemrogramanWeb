<?php
require_once './header.php';
?>
    <h2>PERULANGAN 5</h2>
    <div class="container">
        <?php
        for ($a = 1; $a <=2; $a++)
        {
        for ($b = 1; $b <= 4; $b++)
        {
        echo "Nilai a = ".$a. " Nilai b = ".$b. "<br />";
        }
        }
        ?>
    </div>
<?php
require_once './footer.php';
?>   