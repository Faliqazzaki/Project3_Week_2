<?php
// Konfigurasi koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "akademik_db";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil NIM dari parameter URL
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Query ambil data mahasiswa berdasarkan NIM
    $sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ambil data mahasiswa
        $data = $result->fetch_assoc();
    } else {
        echo "<h3>Data mahasiswa tidak ditemukan!</h3>";
        echo "<a href='index.php'>Kembali</a>";
        exit;
    }
} else {
    echo "<h3>NIM tidak diberikan!</h3>";
    echo "<a href='index.php'>Kembali</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <p><strong>NIM :</strong> <?= $data['nim']; ?></p>
    <p><strong>Nama :</strong> <?= $data['nama']; ?></p>
    <p><strong>Umur :</strong> <?= $data['umur']; ?></p>

    <br>
    <a href="latihan06.php">Kembali ke Daftar</a>
</body>
</html>
