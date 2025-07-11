<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "farhan123", "kampus");
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Proses simpan data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $nim  = $_POST["nim"];
  $umur = $_POST["umur"];

  $stmt = $conn->prepare("INSERT INTO mahasiswa (nama nim, umur) VALUES (?, ?, ?)");
  $stmt->bind_param("ssi", $nama, $nim, $umur);

  if ($stmt->execute()) {
    header("Location: index.php"); // ✅ Redirect ke halaman index
    exit; // Penting: hentikan script setelah redirect
  } else {
    echo "Gagal menambahkan data: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>

<!-- Form Tambah -->
<h2>Tambah Mahasiswa</h2>
<form method="post">
  <label>Nama:</label><br>
  <input type="text" name="nama" required><br><br>

  <label>NIM:</label><br>
  <input type="text" name="nim" required><br><br>

  <label>Umur:</label><br>
  <input type="number" name="umur" required><br><br>

  <button type="submit">Simpan</button>
</form>
