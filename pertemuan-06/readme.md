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