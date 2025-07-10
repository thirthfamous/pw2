# Pertemuan 12: Membangun Aplikasi Web Dinamis Sederhana (CRUD + Auth + Modular)

## Deskripsi Umum
Pertemuan ini adalah puncak dari rangkaian pembelajaran. Mahasiswa akan menggabungkan seluruh materi yang telah dipelajari untuk membangun aplikasi web dinamis sederhana, seperti sistem manajemen data produk atau siswa. Aplikasi mencakup fitur CRUD, autentikasi login, keamanan dasar, dan struktur kode modular.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Membuat aplikasi web skala kecil dengan fitur CRUD
- Mengimplementasikan sistem login sederhana
- Menerapkan validasi dan keamanan dasar (SQL Injection & XSS protection)
- Menyusun struktur folder dan file secara modular

## Indikator Keberhasilan
- Mahasiswa mampu membuat dan menjalankan aplikasi manajemen data (produk/siswa) berbasis PHP + MySQL
- Aplikasi memiliki autentikasi login dan pembatasan akses
- Struktur folder rapi: koneksi, header/footer, pages, assets
- Input divalidasi dan disanitasi sebelum disimpan/ditampilkan

---

## Pokok Bahasan
1. Desain Proyek Aplikasi (Manajemen Data Siswa/Produk)
2. Struktur Folder Modular
3. CRUD Lengkap (Create, Read, Update, Delete)
4. Sistem Login (Session)
5. Validasi dan Keamanan Input
6. Navigasi & Antarmuka Dasar

---

## Penjelasan Materi

### 1. Studi Kasus: Aplikasi Manajemen Data Siswa

| Kolom Data | Tipe Data |
|------------|-----------|
| id         | INT, AUTO_INCREMENT |
| nama       | VARCHAR(100) |
| nis        | VARCHAR(20) |
| jurusan    | VARCHAR(50) |
| umur       | INT         |

---

### 2. Struktur Folder Direkomendasikan

```
project/
│
├── includes/
│ ├── koneksi.php
│ ├── header.php
│ ├── footer.php
│
├── auth/
│ ├── login.php
│ ├── proses_login.php
│ ├── logout.php
│
├── pages/
│ ├── index.php
│ ├── tambah.php
│ ├── edit.php
│ ├── hapus.php
│
├── assets/
│ └── css/style.css
│
└── dashboard.php
```

---

### 3. Fitur yang Harus Diimplementasikan

✅ CRUD Data Siswa  
✅ Autentikasi Login dengan Session  
✅ Validasi Input (tidak kosong, umur numerik)  
✅ Proteksi dari SQL Injection dan XSS  
✅ Navigasi antar halaman (Header + Footer)  
✅ Struktur kode modular dan rapi

---

### 4. Proteksi Halaman (Session Check)

Di setiap halaman seperti `dashboard.php`, `index.php`, `tambah.php`, tambahkan:

```php
<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../auth/login.php");
  exit;
}
?>
```

### 5. Validasi dan Sanitasi Input
```php
$nama = htmlspecialchars(trim($_POST['nama']));
$nis = htmlspecialchars(trim($_POST['nis']));
$jurusan = htmlspecialchars(trim($_POST['jurusan']));
$umur = $_POST['umur'];

if ($nama == "" || $nis == "" || !is_numeric($umur)) {
  echo "Semua field wajib diisi dengan benar.";
  exit;
}
```
### Pertanyaan Diskusi:

Apa manfaat menyatukan seluruh konsep (CRUD, login, keamanan, modularisasi) ke dalam satu aplikasi nyata? Apa tantangan saat mengerjakannya?

---

### Tugas Praktikum (Proyek Mini)
Buat aplikasi manajemen data siswa dengan spesifikasi berikut:

1. Login sederhana (hardcoded akun)
2. Halaman dashboard menampilkan data siswa
3. Tambah/Edit/Hapus siswa
4. Validasi input (nama, nis, umur, jurusan)
5. Struktur modular (header/footer/koneksi)
6. Proteksi session: hanya user login yang bisa akses
7. Pesan notifikasi (data berhasil ditambah/dihapus, dll)
8. (Opsional) Tambahkan fitur pencarian nama siswa
