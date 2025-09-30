<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kuis Pemrograman Web</title>
    <link rel="stylesheet" href="style.css"> <!-- Hubungkan CSS -->
</head>
<body>

<div class="container">

    <h2>Form Biodata Mahasiswa </h2>
    <form method="POST">
        <label>Nama Lengkap:</label>
        <input type="text" name="nama" required>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <label>Program Studi:</label>
        <select name="prodi" required>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
        </select>

        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan<br><br>

        <label>Hobi:</label><br>
        <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
        <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
        <input type="checkbox" name="hobi[]" value="Musik"> Musik
        <input type="checkbox" name="hobi[]" value="Gaming"> Gaming<br><br>

        <label>Alamat:</label>
        <textarea name="alamat" rows="4" required></textarea><br>

        <input type="submit" value="Kirim Biodata">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama   = $_POST['nama'];
        $nim    = $_POST['nim'];
        $prodi  = $_POST['prodi'];
        $jk     = $_POST['jk'];
        $hobi   = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : '-';
        $alamat = $_POST['alamat'];

        echo "<h3>Hasil Biodata Mahasiswa:</h3>";
        echo "<table>
                <tr><th>Nama Lengkap</th><td>$nama</td></tr>
                <tr><th>NIM</th><td>$nim</td></tr>
                <tr><th>Program Studi</th><td>$prodi</td></tr>
                <tr><th>Jenis Kelamin</th><td>$jk</td></tr>
                <tr><th>Hobi</th><td>$hobi</td></tr>
                <tr><th>Alamat</th><td>$alamat</td></tr>
              </table>";
    }
    ?>

    <h2>Form Pencarian </h2>
    <form method="GET">
        <label>Kata kunci pencarian:</label>
        <input type="text" name="keyword" required>
        <input type="submit" value="Cari">
    </form>

    <?php
    if (isset($_GET['keyword'])) {
        $keyword = htmlspecialchars($_GET['keyword']);
        echo "<p>Anda mencari data dengan kata kunci: <b>$keyword</b></p>";
    }
    ?>

</div>

</body>
</html>
