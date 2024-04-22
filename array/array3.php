<?php
require_once './header.php';
?>
    <h2>ARRAY 3</h2>
    <div class="container">
        <?php
        $mahasiswa = array("Lina", "Arni", "Jona", "Punjabi", "Marcus",
        "Marlin");
        echo "<strong>Nama Mahasiswa sebelum diurutkan : </strong><br
        />";
        foreach($mahasiswa as $data => $nama){
        echo "$data: $nama"."<br />";
        }
        sort($mahasiswa);
        echo "<strong>Nama Mahasiswa setelah diurutkan : </strong><br
        />";
        foreach($mahasiswa as $data => $nama){
        echo "$data: $nama"."<br />";
        }

        ?>
    </div>
<?php
require_once './footer.php';
?>