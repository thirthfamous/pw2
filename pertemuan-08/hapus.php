<?php
include 'koneksi.php';
$id = $_GET['id'];
$hapus = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");

if ($hapus) {
  header("Location: index.php?pesan=hapus-berhasil");
} else {
  echo "Gagal menghapus data!";
}
?>