<?php
require_once __DIR__.'/pesanan.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $menu = [
        new MenuMakanan("Nasi Goreng", "Makanan", 15000),
        new MenuMakanan("Mie Ayam", "Makanan", 12000),
        new MenuMakanan("Es Teh", "Minuman", 5000),
        new MenuMakanan("Kopi Hitam", "Minuman", 7000),
    ];

    $pesanan = new Pesanan();

    if(isset($_POST['menu'])){
        foreach($_POST['menu'] as $i){
            $pesanan->tambahMakanan($menu[$i]);
        }
        $pesanan->tampilkanPesanan();
    }else{
        echo "<h1>Detail Pesanan</h1>";
        echo "<p>Belum ada menu yang dipilih.</p>"; 
    }
}else{
    echo "<script>alert('tidak boleh akses halaman ini')</script>";
?>
<meta http-equiv="refresh" content='0; url=form.php';
<?php
}