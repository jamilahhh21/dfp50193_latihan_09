<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN</title>
    <style>
        *{
            font-family: Verdana,Geneva,Tahoma, san-serif;
        }
     </style>

</head>
<body>
<?php require 'menu.php'; ?>
    <h1>Product</h1>

    <?php
    $air = [
        'nama' => 'Drinking Water ',
        'size' => '500 ml',
        'harga' => '70',
    ];
    ?>

    <table>
        <tr>
            <td>Nama: </td>
            <td><?php echo $air['nama']; ?></td>
        </tr>

        <tr>
            <td>Size: </td>
            <td><?php echo $air['size']; ?></td>
        </tr>

        <tr>
            <td>Harga: </td>
            <td><?php echo $air['harga']; ?> sen </td>
        </tr>
    </table>
</body>
</html>