<?php

require_once '../../services/admin/FunctionPrducts.php';

$products = query("SELECT * FROM products");

$stockTotal = query("SELECT SUM(stok_produk) AS total_stok FROM products");

$todolist = query("SELECT * FROM todolist");

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
  <link rel="stylesheet" href="../../css/adminImgCardStyle.css">
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
                      <img src="../../img/ad-product.1024x1024.png" class="img-fluid image-card" alt="products">
                    </div>
                    <div class="col-sm-5 text-end">
                      <span class="fs-3">
                        <?php if (!empty($stockTotal)) { ?>
                          0
                        <?php } else {
                          foreach ($stockTotal as $stock) {
                            echo $stock['total_stok'];
                          }
                        } ?>
                      </span>
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
                      <img src="../../img/users.1024x717.png" class="img-fluid image-card" alt="products">
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
                      <img src="../../img/shopping-cart.1024x922.png" class="img-fluid image-card" alt="products">
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
                      <img src="../../img/credit-card.1024x769.png" class="img-fluid image-card" alt="products">
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
              <div class="card-header bg-info"></div>
              <div class="card-body">
                <div class="container">
                  <p>Data terbaru yang ditambahkan</p>
                  <?php if (empty($products)) { ?>
                    <p class="mt-5 text-center">Belum ada data baru yang ditambahkan</p>
                  <?php } else { ?>
                    <?php foreach ($products as $product) { ?>
                      <div class="card">
                        <div class="card-body">
                          <div id="dataProduk">
                            <p>Nama: <?= $product['nama_produk'] ?></p>
                            <p>Kategori: <?= $product['jenis_produk'] ?></p>
                            <p>Tanggal: <?= $product['created_at'] ?></p>
                            <p>Kode Produk: <?= $product['kode_produk'] ?></p>
                          </div>
                        </div>
                      </div>
                      <br>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="card mt-5">
              <div class="card-header bg-info"></div>
              <div class="card-body">
                <div class="container">
                  <p>Todo List</p>
                  <!-- Button trigger modal -->
                  <button
                    type="button"
                    class="btn btn-info mb-5 text-white"
                    data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"> Tambah
                  </button>

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="staticBackdrop"
                    data-bs-backdrop="static"
                    data-bs-keyboard="false"
                    tabindex="-1"
                    aria-labelledby="staticBackdropLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="../../services/admin/FunctionTodolists.php" method="post">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">
                              <label for="todo">Masukan Todo</label>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <textarea
                              name="todo"
                              id="todo"
                              class="form-control"
                              placeholder="Masukan List yang akan disimpan"
                            ></textarea>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <?php if (empty($todolist)) { ?>
                    <p class="text-center">Belum ada list yang ditambahkan</p>
                  <?php } else { ?>
                    <?php foreach ($todolist as $todo) { ?>
                      <div class="card">
                        <div class="card-body">
                          <p class="mb-3"><?= $todo['pesan'] ?></p>
                          <a
                            href="../../services/admin/deleteList.php?id=<?= $todo['id'] ?>"
                            class="btn btn-danger text-white float-end"
                            onclick="return confirm('Yakin menghapus list?')"
                          >Hapus</a>
                          <a href="#" class="btn btn-success float-end">selesai</a>
                        </div>
                      </div>
                      <br>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3 col-sm-6 mt-3">
            <div class="card">
              <div class="card-header bg-primary text-white">Kalender</div>
              <div class="card-body">
                <iframe
                  src="https://calendar.google.com/calendar/embed?src=a0b9f8603e991bc389572f2a7b3b276edda8bbf5ae8d4af76596364f6c86dfe0%40group.calendar.google.com&ctz=Asia%2FJakarta"
                  style="border: 0" width="100%" height="670" frameborder="0" scrolling="no"></iframe>
              </div>
            </div>
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
