<?php
require_once './header.php';
?>
    <h2>ARRAY 1</h2>
    <div class="container">
        <?php
            $kelompok1 =
            array("Andi","Budi","Chika","David","Erna"); echo "Nama Mahasiswa
            Kelompok 1 :<br />";
            for ($i=0; $i<=4; $i++){
            echo " - ",$kelompok1[$i],"<br/>";
            }
            echo"<br /><br />";
            $kelompok2[] = "Fera";
            $kelompok2[] = "Gani";
            $kelompok2[] = "Hery";
            $kelompok2[] = "Intan";
            $kelompok2[] = "Jaka";
            echo "Nama Mahasiswa Kelompok 2 :<br />";
            for ($i=0; $i<=4; $i++){
            echo " - ",$kelompok2[$i],"<br/>";
            }
        ?>
    </div>
<?php
require_once './footer.php';
?>