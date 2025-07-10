<form method="post">
  Nama: <input type="text" name="nama"><br>
  NIM: <input type="text" name="nim"><br>
  Umur: <input type="number" name="umur"><br>
  <input type="submit" name="simpan" value="Simpan">
</form>

<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $umur = $_POST['umur'];
  mysqli_query($conn, "INSERT INTO mahasiswa (nama, nim, umur) VALUES ('$nama', '$nim', '$umur')");
  header("Location: index.php");
}
?>
