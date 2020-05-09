<?php 

    include("config.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $kasir = $_POST['kasir'];

    $query = $db->query("UPDATE product SET name='$nama', price='$harga', id_category='$kategori', id_cashier='$kasir' WHERE id='$id'");

    if ($query) {
        echo "<script>alert('Berhasil Mengubah Data Ke Database');document.location.href='../index.php'</script>";   
    }else {
        echo "<script>alert('Gagal Mengubah Data Ke Database');document.location.href='../index.php'</script>";   
    }

    