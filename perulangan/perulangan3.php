<?php
require_once './header.php';
?>
    <h2>PERULANGAN 3</h2>
    <div class="container">
        <?php
        $bil = 5;
        while ($bil <= 100)
        {
        if ($bil % 10 == 0) echo $bil. "<br />";
        $bil++;
        }
        ?>
    </div>

<?php
require_once './footer.php';
?>   