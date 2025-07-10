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