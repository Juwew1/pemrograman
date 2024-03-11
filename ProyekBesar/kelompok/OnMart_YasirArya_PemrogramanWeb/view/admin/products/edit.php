<?php

require_once '../../../services/admin/products/functions.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE kode_produk = '$id'";

$row = query($sql);
$row = getData($row);

// mengecek apakah tombol submit ditekan atau belum
if (isset($_POST['submit'])) {
  // mengecek apakah data berhasil ditambahkan atau tidak
  if (ubah($_POST) > 0) {
    echo "<script>alert('Data berhasil diperbarui!'); document.location.href = 'index.php'</script>";
  } else {
    echo "<script>alert('Data gagal diperbarui!');</script>";
  }
}

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
<body>
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
        <h1 class="mt-4">Edit Produk</h1>
        <hr>
        <a href="index.php" class="btn btn-success mt-5">Kembali</a>
        <div class="container mt-5">
          <h3>Data produk :</h3>
          <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-4">
                  <div class="mb-3 mt-4">
                    <label for="namaProduk" class="form-label">Nama Produk :</label>
                    <input
                      type="text"
                      name="namaProduk"
                      id="namaProduk"
                      class="form-control"
                      value="<?= $row['nama_produk'] ?>"
                      required
                    >
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="jenisProduk" class="form-label">Jenis Produk :</label>
                    <select class="form-select mb-3" name="jenisProduk" id="jenisProduk" disabled>
                      <?php if ($row['jenis_produk'] === "Makanan") { ?>
                        <option value="1" selected>Makanan</option>
                      <?php } elseif ($row['jenis_produk'] === "Minuman") { ?>
                        <option value="2" selected>Minuman</option>
                      <?php } elseif ($row['jenis_produk'] === "Alat rumah tangga") { ?>
                        <option value="3">Alat rumah tangga</option>
                      <?php } else { ?>
                        <option value="4">Lain-lain</option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="stok" class="form-label">Stok Produk :</label>
                    <input
                      type="number"
                      name="stok"
                      id="stok"
                      class="form-control"
                      min="0"
                      max="1000"
                      value="<?= $row['stok_produk'] ?>"
                      required
                    >
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="harga" class="form-label">Harga Produk :</label>
                    <input
                      type="number"
                      name="harga"
                      id="harga"
                      class="form-control"
                      min="0"
                      value="<?= $row['harga_produk'] ?>"
                      required
                    >
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="gambarProduk" class="form-label">Gambar Produk :</label>
                    <input
                      type="file"
                      name="gambarProduk"
                      id="gambarProduk"
                      class="form-control"
                      value="<?= $row['gambar_produk'] ?>"
                    >
                    <div class="form-text mt-2">Gambar: <?= $row['gambar_produk'] ?></div>
                  </div>
                  <div class="mb-3 mt-4">
                    <button type="submit" name="submit" class="btn btn-success">Perbarui</button>
                  </div>
                </div>
                <div class="col-1"></div>
                <div class="col-5">
                  <div class="mb-3 mt-4">
                    <label for="kadaluwarsa" class="form-label">Tanggal Kadaluwarsa :</label>
                    <input
                      type="date"
                      name="kadaluwarsa"
                      id="kadaluwarsa"
                      class="form-control"
                      value="<?= $row['expire_date'] ?>"
                      required
                    >
                  </div>
                  <div class="mb-3 mt-4">
                    <input type="hidden" name="productId" class="form-control" value="<?= $row['kode_produk'] ?>">
                  </div>
                  <div class="mb-3 mt-4">
                    <input type="hidden" name="gambarLama" class="form-control" value="<?= $row['gambar_produk'] ?>">
                  </div>
                  <!--                  <div class="mb-3 mt-4">-->
                  <!--                    <label for="stok" class="form-label">- :</label>-->
                  <!--                    <input type="number" name="stok" id="stok" class="form-control" min="0" max="1000" required>-->
                  <!--                  </div>-->
                  <!--                  <div class="mb-3 mt-4">-->
                  <!--                    <label for="harga" class="form-label">- :</label>-->
                  <!--                    <input type="number" name="harga" id="harga" class="form-control" min="0" required>-->
                  <!--                  </div>-->
                  <!--                  <div class="mb-3 mt-4">-->
                  <!--                    <label for="harga" class="form-label">- :</label>-->
                  <!--                    <input type="number" name="harga" id="harga" class="form-control" min="0" required>-->
                  <!--                  </div>-->
                </div>
              </div>
            </form>
          </div>
        </div>
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
