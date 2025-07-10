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