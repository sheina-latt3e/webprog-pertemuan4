<?php
    // transaksi penjualan produk
    $namaproduk = "Baju suka tidur";
    $harga_satuan = 115500;
    $qyt = 2;

    //hitung harga yang harus di bayar
    $total_harga = $harga_satuan * $qyt;

    echo "Nama Produk: " . $namaproduk;
    echo "<br>Harga Satuan: Rp" . $harga_satuan;
    echo "<br>Jumlah Beli : " . $qyt;
    echo "<br>Total Harga : Rp" . $total_harga;

    // terdapat diskon 5% jika Sub Total lebih dari 500.000
    if ($total_harga > 500000){
        $diskon = $total_harga * 0.05;
    }else{
        $diskon =0;
    }
    $total_bayar = $total_harga - $diskon;

    echo "<br> Diskon : Rp" . $diskon;
    echo "<br> Total bayar : Rp" . $total_bayar;

?>
