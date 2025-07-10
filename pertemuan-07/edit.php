<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id");
$row = mysqli_fetch_assoc($data);
$notif = "";

if (isset($_POST['update'])) {
  $nama = trim($_POST['nama']);
  $nim = trim($_POST['nim']);
  $umur = $_POST['umur'];

  if ($nama == "" || $nim == "" || !is_numeric($umur)) {
    $notif = "Semua field wajib diisi dan umur harus angka!";
  } else {
    $update = mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama', nim='$nim', umur=$umur WHERE id=$id");
    if ($update) {
      header("Location: index.php?pesan=update-berhasil");
    } else {
      $notif = "Gagal mengupdate data!";
    }
  }
}
?>

<h2>Edit Data Mahasiswa</h2>
<?php if ($notif != "") echo "<p style='color:red;'>$notif</p>"; ?>

<form method="post">
  Nama: <input type="text" name="nama" value="<?= $row['nama']; ?>"><br>
  NIM: <input type="text" name="nim" value="<?= $row['nim']; ?>"><br>
  Umur: <input type="number" name="umur" value="<?= $row['umur']; ?>"><br>
  <input type="submit" name="update" value="Update">
</form>