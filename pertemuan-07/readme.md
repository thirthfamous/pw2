# Pertemuan 7: Koneksi PHP–MySQL dan Operasi CRUD Sederhana

## Deskripsi Umum
Pada pertemuan ini, mahasiswa akan mempelajari bagaimana menghubungkan PHP dengan database MySQL serta mengimplementasikan fitur CRUD (Create, Read, Update, Delete) sederhana pada data.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Membuat koneksi antara PHP dan MySQL
- Menampilkan data dari database
- Menambahkan, mengubah, dan menghapus data melalui skrip PHP

## Indikator Keberhasilan
- Mahasiswa dapat membuat koneksi database menggunakan `mysqli`
- Mahasiswa dapat menampilkan data dari database dalam bentuk tabel HTML
- Mahasiswa dapat membuat form input dan memprosesnya untuk menambah, mengedit, dan menghapus data

---

## Pokok Bahasan
1. Koneksi PHP ke MySQL dengan `mysqli`
2. Menampilkan data (Read)
3. Menambahkan data (Create)
4. Mengubah data (Update)
5. Menghapus data (Delete)

---

## Penjelasan Materi

### 1. Koneksi ke Database

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
### 2. Menampilkan Data (Read)
**File: `index.php`**

```php
<?php
$host = 'localhost';
$user = 'root';
$pass = 'farhan123';
$dbname = 'kampus';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT nama, nim, umur FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mahasiswa</title>
  <style>
    body { font-family: sans-serif; padding: 20px; background: #f8f9fa; }
    table { border-collapse: collapse; width: 100%; background: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
    th { background-color: #007bff; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
  </style>
</head>
<body>

<h2>Daftar Mahasiswa</h2>
<table border="1">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Umur</th>
    </tr>
  </thead>
  <tbody>
    <?php if ($result->num_rows > 0): ?>
      <?php $no = 1; while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $row['nama'] ?></td>
          <td><?= $row['nim'] ?></td>
          <td><?= $row['umur'] ?></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="4">Tidak ada data</td></tr>
    <?php endif; ?>
  </tbody>
</table>

<?php $conn->close(); ?>

</body>
</html>

```
### 3. Menambahkan Data (Create)
**File: `tambah.php`**

```php
<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "farhan123", "kampus");
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Proses simpan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $nim  = $_POST["nim"];
  $umur = $_POST["umur"];

  $stmt = $conn->prepare("INSERT INTO mahasiswa (nama nim, umur) VALUES (?, ?, ?)");
  $stmt->bind_param("ssi", $nama, $nim, $umur);

  if ($stmt->execute()) {
    header("Location: index.php"); // ✅ Redirect ke halaman index
    exit; // Penting: hentikan script setelah redirect
  } else {
    echo "Gagal menambahkan data: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>

<!-- Form Tambah -->
<h2>Tambah Mahasiswa</h2>
<form method="post">
  <label>Nama:</label><br>
  <input type="text" name="nama" required><br><br>

  <label>NIM:</label><br>
  <input type="text" name="nim" required><br><br>

  <label>Umur:</label><br>
  <input type="number" name="umur" required><br><br>

  <button type="submit">Simpan</button>
</form>

```

### 4. Mengedit Data (Update)
**File: `edit.php`**

```php
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
```
### 5. Menghapus Data (Delete)
**File: `hapus.php`**

```php
<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
header("Location: index.php");
?>
```
### Pertanyaan Diskusi:

Bagaimana proses CRUD ini akan membantu dalam membangun fitur manajemen data di aplikasi dunia nyata seperti sistem akademik?

---

### Tugas Praktikum
1. Buat database kampus dan tabel mahasiswa (jika belum)
2. Buat file koneksi.php, index.php, tambah.php, edit.php, hapus.php sesuai contoh
3. Tambahkan data dummy dan uji semua operasi (tambah, lihat, ubah, hapus)
4. (Opsional) Tambahkan validasi agar semua field tidak boleh kosong sebelum disimpan.