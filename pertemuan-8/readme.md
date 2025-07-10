# Pertemuan 8: Validasi pada Update/Delete dan Notifikasi Aksi

## Deskripsi Umum
Pertemuan ini membahas bagaimana membangun fitur **update** dan **delete** data dengan **validasi input sederhana** serta **notifikasi keberhasilan atau kegagalan** setelah aksi dilakukan. Mahasiswa akan belajar membangun form edit yang aman dan informatif bagi pengguna.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Membuat form edit data dengan validasi sederhana (tidak boleh kosong, validasi angka)
- Menambahkan notifikasi (pesan sukses/gagal) setelah aksi update/delete
- Memastikan integritas dan keandalan data saat proses perubahan dan penghapusan

## Indikator Keberhasilan
- Mahasiswa dapat menampilkan pesan keberhasilan atau kesalahan setelah update/delete
- Mahasiswa mampu melakukan validasi input sederhana sebelum data disimpan
- Mahasiswa mampu membedakan penanganan update dan delete yang baik

---

## Pokok Bahasan
1. Validasi Form pada Edit Data
2. Validasi Input Numerik dan Teks
3. Notifikasi Aksi (Berhasil/Gagal)
4. Penanganan Delete dengan Konfirmasi
5. Redirect dengan Pesan (Flash Message)

---

## Penjelasan Materi

### 1. Validasi Form Update Data

**File: `edit.php`**
```php
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
```
### 2. Notifikasi Pesan di Halaman Utama
**File: `index.php`**

```php
<?php
if (isset($_GET['pesan'])) {
  if ($_GET['pesan'] == 'update-berhasil') {
    echo "<p style='color:green;'>Data berhasil diupdate.</p>";
  }
  if ($_GET['pesan'] == 'hapus-berhasil') {
    echo "<p style='color:green;'>Data berhasil dihapus.</p>";
  }
}
?>
```

### 3. Delete dengan Konfirmasi dan Notifikasi
**File: `hapus.php`**

```php
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
```
**Tambahan (opsional) di index.php:**

```html
<a href='hapus.php?id=<?= $row['id']; ?>' onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
```
### Pertanyaan Diskusi:

Mengapa penting untuk memvalidasi data pada form edit? Apa dampaknya jika data kosong atau salah tetap disimpan?

--- 

### Tugas Praktikum
1. Tambahkan validasi input pada form edit.php:
2. Field tidak boleh kosong
3. Umur harus berupa angka
4. Tambahkan notifikasi pada index.php untuk aksi:
    - update-berhasil
    - hapus-berhasil
5. Tambahkan konfirmasi JavaScript pada tombol hapus
6. Uji apakah form edit menolak data kosong dan memberikan pesan kesalahan