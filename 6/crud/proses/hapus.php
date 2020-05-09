<?php 

    include("config.php");
    $query = $db->query("DELETE FROM product WHERE id='$_GET[id]'");
    header('location: ../index.php');