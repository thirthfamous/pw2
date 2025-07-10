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
