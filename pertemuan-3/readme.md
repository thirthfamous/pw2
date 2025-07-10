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