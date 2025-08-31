<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>NAMA</td>
            <td>HOBI</td>
            <td>CIRI</td>
        </tr>
        <?php
            $i = 0;
            while($i < 10){
        ?>
        <tr>
            <td>FALIQ</td>
            <td>MUSIK</td>
            <td>GANTENG</td>
        </tr>
        <?php
            $i = $i + 1;
        }
        ?>
    </table>
    
</body>
</html>