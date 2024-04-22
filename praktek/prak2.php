<?php
require_once './header.php';
?>
   <h2>PRAKTEK 2</h2>
   <div class="container">
        <?php
        echo "<h2>Nilai Mahasiswa : </h2>";

        $nim = '10101001';
        $nama = 'Agung diamas';
        $prodi = 'sistem komputer';
        $nilai = 90;

        echo "NIM : ", $nim, "<br>";
        echo "Nama : ", $nama, "<br>";
        echo "Prodi : ", $prodi, "<br>";
        echo "Nilai : $nilai";
        ?>
   </div>
<?php
require_once './footer.php';
?>   