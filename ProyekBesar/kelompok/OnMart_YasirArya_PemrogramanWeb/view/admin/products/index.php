<?php

require_once '../../../services/admin/products/functions.php';

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
  <link rel="stylesheet" href="../../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../css/adminNavigationStyle.css">
</head>
<body class="vh-100">
<div class="container-fluid">
  <div class="row">
    <div class="col-2 bg-secondary text-white">
      <h2 class="text-center mt-4">OnMart</h2>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-5 col-sm-6 text-end">
            <img src="../../../img/user.890x1024.png" alt="user" width="50">
          </div>
          <div class="col-6 col-sm-6">
            <p>Name</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="container" id="navigation-link">
          <p><a href="../home/index.php" class="link-underline link-underline-opacity-0">Dashboard</a></p>
          <p><a href="index.php" class="link-underline link-underline-opacity-0">Products</a></p>
          <p><a href="../customers/index.php" class="link-underline link-underline-opacity-0">Customers</a></p>
          <p><a href="../orders/index.php" class="link-underline link-underline-opacity-0">Orders</a></>
          <p><a href="../../../404.html" class="link-underline link-underline-opacity-0">Reports</a></p>
          <p><a href="../logout.php" class="link-underline link-underline-opacity-0">Logout</a></p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="container">
        <h1 class="mt-4">Product</h1>
        <hr>
        <a href="add.php" class="btn btn-success mt-5">Tambah Produk</a>
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
                  <img src="../../../img/dataProduct/<?= $product['gambar_produk']; ?>" alt="gambar produk" width="75">
                </td>
                <td><?= $product['nama_produk']; ?></td>
                <td><?= $product['jenis_produk']; ?></td>
                <td><?= $product['stok_produk']; ?></td>
                <td><?= $product['harga_produk']; ?></td>
                <td>-</td>
                <td>
                  <a
                    href="edit.php?id=<?= $product['kode_produk'] ?>"
                    class="btn btn-success text-white"
                  >Edit</a>
                  <a
                    href="../../../services/admin/products/delete.php?id=<?= $product['kode_produk'] ?>"
                    class="btn btn-danger"
                    onclick="return confirm('Yakin menghapus produk?')"
                  >Hapus</a>
                  <button
                    type="button"
                    class="btn btn-warning text-white"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"> Promo
                  </button>
                  <div
                    class="modal fade"
                    id="staticBackdrop"
                    data-bs-backdrop="static"
                    data-bs-keyboard="false"
                    tabindex="-1"
                    aria-labelledby="staticBackdropLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="../../../services/admin/todolist/functions.php" method="post">
                          <div class="modal-header text-center">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">
                              <label for="promoPrice">Masukan Harga Promo</label>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <input type="number" name="promoPrice" id="promoPrice" min="0" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" name="submit" class="btn btn-primary">Promo</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
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
<script src="../../../js/bootstrap.min.js"></script>
</body>
</html>
