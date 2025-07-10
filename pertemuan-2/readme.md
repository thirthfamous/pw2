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

