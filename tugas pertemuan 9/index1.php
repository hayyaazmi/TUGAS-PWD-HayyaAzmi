<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Latihan 1</title>
</head>
<body>
    <?php
        include('latihan1.php');
    ?>

    <h3>Angka 1-100 yang menampilkan kelipatan 3 dan 5</h3>
    <ul>
        <?php 
            foreach($hasil as $angka){
            ?>
                <li><?php echo $angka; ?></li>
             <?php
            }
        ?>
    </ul>
</body>
</html>