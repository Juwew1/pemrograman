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
        <h1 class="mt-4">Order Detail</h1>
        <hr>
        <a href="orders.php" class="btn btn-info mt-3 mb-3">Kembali</a>
        <a href="../../404.html" class="btn btn-danger">Print Detail Order</a>

        <div class="container mt-5">
          <div class="row">
            <div class="col-6">
              <h3>Info Pesanan</h3>
              <br>
              <table class="table">
                <caption hidden>Tabel info pesanan</caption>
                <tbody>
                <tr>
                  <td>Tanggal Pesanan</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Toko</td>
                  <td>:</td>
                  <td>OnMart</td>
                </tr>
                <tr>
                  <td>Order ID</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Pembayaran</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Pengirim</td>
                  <td>:</td>
                  <td>OnMart Kurir (REG)</td>
                </tr>
                <tr>
                  <td>No. Invoice</td>
                  <td>:</td>
                  <td></td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="col-6">
              <h3>Info Pelanggan</h3>
              <br>
              <table class="table">
                <caption hidden>Tabel info pesanan</caption>
                <tbody>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td></td>
                </tr>
                <tr>
                  <td>No. Telp</td>
                  <td>:</td>
                  <td></td>
                </tr>
                </tbody>
              </table>
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
</div>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>
