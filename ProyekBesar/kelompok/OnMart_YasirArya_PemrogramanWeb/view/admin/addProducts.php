<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OnMart Admin</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <style>
    #navigation-link p a {
      color: white;
    }

    #navigation-link p a:hover {
      color: salmon;
      font-size: 20px;
    }
  </style>
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
        <h1 class="mt-4">Tambah Produk</h1>
        <hr>
        <a href="product.php" class="btn btn-success mt-5">Kembali</a>
        <div class="container mt-5">
          <h3>Data produk :</h3>
          <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-4">
                  <div class="mb-3 mt-4">
                    <label for="namaProduk" class="form-label">Nama Produk :</label>
                    <input type="text" name="namaProduk" id="namaProduk" class="form-control" required>
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="jenisProduk" class="form-label">Jenis Produk :</label>
                    <select class="form-select mb-3" name="jenisProduk" id="jenisProduk">
                      <option value="1" selected>Makanan</option>
                      <option value="2">Minuman</option>
                      <option value="3">Alat Rumah Tangga</option>
                      <option value="4">Lain-lain</option>
                    </select>
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="stok" class="form-label">Stok Produk :</label>
                    <input type="number" name="stok" id="stok" class="form-control" min="0" max="1000" required>
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="harga" class="form-label">Harga Produk :</label>
                    <input type="number" name="harga" id="harga" class="form-control" min="0" required>
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="gambarProduk" class="form-label">Gambar Produk :</label>
                    <input type="file" name="gambarProduk" id="gambarProduk" class="form-control" required>
                  </div>
                  <div class="mb-3 mt-4">
                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                  </div>
                </div>
                <div class="col-1"></div>
                <div class="col-5">
                  <div class="mb-3 mt-4">
                    <label for="kadaluwarsa" class="form-label">Tanggal Kadaluwarsa :</label>
                    <input type="date" name="kadaluwarsa" id="kadaluwarsa" class="form-control" required>
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="stok" class="form-label">- :</label>
                    <input type="number" name="stok" id="stok" class="form-control" min="0" max="1000" required>
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="harga" class="form-label">- :</label>
                    <input type="number" name="harga" id="harga" class="form-control" min="0" required>
                  </div>
                  <div class="mb-3 mt-4">
                    <label for="harga" class="form-label">- :</label>
                    <input type="number" name="harga" id="harga" class="form-control" min="0" required>
                  </div>
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
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
