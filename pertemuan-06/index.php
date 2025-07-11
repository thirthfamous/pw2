<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mahasiswa</title>
  <style>
    body { font-family: sans-serif; padding: 20px; background: #f8f9fa; }
    table { border-collapse: collapse; width: 100%; background: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
    th { background-color: #007bff; color: white; }
    tr:nth-child(even) { background-color: #f2f2f2; }
  </style>
</head>
<body>

<?php
$mahasiswa = [
  ['nama' => 'Andi', 'nim' => '123456', 'umur' => 20],
  ['nama' => 'Budi', 'nim' => '654321', 'umur' => 21],
  ['nama' => 'Citra', 'nim' => '789012', 'umur' => 22],
];
?>

<h2>Daftar Mahasiswa</h2>
<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Umur</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mahasiswa as $i => $m): ?>
      <tr>
        <td><?= $i + 1 ?></td>
        <td><?= $m['nama'] ?></td>
        <td><?= $m['nim'] ?></td>
        <td><?= $m['umur'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</body>
</html>
