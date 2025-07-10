# Pertemuan 11: Modularisasi Aplikasi Web PHP — Pemisahan Logika dan Tampilan

## Deskripsi Umum
Pertemuan ini membahas penerapan prinsip **modularisasi** dalam pengembangan aplikasi web menggunakan PHP. Mahasiswa akan belajar membagi aplikasi menjadi beberapa bagian (header, footer, koneksi, logika, dsb.) serta menyusun struktur folder yang lebih terorganisir.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Menyusun struktur proyek web PHP yang rapi
- Memisahkan bagian tampilan (view) seperti header dan footer
- Memisahkan file koneksi database dan logika proses
- Menggunakan `include` dan `require` untuk modularisasi kode

## Indikator Keberhasilan
- Mahasiswa dapat membuat folder seperti `includes/`, `pages/`, dan `assets/`
- Mahasiswa mampu membuat file `header.php`, `footer.php`, dan `koneksi.php` terpisah
- Mahasiswa memahami kapan menggunakan `include`, `include_once`, `require`, dan `require_once`

---

## Pokok Bahasan
1. Konsep Modularisasi dalam Web Development
2. Penggunaan `include` dan `require`
3. Penyusunan Struktur Folder
4. Pemisahan Tampilan dan Logika Proses
5. Studi Kasus Modularisasi CRUD

---

## Penjelasan Materi

### 1. Struktur Folder Direkomendasikan

```project/
│
├── includes/
│ ├── header.php
│ ├── footer.php
│ └── koneksi.php
│
├── pages/
│ ├── index.php
│ ├── tambah.php
│ ├── edit.php
│ └── hapus.php
│
├── assets/
│ └── css/
│ └── style.css
│
└── login.php
```


---

### 2. File `includes/header.php`
```php
<!DOCTYPE html>
<html>
<head>
  <title>Modular PHP</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <header>
    <h2>Manajemen Mahasiswa</h2>
    <nav><a href="index.php">Home</a> | <a href="tambah.php">Tambah</a></nav>
    <hr>
  </header>
  ```
### 3. File includes/footer.php
```php
  <footer>
    <hr>
    <p>&copy; <?= date('Y') ?> - Sistem Akademik</p>
  </footer>
</body>
</html>
```
### 4. File includes/koneksi.php
```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "kampus";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
```
### 5. Contoh pages/index.php
```php
<?php
include '../includes/koneksi.php';
include '../includes/header.php';

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<table border="1" cellpadding="5">
  <tr>
    <th>ID</th><th>Nama</th><th>NIM</th><th>Umur</th>
  </tr>
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['nim']; ?></td>
    <td><?= $row['umur']; ?></td>
  </tr>
  <?php } ?>
</table>

<?php include '../includes/footer.php'; ?>

```
### Pertanyaan Diskusi:

Apa keuntungan memisahkan file header, footer, dan koneksi dibanding menyatukannya dalam setiap halaman?

---

### Tugas Praktikum
1. Susun ulang project CRUD sebelumnya dengan struktur folder modular:
2. includes/ untuk koneksi, header, dan footer
3. pages/ untuk semua halaman logika
4. assets/ untuk CSS
5. Gunakan include atau require_once untuk menyisipkan file header, footer, dan koneksi
6. Tambahkan navigasi dasar antar halaman
