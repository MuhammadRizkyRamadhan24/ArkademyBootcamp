<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy Bootcamp</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>

<body>
    <header>
        <div class="container">
            <img src="assets/img/logo.png" >
            <h2>ARKADEMY BOOTCAMP</h2>
            <div class="clearfix"></div>
        </div>
    </header>

    <div class="container">

        <button id="button-add">ADD</button>

        <div class="bg-form">
            <form action="proses/prosesTambah.php" method="post" id="form">
                <div class="form-header">
                    <div class="container">
                        <h4>ADD DATA</h4>
                        <button type="button" id="close">X</button>
                    </div>
                </div>
                <div class="form-body">
                    <div class="container">
                        <select name="kasir" id="kasir" required>
                            <option selected disabled>Raisa Andriana</option>
                            <option value="1">Pevita Pearce</option>
                            <option value="2">Raisa Andriana</option>
                            <option value="3">Muhammad Rizky Ramadhan</option>
                        </select>
                        <br><br>
                        <select name="kategori" id="kategori" required>
                            <option selected disabled>Food</option>
                            <option value="1">Food</option>
                            <option value="2">Drink</option>
                        </select>
                        <br><br>
                        <input type="text" name="nama" id="nama" placeholder="Ice Tea" autofocus="on" required>
                        <br><br>
                        <input type="number" name="harga" id="harga" placeholder="10.000" autofocus="on" required>
                        <br><br>
                        <input type="hidden" name="id" id="id" class="id">
                        <button type="submit" id="add">ADD</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>

        <div class="bg-alert">
            <div class="alert">
                <div class="alert-header">
                    <div class="container">
                        <button type="button" id="alert-close">X</button>
                    </div>
                </div>
                <div class="alert-body">
                    <h1><i class="fa fa-check"></i></h1>
                    <h2>asas</h2>
                </div>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Cashier</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("proses/config.php");
                $query = $db->query("SELECT *,product.id as idku, product.name as nama, product.price as harga, category.id as idkategori, cashier.id as idkasir, cashier.name_cashier as kasir FROM product,category,cashier WHERE product.id_category=category.id AND product.id_cashier=cashier.id ORDER BY idku ASC");
                while ($a = $query->fetch_array()) {
                    echo "
                        <tr>
                            <td>$a[name_cashier]</td>
                            <td>$a[name]</td>
                            <td>$a[name_category]</td>
                            <td>$a[price]</td>
                            <td>
                                <a href='#button-update' id='button-update' class='$a[idku]' nama='$a[nama]' harga='$a[harga]' kategori='$a[idkategori]' kasi r='$a[idkasir]'><i class='fa fa-edit' style='color: rgb(80, 212, 173);font-size: 20px'></i></a>
                                 
                                <button style='background: transparent;border: none' id='$a[idku]' kasir='$a[kasir]' class='doDelete'><i class='fa fa-trash' style='color: rgb(230, 109, 109);font-size: 20px'></i></button>
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>

    </div>

    <!-- Javascript -->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/style.js"></script>
</body>

</html>