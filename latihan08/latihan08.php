<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATABASE</title>
</head>
<body>
    <form action="display.php" method="post">
        <label>Nama : </label>
        <input type="text" name="nama" required>
        <br>
        <br>
        <label>Umur : </label>
        <input type="number" name="umur" required>
        <br>
        <br>
        <label>NIM : </label>
        <input type="text" name="nim" required>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>