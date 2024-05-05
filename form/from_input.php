
<h2>Elemen Control Form</h2>
<form action="action.php" method="GET/POST">{Jenis input}</form>
<input type = “text” name=”nama_input_text”/>

<h2>Form Input Type Radio</h2>
<input type="radio" name="JK" value="Pria" />Pria </b>

<h2>Form Input Type Check Box</h2>
<input type="checkbox" name="hobby"value="Joging" /> Joging </b>
<h2>Form Input Type Combo Box</h2>
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
<h2>Data Tidak Boleh Kososng</h2>
<form action="">
    <input type="text" name="name" required/>
    <input type="email" name="email" required />
    <input type="submit" value="daftar" />
</form>
<h2>Data Tidak Boleh Diisi</h2>
<form action="">
    <input type="text" name="username"value="petanikode" disabled/>
    <input type="text" name="email"/>
</form>
<h2>Minimal dan Maksimal</h2>
<form action="">
    <input type="number" name="tinggi"min="100"max="400"/>
    <input type="submit" value="daftar" />
</form>
<form action="">
    <label for="name">Name (4 to 8 characters):</label><br>
    <input type="text" id="name" name="name" required minlength="4" maxlength="8">
</form>
<h2>Validasi Jenis File</h2>
<form action="">
    <input type="file" accept="image/*" name="file"><br>
    <input type="submit" value="upload" />
</form>

<h2>Mengubah Pesan Validator</h2>
<form action="" id="gradeForm">
    <input type="text" name="grade">
    <input type="submit" value="Simpan">
</form>
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
