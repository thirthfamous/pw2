<?php
$namaFile = $_FILES['berkas']['name'];
$ukuran = $_FILES['berkas']['size'];
$tmp = $_FILES['berkas']['tmp_name'];

move_uploaded_file($tmp, "uploads/" . $namaFile);
echo "File berhasil diunggah!";
?>
