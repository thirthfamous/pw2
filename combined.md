

# Pertemuan 1: Konsep Dasar Web Dinamis & Peran PHP dalam Arsitektur Client–Server

## Deskripsi Umum
Pada pertemuan ini, mahasiswa akan diperkenalkan pada konsep dasar pengembangan web, termasuk perbedaan antara web statis dan web dinamis, serta memahami peran PHP dalam membangun web dinamis dengan arsitektur client-server.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Menjelaskan perbedaan antara web statis dan web dinamis
- Memahami arsitektur client-server dalam pengembangan web
- Menjelaskan peran PHP dalam membangun web dinamis

## Indikator Keberhasilan
- Mahasiswa mampu membedakan web statis dan web dinamis
- Mahasiswa mampu menjelaskan fungsi PHP dalam proses permintaan dan respons antara client dan server

## Pokok Bahasan
1. Pengertian Web Statis dan Web Dinamis  
2. Arsitektur Client–Server  
3. Peran Bahasa Server-side (PHP)  
4. Sejarah Singkat dan Kelebihan PHP

---

## Penjelasan Materi

### 1. Web Statis vs Web Dinamis

| Aspek              | Web Statis                            | Web Dinamis                             |
|--------------------|----------------------------------------|------------------------------------------|
| Isi konten         | Tetap, tidak berubah                   | Dapat berubah sesuai input/pengguna      |
| Bahasa pemrograman | HTML, CSS                              | PHP, JavaScript (Node.js), Python, dll.  |
| Interaktivitas     | Rendah                                 | Tinggi                                   |
| Contoh             | Halaman profil statis                 | Halaman login, dashboard, marketplace    |

> **Kesimpulan:** Web dinamis memungkinkan interaksi, menyimpan dan mengambil data dari database, serta memberikan pengalaman personal bagi pengguna.

---

### 2. Arsitektur Client–Server

- **Client:** Perangkat pengguna (browser) yang mengirim permintaan ke server.
- **Server:** Komputer atau layanan yang menerima permintaan dan mengirimkan respons.
- **Proses:**
  1. Pengguna mengetik URL → request dikirim ke server
  2. Server memproses menggunakan PHP (atau server-side language lain)
  3. Server mengirimkan HTML (hasil olahan) ke browser

