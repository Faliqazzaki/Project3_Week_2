<?php
// konfigurasi koneksi
$host = "localhost";
$user = "root";
$pass = "";
$db   = "akademik_db";

// koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query ambil semua data mahasiswa
$sql = "SELECT nim, nama, umur FROM mahasiswa ORDER BY nim ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <?php if ($result->num_rows > 0): ?>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Umur</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['umur']; ?></td>
                <td>
                    <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=akademik_db&table=mahasiswa">Detail</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data mahasiswa</p>
    <?php endif; ?>

</body>
</html>
