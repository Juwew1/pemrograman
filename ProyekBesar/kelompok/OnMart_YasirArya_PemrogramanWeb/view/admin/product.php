<?php

require_once '../../services/admin/FunctionPrducts.php';

$products = query("SELECT * FROM products");

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OnMart Admin</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/adminNavigationStyle.css">
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-2 bg-secondary text-white">
      <h2 class="text-center mt-4">OnMart</h2>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-5 col-sm-6 text-end">
            <img src="../../img/user.890x1024.png" alt="user" width="50">
          </div>
          <div class="col-6 col-sm-6">
            <p>Name</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="container" id="navigation-link">
          <p><a href="home.php" class="link-underline link-underline-opacity-0">Dashboard</a></p>
          <p><a href="product.php" class="link-underline link-underline-opacity-0">Products</a></p>
          <p><a href="customers.php" class="link-underline link-underline-opacity-0">Customers</a></p>
          <p><a href="orders.php" class="link-underline link-underline-opacity-0">Orders</a></>
          <p><a href="../../404.html" class="link-underline link-underline-opacity-0">Reports</a></p>
          <p><a href="logout.php" class="link-underline link-underline-opacity-0">Logout</a></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="container">
        <h1 class="mt-4">Product</h1>
        <hr>
        <a href="addProducts.php" class="btn btn-success mt-5">Tambah Produk</a>
        <?php if (empty($products)) { ?>
          <p class="mt-5 text-center">Belum ada Product yang ditambahkan</p>
        <?php } else { ?>
          <table class="table table-striped mt-3">
            <caption hidden>Tabel untuk menampilkan produk yang disimpan di database</caption>
            <thead>
            <tr>
              <th>No</th>
              <th>Gambar</th>
              <th>Nama Produk</th>
              <th>Jenis Produk</th>
              <th>Stok</th>
              <th>Harga</th>
              <th>Harga Promo</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
            <?php foreach ($products as $product) { ?>
              <tr>
                <td><?= $no; ?></td>
                <td>
                  <img src="../../img/dataProduct/<?= $product['gambar_produk']; ?>" alt="gambar produk" width="75">
                </td>
                <td><?= $product['nama_produk']; ?></td>
                <td><?= $product['jenis_produk']; ?></td>
                <td><?= $product['stok_produk']; ?></td>
                <td><?= $product['harga_produk']; ?></td>
                <td>-</td>
                <td>
                  <a href="editProducts.php" class="btn btn-success">Edit</a>
                  <a
                    href="../../services/admin/deleteProduct.php?id=<?= $product['kode_produk'] ?>"
                    class="btn btn-danger"
                    onclick="return confirm('Yakin menghapus produk?')"
                  >Hapus</a>
                  <a
                    href="../../services/admin/promotion.php?id=<?= $product['kode_produk']?>"
                    class="btn btn-warning"
                  >Promo</a>
                </td>
              </tr>
              <?php $no++; ?>
            <?php } ?>
            </tbody>
          </table>
        <?php }?>
      </div>
    </div>
  </div>
</div>
<footer class="mt-5 ml-5 mt-sm-5 ml-sm-5">
  <div class="container-fluid text-center">
    <p>&copy; Copyright Yasir and Arya 2024</p>
  </div>
</footer>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
