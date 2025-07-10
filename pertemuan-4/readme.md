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
