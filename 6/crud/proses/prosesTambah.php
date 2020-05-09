<?php 

    include("config.php");

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $kasir = $_POST['kasir'];

    $query = $db->query("INSERT INTO product(name,price,id_category,id_cashier) VALUES('$nama','$harga','$kategori','$kasir')");

    if ($query) {
        echo "<script>alert('Berhasil Menambahkan Data Ke Database');document.location.href='../index.php'</script>";   
    }else {
        echo "<script>alert('Gagal Menambahkan Data Ke Database');document.location.href='../index.php'</script>";   
    }

    