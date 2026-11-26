<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pemesanan Makanan Kantin</h1>
    <form action="proses.php" method="post">
        <p>Pilih Menu:</p>
        <input type="checkbox" name="menu[]" value="0">Nasi Goreng - Rp 15.000<br>

        <input type="checkbox" name="menu[]" value="1">Mie Ayam - Rp 12.000<br>
        
        <input type="checkbox" name="menu[]" value="2">Es Teh - Rp 5.000<br>
        
        <input type="checkbox" name="menu[]" value="3">Kopi Hitam - Rp 7.000<br>
   
        <p>
            <button type="submit">Pesan Sekarang</button>
        </p>
    </form>
</body>
</html>