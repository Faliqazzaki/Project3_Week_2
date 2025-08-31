<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "akademik_db";

    $conn = new mysqli($host, $user, $pass, $db);

    if($conn->connect_error){
        die("Koneksi Error : " . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $nim = $_POST['nim'];

        $sql = "INSERT INTO mahasiswa (nama, nim, umur) VALUES ('$nama', '$nim', '$umur')";

        if($conn->query($sql) === TRUE){
            echo "<h3>Data berhasil disimpan!</h3>";
            echo "Nama yang disimpan: <b>$nama</b><br>";
            echo "<a href='latihan08.php'>Kembali ke Form</a>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
$conn->close();
?>
