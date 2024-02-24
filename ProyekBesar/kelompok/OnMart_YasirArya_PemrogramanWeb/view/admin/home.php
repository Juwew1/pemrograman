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
        <h1 class="mt-4">Dashboard</h1>
        <hr>
        <div class="dashboard">
          <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-header bg-success text-center text-white">Total Products</div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6 m-2">
                      <img src="../../img/ad-product.1024x1024.png" class="img-fluid" alt="products">
                    </div>
                    <div class="col-sm-5 text-end">
                      <span class="fs-3">0</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-header bg-warning text-center text-white">Customers</div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6 m-2">
                      <img src="../../img/users.1024x717.png" class="img-fluid" alt="products">
                    </div>
                    <div class="col-sm-5 text-end">
                      <span class="fs-3">0</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-header bg-danger text-center text-white">Orders</div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6 m-2">
                      <img src="../../img/shopping-cart.1024x922.png" class="img-fluid" alt="products">
                    </div>
                    <div class="col-sm-5 text-end">
                      <span class="fs-3">0</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-header bg-primary text-center text-white">Sales</div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-6 m-2">
                      <img src="../../img/credit-card.1024x769.png" class="img-fluid" alt="products">
                    </div>
                    <div class="col-sm-5 text-end">
                      <span class="fs-3">0</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="mt-5">
        <div class="row">
          <div class="col-8 col-sm-6 mt-3">
            <div class="card">
              <div class="card-header bg-success"></div>
              <div class="card-body">
                <div class="container">
                  <p>Data terbaru yang ditambahkan</p>
<!--                  Data yang disimpan disini akan di ambil dari
                      data base. -->
                  <div class="card">
                    <div class="card-body">
                      <div id="dataProduk">
                        <p>Nama: Nama akan Diganti dengan data yang di <strong>PHP</strong></p>
                        <p>Kategori: data PHP</p>
                        <p>Tanggal: data PHP</p>
                        <p>Kode Produk: data PHP</p>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-body">
                      <div id="dataProduk">
                        <p>Nama: Nama akan Diganti dengan data yang di <strong>PHP</strong></p>
                        <p>Kategori: data PHP</p>
                        <p>Tanggal: data PHP</p>
                        <p>Kode Produk: data PHP</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-5">
              <div class="card-header bg-info"></div>
              <div class="card-body">
                <div class="container">
                  <p>Todo List</p>
                  <div class="card">
                    <div class="card-body">
                      <div id="Check">
                        <label for="todo1"></label>
                        <input type="checkbox" name="todo1" id="todo1"> menambah produk baru
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="card">
                    <div class="card-body">
                      <div id="Check">
                        <label for="todo1"></label>
                        <input type="checkbox" name="todo1" id="todo1"> produk 1 akan kadaluwarsa pada tanggal sekian
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3 col-sm-6 mt-3">
            <div class="card">
              <div class="card-header bg-primary text-white">Kalender</div>
              <div class="card-body"></div>
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
