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
        <h1 class="mt-4">Customer</h1>
        <hr>
        <table class="table table-striped mt-5">
          <caption hidden>Tabel untuk menampilkan produk yang disimpan di database</caption>
          <thead>
          <tr>
            <th>No</th>
            <th>Email</th>
            <th>Nama</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            <th>Edit</th>
          </tr>
          </thead>
          <tbody>
          <!--          Data yang disimpan disini akan di ambil dari
                                data base. -->
          <tr>
            <td>1</td>
            <td>email@example.com</td>
            <td>name</td>
            <td>088334561765</td>
            <td>-</td>
            <td>
              <button class="btn btn-success">Edit</button>
              <button class="btn btn-danger">Hapus</button>
            </td>
          </tr>
          <tr>
            <td>1</td>
            <td>email@example.com</td>
            <td>name</td>
            <td>088334561765</td>
            <td>-</td>
            <td>
              <button class="btn btn-success">Edit</button>
              <button class="btn btn-danger">Hapus</button>
            </td>
          </tr>
          <!--          Data yang disimpan disini akan di ambil dari
                      data base. -->
          </tbody>
        </table>
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
