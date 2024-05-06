<?php
require_once './header.php';
?>
<style>
    form{
        padding: 5px;
       
    }
    input{
        padding-top: 5px;
    }
    h3{
        padding-top: 10px;
    }
</style>
<div class="container">
    <h3>Elemen Control Form</h3>
    <form action="action.php" method="GET/POST">{Jenis input}</form>
    <input type = “text” name=”nama_input_text”/>

    <h3>Form Input Type Radio</h3>
    <input type="radio" name="JK" value="Pria" />Pria </b>

    <h3>Form Input Type Check Box</h3>
    <input type="checkbox" name="hobby"value="Joging" /> Joging </b>
    <h3>Form Input Type Combo Box</h3>
    <select name="hari">
        <option value="pilih">Pilih hari</option>
        <option value="senin">Senin</option>
        <option value="selasa">Selasa</option>
        <option value="rabu">Rabu</option>
        <option value="kamin">Kamis</option>
        <option value="jumat">Jumat</option>
        <option value="sabtu">Sabtu</option>
        <option value="minggu">Minggu</option>
    </select>
    <h3>Data Tidak Boleh Kososng</h3>
    <form action="">
        <input type="text" name="name" required placeholder="name"/>
        <input type="email" name="email" required placeholder="email"/>
        <input type="submit" value="daftar" />
    </form>
    <h3>Data Tidak Boleh Diisi</h3>
    <form action="">
        <input type="text" name="username"value="petanikode" disabled/>
        <input type="text" name="email"/>
    </form>
    <h3>Minimal dan Maksimal</h3>
    <form action="">
        <input type="number" name="tinggi"min="100"max="400"/>
        <input type="submit" value="daftar" />
    </form>
    <form action="">
        <label for="name">Name (4 to 8 characters):</label><br>
        <input type="text" id="name" name="name" required minlength="4" maxlength="8">
    </form>
    <h3>Validasi Jenis File</h3>
    <form action="">
        <input type="file" accept="image/*" name="file"><br>
        <input type="submit" value="upload" />
    </form>

    <h3>Mengubah Pesan Validator</h3>
    <form action="" id="gradeForm">
        <input type="text" name="grade">
        <input type="submit" value="Simpan">
    </form>
</div>
    <script>
        var gradeForm = document.getElementById("gradeForm");
        var gradeInput = document.querySelector("input[name=grade]");

        gradeForm.addEventListener("submit", function(event){
            if (!isValidGrade(gradeInput.value)){
                event.preventDefault();
                gradeInput.setCustomValidity('Nilai grade salah');
            }
        });

        function isValidGrade(grade){
            var pattern = /^[a-fA-F][+-]?$|^D$/;
            return pattern.test(grade);
        }
    </script>

<?php
require_once './footer.php';
?>   