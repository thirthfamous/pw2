<?php
$namaFile = $_FILES['berkas']['name'];
$ukuran = $_FILES['berkas']['size'];
$tmp = $_FILES['berkas']['tmp_name'];
$tipe = mime_content_type($tmp);

// Validasi tipe
$allowedTypes = ['image/jpeg', 'image/png'];
if (!in_array($tipe, $allowedTypes)) {
  echo "Hanya file JPG dan PNG yang diizinkan.";
  exit;
}

// Validasi ukuran (2MB)
if ($ukuran > 2 * 1024 * 1024) {
  echo "Ukuran file terlalu besar (maksimal 2MB).";
  exit;
}

// Simpan file
move_uploaded_file($tmp, "uploads/" . $namaFile);
echo "File berhasil diunggah!";
?>