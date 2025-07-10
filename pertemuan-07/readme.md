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

**File: `koneksi.php`**
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
<?php include 'koneksi.php'; ?>
<h2>Data Mahasiswa</h2>
<a href="tambah.php">Tambah Data</a>
<table border="1" cellpadding="5">
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Umur</th>
    <th>Aksi</th>
  </tr>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['nim']}</td>
            <td>{$row['umur']}</td>
            <td>
              <a href='edit.php?id={$row['id']}'>Edit</a> |
              <a href='hapus.php?id={$row['id']}'>Hapus</a>
            </td>
          </tr>";
  }
  ?>
</table>
```
### 3. Menambahkan Data (Create)
**File: `tambah.php`**

```php
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