<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP Latihan 2</title>
</head>
<body>
    <?php 
        include('latihan2.php');
    ?>

    <h2>Daftar Nilai Mahasiswa</h2>
    <table border="1" cellpadding="3">
        <tr>
            <th>NO</th>
            <th>NPM</th>
            <th>NAMA MAHASISWA</th>
            <th>NILAI</th>
            <th>KETERANGAN</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach($mahasiswa as $m){ ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $m["npm"] ?></td>
            <td><?php echo $m["nama"] ?></td>
            <td><?php echo $m["nilai"] ?></td>
            <td><?php echo cekLulus($m["nilai"]) ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>