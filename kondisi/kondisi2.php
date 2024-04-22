<?php
require_once './header.php';
?>
         <h2>KONDISI 2</h2>
    <div class="container">
        <?php
        $username = "Ahmad";
        if ($username == "Ahmad") {
        echo "Anda Berhasil Login!, Selamat datang
        $username";
        } else {
        echo "Username salah, silahkan coba lagi!";
        }
        ?>
    </div>

<?php
require_once './footer.php';
?>  