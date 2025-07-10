# Pertemuan 5: Pengelolaan File dan Upload File Sederhana dengan PHP

## Deskripsi Umum
Pada pertemuan ini, mahasiswa akan mempelajari cara mengelola file di server menggunakan PHP, khususnya dalam membuat fitur unggah (upload) file sederhana. Materi mencakup validasi tipe file dan batas ukuran file untuk menjaga keamanan dan stabilitas aplikasi.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Menjelaskan mekanisme upload file di PHP
- Membuat form upload file sederhana
- Melakukan validasi jenis dan ukuran file sebelum menyimpan ke server

## Indikator Keberhasilan
- Mahasiswa dapat membuat form HTML untuk upload file
- Mahasiswa dapat menulis skrip PHP untuk memproses file upload
- Mahasiswa dapat memvalidasi jenis file (tipe MIME) dan ukuran maksimum file

---

## Pokok Bahasan
1. Mekanisme Upload File di PHP
2. Form HTML untuk Upload File
3. Variabel Superglobal `$_FILES`
4. Validasi Tipe dan Ukuran File
5. Menyimpan File ke Server

---

## Penjelasan Materi

### 1. Cara Kerja Upload File di PHP
- Form HTML harus menggunakan atribut: `enctype="multipart/form-data"`
- PHP akan menyimpan informasi file dalam array `$_FILES`
- File diunggah secara sementara di server, perlu dipindahkan ke folder tujuan

---

### 2. Form HTML Upload File

```html
<form action="upload.php" method="post" enctype="multipart/form-data">
  <label>Pilih file:</label>
  <input type="file" name="berkas" />
  <input type="submit" value="Upload" />
</form>
```
### 3. Menangani File dengan $_FILES
```php
<?php
$namaFile = $_FILES['berkas']['name'];
$ukuran = $_FILES['berkas']['size'];
$tmp = $_FILES['berkas']['tmp_name'];

move_uploaded_file($tmp, "uploads/" . $namaFile);
echo "File berhasil diunggah!";
?>
```

### 4. Validasi Tipe dan Ukuran File
Contoh: membatasi hanya file gambar JPG/PNG dan maksimal 2MB

```php
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
```

### Pertanyaan Diskusi

Mengapa penting untuk memvalidasi file yang diunggah pengguna? Apa risiko jika file tidak diverifikasi?

### Tugas Praktikum
1. Buat form upload_gambar.php
2. Upload file gambar (JPG atau PNG)
3. Validasi ukuran maksimum 2MB
4. Simpan file ke folder uploads/
5. Tampilkan preview gambar setelah berhasil diunggah
6. Tambahan (Opsional)
7. Ganti nama file menjadi timestamp atau random ID untuk mencegah duplikat
8. Tampilkan pesan error jika validasi gagal
