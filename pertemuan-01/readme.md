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