![Diagram Client-Server](https://www.researchgate.net/profile/Mahamod-Ismail/publication/266489198/figure/fig1/AS:295616010833923@1447491757209/Client-Server-Architecture-3_Q320.jpg)

---

### 3. Peran PHP dalam Web Dinamis

- PHP adalah **bahasa pemrograman server-side**, artinya berjalan di server, bukan di browser.
- PHP memproses data, membaca dan menulis database, lalu menghasilkan HTML sebagai output ke browser.
- PHP sering digunakan bersama HTML untuk menciptakan halaman web yang interaktif dan fleksibel.

Contoh kode sederhana:
```php
<?php
  $nama = "Farhan";
  echo "Selamat datang, $nama!";
?>

Output: Selamat datang, Farhan!
```

### 4. Sejarah dan Kelebihan PHP
- Dibuat oleh Rasmus Lerdorf pada tahun 1994
- Awalnya bernama Personal Home Page, kini PHP: Hypertext Preprocessor
- **Kelebihan PHP:**
    1. Mudah dipelajari oleh pemula
    2. Mendukung berbagai database (MySQL, PostgreSQL, SQLite, dll.)
    3. Dipakai oleh banyak CMS populer (WordPress, Joomla, Moodle)4. Cocok untuk sistem informasi, aplikasi akademik, dll.

### Studi Kasus Diskusi Kelas
#### Pertanyaan Diskusi:

**Misalkan kamu membuat sistem akademik kampus.**
- Fitur apa saja yang bisa dibuat dengan web statis?
- Fitur apa saja yang hanya bisa dilakukan dengan web dinamis dan PHP?

**Tugas Refleksi Tertulis** (maksimal 1 halaman):
- Jelaskan dengan kata-katamu sendiri perbedaan antara web statis dan web dinamis.
- Mengapa PHP termasuk bagian dari teknologi web dinamis?
- Apa saja kelebihan PHP menurut pemahamanmu?

# Pertemuan 2: Struktur Dasar dan Sintaks PHP (Variabel, Operator, dan Struktur Kontrol)

## Deskripsi Umum
Pertemuan ini membahas dasar-dasar sintaks dalam pemrograman PHP, termasuk penggunaan variabel, operator, serta struktur kontrol seperti percabangan dan perulangan. Mahasiswa akan mulai menulis skrip PHP sederhana untuk memproses logika dasar.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Menulis variabel dan memahami tipe data di PHP
- Menggunakan operator aritmatika dan logika
- Menggunakan struktur kontrol (if/else, for, while) untuk membentuk logika program

## Indikator Keberhasilan
- Mahasiswa dapat menjelaskan dan menuliskan variabel dalam PHP
- Mahasiswa mampu membuat logika percabangan (if/else)
- Mahasiswa dapat membuat perulangan (for dan while) dalam skrip PHP

---

## Pokok Bahasan
1. Sintaks Dasar PHP
2. Variabel dan Tipe Data
3. Operator Aritmatika dan Logika
4. Struktur Kontrol:
   - Percabangan (`if`, `if-else`, `elseif`)
   - Perulangan (`for`, `while`, `do-while`)

---

## Penjelasan Materi

### 1. Sintaks Dasar PHP
- Semua kode PHP ditulis dalam tag:
```php
<?php
  // kode di sini
?>
```
- Setiap perintah diakhiri dengan titik koma ;
- Komentar:
```php
// komentar satu baris

/* komentar 
banyak 
baris */
```

### 2. Variabel dan Tipe Data
- Penulisan variabel diawali dengan simbol $
- Contoh:

```php
<?php
  $nama = "Farhan";
  $umur = 20;
  $isMahasiswa = true;
?>
```
- Tipe data: string, integer, float, boolean, array, object

### 3. Operator Aritmatika dan Logika
#### Operator Aritmatika:

- +, -, *, /, %

- Contoh:

```php
<?php
  $a = 10;
  $b = 5;
  echo $a + $b; // 15
?>
```
#### Operator Logika:

- ==, !=, >, <, >=, <=
- &&, ||, !

### 4. Struktur Kontrol
1. Percabangan
```php
<?php
  $nilai = 85;
  if ($nilai >= 90) {
    echo "A";
  } elseif ($nilai >= 80) {
    echo "B";
  } else {
    echo "C";
  }
?>
```
2. Perulangan
#### For loop:

```php
<?php
  for ($i = 1; $i <= 5; $i++) {
    echo "Baris ke-$i<br>";
  }
?>
```
#### While loop:
```php
<?php
  $i = 1;
  while ($i <= 5) {
    echo "Data ke-$i<br>";
    $i++;
  }
?>
```

### Latihan
Buatlah program yang menampilkan nilai ganjil dari 1 sampai 20 menggunakan for dan while.

### Tugas Praktikum
1. Buat file latihan1.php
2. Program untuk menerima nama dan umur dari variabel, lalu tampilkan kalimat seperti:
"Halo, nama saya Farhan dan saya berumur 20 tahun."
3. Buat file latihan2.php
4. Gunakan if/else untuk menampilkan status kelulusan berdasarkan nilai:
```
≥ 85 → "Lulus dengan baik"

70–84 → "Lulus"

< 70 → "Tidak Lulus"
```
5. Buat file latihan3.php
6. Tampilkan bilangan genap dari 2 hingga 20 menggunakan perulangan while



# Pertemuan 3: Pemrosesan Form HTML dengan PHP (GET dan POST)

## Deskripsi Umum
Pada pertemuan ini, mahasiswa akan mempelajari bagaimana membuat form HTML dan memproses data input dari pengguna menggunakan metode GET dan POST dalam PHP.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Membuat form HTML sederhana dengan elemen input
- Menjelaskan perbedaan metode GET dan POST
- Menangani dan memproses input dari form menggunakan PHP

## Indikator Keberhasilan
- Mahasiswa dapat membuat halaman form HTML
- Mahasiswa dapat menangani data input pengguna menggunakan metode GET dan POST
- Mahasiswa memahami keamanan dasar dalam menerima data dari pengguna

---

## Pokok Bahasan
1. Elemen Form HTML
2. Metode GET vs POST
3. Menangani Input Form dengan PHP
4. Validasi Sederhana dan Keamanan Dasar

---

## Penjelasan Materi

### 1. Membuat Form HTML
Form digunakan untuk menerima data dari pengguna. Contoh:
```html
<form action="proses.php" method="post">
  <label>Nama:</label>
  <input type="text" name="nama" />
  <br>
  <label>Umur:</label>
  <input type="number" name="umur" />
  <br>
  <input type="submit" value="Kirim" />
</form>
```
### 2. Metode GET vs POST
#### Metode	Karakteristik
GET	Data dikirim lewat URL, cocok untuk data ringan & pencarian
POST	Data dikirim tersembunyi, cocok untuk data sensitif atau besar

Contoh URL GET:

```
http://localhost/proses.php?nama=Farhan&umur=20
```
### 3. Menangani Data Form di PHP
Contoh GET (proses.php):

```php
<?php
  $nama = $_GET['nama'];
  $umur = $_GET['umur'];
  echo "Nama: $nama <br>";
  echo "Umur: $umur tahun";
?>
```
Contoh POST:

```php
<?php
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  echo "Nama: $nama <br>";
  echo "Umur: $umur tahun";
?>
```

## Soal Diskusi:

Mengapa kita perlu berhati-hati ketika menerima input dari pengguna? Apa perbedaan yang paling kamu rasakan antara GET dan POST?

## Latihan
### GET REQUEST
1. Buat file form_get.php
2. Form dengan input nama dan umur 
3. Metode GET
4. Tampilkan hasil input di halaman form_get.php itu sendiri menggunakan $_GET

### POST REQUEST
1. Buat file form_post.php
2. Form yang meminta nama pengguna dan email
3. Metode POST
4. Tampilkan hasil input di file proses_post.php
5. (Opsional) Tambahkan validasi:
    - Cek jika nama kosong → tampilkan pesan error
    - Cek apakah email valid menggunakan filter_var()

# Pertemuan 4: Fungsi dalam PHP dan Modularisasi Program

## Deskripsi Umum
Pertemuan ini membahas konsep fungsi dalam PHP, baik fungsi bawaan maupun fungsi buatan sendiri. Mahasiswa akan belajar membuat dan memanggil fungsi untuk menyederhanakan dan mengorganisir logika program secara modular.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Menjelaskan konsep dasar fungsi dalam PHP
- Membuat dan memanggil fungsi buatan sendiri
- Menerapkan fungsi untuk menyederhanakan logika program

## Indikator Keberhasilan
- Mahasiswa dapat membuat fungsi dengan parameter dan nilai kembali (return)
- Mahasiswa mampu menyusun program modular menggunakan fungsi
- Mahasiswa dapat membedakan antara fungsi built-in dan user-defined

---

## Pokok Bahasan
1. Konsep Dasar Fungsi
2. Fungsi Built-in dalam PHP
3. Membuat Fungsi Sendiri (User-Defined Function)
4. Parameter, Return Value, dan Scope Variabel
5. Modularisasi Program dengan Fungsi

---

## Penjelasan Materi

### 1. Apa itu Fungsi?
- Fungsi adalah blok kode yang dapat digunakan kembali untuk melakukan tugas tertentu.
- Tujuan: menyederhanakan kode, menghindari duplikasi, meningkatkan keterbacaan dan pemeliharaan program.

---

### 2. Fungsi Built-in (Bawaan PHP)
Contoh:
```php
strlen("Halo");         // Menghitung panjang string
strtoupper("php");      // Mengubah huruf menjadi kapital
date("Y-m-d");          // Menampilkan tanggal saat ini
```
### 3. Membuat Fungsi Sendiri
```php
function sapa($nama) {
  echo "Halo, $nama!";
}

sapa("Farhan");  // Output: Halo, Farhan!
```
### 4. Return Value dan Parameter
```php
function luasPersegi($sisi) {
  return $sisi * $sisi;
}

$hasil = luasPersegi(5);
echo "Luas: $hasil";  // Output: Luas: 25
```

### 5. Scope Variabel
- Global: didefinisikan di luar fungsi
- Local: hanya bisa diakses di dalam fungsi

```php
$angka = 10;

function tampilkan() {
  global $angka;
  echo $angka;
}
```
### Pertanyaan Diskusi:

Mengapa penggunaan fungsi dapat membuat program menjadi lebih mudah dikembangkan dan dirawat?

### Tugas Praktikum
1. Buat file `fungsi_salam.php`
2. Fungsi `salam($nama)` → mencetak “Halo, $nama!”
3. Buat file fungsi_kalkulator.php
4. Fungsi `tambah($a, $b)`, `kurang($a, $b)`, `kali($a, $b)`, dan `bagi($a, $b)`
5. Panggil semua fungsi dengan angka berbeda dan tampilkan hasilnya
6. Buat file `fungsi_validasi.php`
7. Fungsi `isValidUmur($umur)` → mengembalikan true jika umur > 17
8. Gunakan if untuk menampilkan "Boleh mendaftar" atau "Tidak boleh"


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


# Pertemuan 6: Dasar Basis Data Relasional & Query MySQL Sederhana

## Deskripsi Umum
Pertemuan ini membahas dasar-dasar basis data relasional serta bagaimana membuat dan mengelola database serta tabel sederhana menggunakan MySQL. Mahasiswa akan belajar menjalankan query dasar seperti CREATE, INSERT, dan SELECT.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Menjelaskan konsep basis data relasional
- Membuat database dan tabel menggunakan MySQL
- Menjalankan query dasar untuk menambahkan dan membaca data

## Indikator Keberhasilan
- Mahasiswa dapat membuat database dan tabel dengan benar
- Mahasiswa mampu menjalankan perintah dasar SQL: CREATE, INSERT, SELECT
- Mahasiswa memahami konsep relasi antar tabel (foreign key, meskipun belum diimplementasikan)

---

## Pokok Bahasan
1. Konsep Basis Data Relasional
2. Pengantar MySQL
3. Struktur Tabel dan Tipe Data
4. Query Dasar: CREATE, INSERT, SELECT
5. Penggunaan MySQL melalui phpMyAdmin dan MySQL CLI

---

## Penjelasan Materi

### 1. Apa itu Basis Data Relasional?
- Menyimpan data dalam bentuk **tabel** yang saling berhubungan
- Setiap baris = **record**, setiap kolom = **field**
- Contoh entitas: Mahasiswa, Dosen, Mata Kuliah, Nilai
- Dapat dilakukan **relasi antar tabel** (one-to-many, many-to-many)

---

### 2. Pengantar MySQL
- MySQL = sistem manajemen basis data relasional (RDBMS) open-source
- Bisa diakses melalui:
  - **phpMyAdmin** (antarmuka web)
  - **MySQL CLI** (command line)

---

### 3. Struktur Tabel dan Tipe Data

Contoh struktur tabel `mahasiswa`:
| Kolom     | Tipe Data     |
|-----------|---------------|
| id        | INT, AUTO_INCREMENT, PRIMARY KEY |
| nama      | VARCHAR(100)  |
| nim       | VARCHAR(20)   |
| umur      | INT           |

---

### 4. Query SQL Dasar

**Membuat Database:**
```sql
CREATE DATABASE kampus;
```
**Menggunakan Database:**

```sql
USE kampus;
```
**Membuat Tabel:**

```sql
CREATE TABLE mahasiswa (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  nim VARCHAR(20),
  umur INT
);
```
**Menambahkan Data:**

```sql
INSERT INTO mahasiswa (nama, nim, umur)
VALUES ('Farhan Hamdallah', '12345678', 21);
```
**Menampilkan Data:**

```sql
SELECT * FROM mahasiswa;
```
### 5. Praktik Menggunakan phpMyAdmin
**Langkah:**

1. Buka http://localhost/phpmyadmin
2. Buat database baru: kampus
3. Buat tabel mahasiswa dengan kolom sesuai contoh
4. Tambahkan beberapa data
5. Tampilkan data dengan fitur "Browse" atau gunakan tab SQL

## Pertanyaan Diskusi:

Mengapa menyimpan data dalam database lebih aman dan efisien dibanding menyimpan di file teks biasa?

---

## Tugas Praktikum
1. Buat database kampus
2. Buat tabel mahasiswa dengan kolom: id, nama, nim, umur
3. Tambah minimal 3 data mahasiswa menggunakan query INSERT
4. Tampilkan semua data menggunakan SELECT
5. (Opsional) Coba buat tabel dosen dengan struktur serupa.

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

# Pertemuan 9: Manajemen Session & Cookie untuk Autentikasi

## Deskripsi Umum
Pertemuan ini membahas konsep session dan cookie dalam PHP, khususnya penggunaannya dalam proses autentikasi pengguna (login/logout). Mahasiswa akan membangun sistem login sederhana dan memahami perbedaan antara session dan cookie.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Menjelaskan perbedaan session dan cookie
- Menggunakan session untuk menyimpan informasi login
- Membangun sistem login dan logout sederhana

## Indikator Keberhasilan
- Mahasiswa dapat membuat form login dengan session
- Mahasiswa dapat membatasi akses halaman menggunakan session
- Mahasiswa memahami kapan harus menggunakan session atau cookie

---

## Pokok Bahasan
1. Konsep Session dan Cookie
2. Form Login dan Proses Login
3. Menyimpan Informasi Pengguna dengan Session
4. Logout dan Penghancuran Session
5. Akses Terbatas Berdasarkan Login

---

## Penjelasan Materi

### 1. Perbedaan Session dan Cookie

| Fitur     | Session                           | Cookie                               |
|-----------|-----------------------------------|---------------------------------------|
| Disimpan  | Di server                         | Di browser pengguna (client)          |
| Ukuran    | Besar, fleksibel                  | Terbatas (sekitar 4KB)                |
| Keamanan  | Lebih aman                        | Rentan diubah oleh pengguna           |
| Masa Aktif| Selama sesi browser               | Dapat diset untuk jangka waktu tertentu|

---

### 2. Membuat Form Login

**File: `login.php`**
```php
<form method="post" action="proses_login.php">
  Username: <input type="text" name="username"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>
```
### 3. Proses Login & Session
**File: `proses_login.php`**

```php
<?php
session_start();

// Contoh akun
$valid_user = "admin";
$valid_pass = "123456";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $valid_user && $password === $valid_pass) {
  $_SESSION['login'] = true;
  $_SESSION['username'] = $username;
  header("Location: dashboard.php");
} else {
  echo "Login gagal. <a href='login.php'>Coba lagi</a>";
}
?>
```
### 4. Halaman Dashboard (Terproteksi)
**File: `dashboard.php`**

```php
<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
?>

<h2>Selamat datang, <?= $_SESSION['username']; ?>!</h2>
<a href="logout.php">Logout</a>
```

### 5. Logout dan Menghancurkan Session
**File: `logout.php`**

```php
<?php
session_start();
session_unset();
session_destroy();
header("Location: login.php");
?>
```

### 6. (Opsional) Cookie untuk "Ingat Saya"
**Menulis Cookie:**

```php
setcookie("remember", $username, time() + 3600); // 1 jam
```
**Membaca Cookie:**

```php
if (isset($_COOKIE['remember'])) {
  echo "Selamat datang kembali, " . $_COOKIE['remember'];
}
```

### Pertanyaan Diskusi:

Dalam kondisi seperti apa sebaiknya menggunakan session daripada cookie, atau sebaliknya?

--- 

### Tugas Praktikum
1. Buat sistem login sederhana:
    - Form login (login.php)
    - Proses login (proses_login.php)
    - Dashboard terproteksi (dashboard.php)
    - Logout (logout.php)
2. Validasi username dan password (gunakan hardcoded atau array user sementara)
3. Tambahkan proteksi agar halaman dashboard.php tidak bisa diakses tanpa login
4. (Opsional) Tambahkan cookie remember me

# Pertemuan 10: Keamanan Dasar PHP — Mencegah SQL Injection & XSS

## Deskripsi Umum
Pertemuan ini membahas celah keamanan umum pada aplikasi web, khususnya **SQL Injection** dan **Cross-Site Scripting (XSS)**. Mahasiswa akan belajar mengenali dan mencegah serangan tersebut melalui teknik **validasi dan sanitasi input** dalam PHP.

## Tujuan Pembelajaran
Setelah mengikuti pertemuan ini, mahasiswa mampu:
- Mengidentifikasi jenis celah keamanan umum di aplikasi web
- Menerapkan teknik pencegahan dasar SQL Injection dan XSS
- Menggunakan `mysqli_real_escape_string()` dan `htmlspecialchars()` untuk mengamankan input

## Indikator Keberhasilan
- Mahasiswa dapat menunjukkan contoh SQL Injection dan cara mencegahnya
- Mahasiswa mampu menerapkan validasi input terhadap XSS
- Mahasiswa dapat membedakan sanitasi dan validasi input

---

## Pokok Bahasan
1. Pengantar Keamanan Aplikasi Web
2. SQL Injection: Contoh dan Pencegahan
3. XSS: Contoh dan Pencegahan
4. Teknik Validasi dan Sanitasi Input
5. Prinsip "Jangan Percaya Input Pengguna"

---

## Penjelasan Materi

### 1. SQL Injection: Apa dan Bagaimana?

**Contoh berbahaya:**
```php
// Tanpa proteksi
$user = $_GET['user'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user'");
```
**Jika user input:**

```sql
admin' OR 1=1 --
```
**Query menjadi:**

```sql
SELECT * FROM users WHERE username = 'admin' OR 1=1 --'
```

### 2. Pencegahan SQL Injection
**Gunakan `mysqli_real_escape_string()`**


```php
$user = mysqli_real_escape_string($conn, $_GET['user']);
```
**Lebih aman: Gunakan Prepared Statement**

```php
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
$stmt->bind_param("s", $user);
$stmt->execute();
```
### 3. XSS (Cross Site Scripting)
**Contoh berbahaya:**

```php
echo $_GET['nama'];  // Tanpa perlindungan
```
**Jika user input:**

```php
<script>alert('xss!');</script>
```
**Pencegahan XSS:**

```php
echo htmlspecialchars($_GET['nama']);
```
### 4. Validasi & Sanitasi Input
- Validasi = memeriksa apakah input sesuai aturan
- Sanitasi = membersihkan karakter berbahaya dari input

**Contoh kombinasi:**

```php
$umur = $_POST['umur'];
if (!is_numeric($umur)) {
  echo "Umur harus berupa angka.";
  exit;
}

$nama = htmlspecialchars(trim($_POST['nama']));
```
### Pertanyaan Diskusi:

Apa dampak jika aplikasi kita terkena serangan SQL Injection atau XSS? Siapa yang paling dirugikan?

---

### Tugas Praktikum
1. Buat form pencarian user berdasarkan username, lalu tampilkan hasilnya
2. Tampilkan perbandingan dua versi:
3. Tanpa validasi (rentan SQL Injection)
4. Menggunakan `mysqli_real_escape_string()` atau prepared statement
5. Buat form input nama lalu tampilkan kembali di browser
6. Uji tanpa `htmlspecialchars()` dan dengan `htmlspecialchars()`

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
