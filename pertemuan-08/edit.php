<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<form method="post">
  Nama: <input type="text" name="nama" value="<?= $row['nama']; ?>"><br>
  NIM: <input type="text" name="nim" value="<?= $row['nim']; ?>"><br>
  Umur: <input type="number" name="umur" value="<?= $row['umur']; ?>"><br>
  <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $umur = $_POST['umur'];
  mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', nim='$nim', umur='$umur' WHERE id=$id");
  header("Location: index.php");
}
?>
