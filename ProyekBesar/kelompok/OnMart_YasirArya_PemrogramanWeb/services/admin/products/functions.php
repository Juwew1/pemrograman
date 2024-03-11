<?php

include __DIR__ . "/../Conn.php";

function query($query)
{
  global $connection;
  $result = mysqli_query($connection, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambahProduk($data)
{
  global $connection;

  $productName = htmlspecialchars($data['namaProduk']);
  $productType = htmlspecialchars($data['jenisProduk']);
  $stock = htmlspecialchars($data['stok']);
  $price = htmlspecialchars($data['harga']);
  $expire_date = htmlspecialchars($data['kadaluwarsa']);

  // cek jenis produk
  $productCode = 0;
  if ($_POST['jenisProduk'] === '1') {
    $productType = 'Makanan';

    // generate kode produk
    $productCode = 'MKN';
    $productCode .= rand(1000, 9999);
  } elseif ($_POST['jenisProduk'] === '2') {
    $productType = 'Minuman';

    // generate kode produk
    $productCode = 'MNM';
    $productCode .= rand(1000, 9999);
  } elseif ($_POST['jenisProduk'] === '3') {
    $productType = 'Alat rumah tangga';

    // generate kode produk
    $productCode = 'ART';
    $productCode .= rand(1000, 9999);
  } elseif ($_POST['jenisProduk'] === '4') {
    $productType = 'Lain-lain';

    // generate kode produk
    $productCode = 'LL';
    $productCode .= rand(1000, 9999);
  }

  // upload gambar
  $image = upload();
  if (!$image) {
    return false;
  }

  $query = "INSERT INTO products (
                      kode_produk, nama_produk, jenis_produk, stok_produk, harga_produk, expire_date, gambar_produk
            ) VALUES ('$productCode', '$productName', '$productType', '$stock', '$price', '$expire_date', '$image')";

  $result = mysqli_query($connection, $query);

  return mysqli_affected_rows($connection);
}

function upload()
{
  $fileName = $_FILES['gambarProduk']['name'];
  $fileSize = $_FILES['gambarProduk']['size'];
  $tmpName = $_FILES['gambarProduk']['tmp_name'];
  $error = $_FILES['gambarProduk']['error'];

  // cek apakah ada gambar atau tidak
  if ($error === 4) {
    echo "<script>alert('Pilih gambar terlebih dahulu!')</script>";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $validExtension = ['jpg', 'jpeg', 'png'];
  $imageExtension = explode('.', $fileName);
  $imageExtension = strtolower(end($imageExtension));

  if (!in_array($imageExtension, $validExtension)) {
    echo "<script>alert('Yang anda upload bukan gambar!')</script>";
    return false;
  }

  // cek ukuran gambar
  if ($fileSize > 2097152) {
    echo "<script>alert('Ukuran file terlalu besar!')</script>";
    return false;
  }

  // proses upload
  // generate nama gambar
  $newFileName = uniqid();
  $newFileName .= '.';
  $newFileName .= $imageExtension;

  move_uploaded_file($tmpName, '../../../img/dataProduct/' . $newFileName);

  return $newFileName;
}

function hapus($productCode)
{
  global $connection;

  mysqli_query($connection, "DELETE FROM products WHERE kode_produk = '$productCode'");

  return mysqli_affected_rows($connection);
}

function ubah($data)
{
  global $connection;

  $productId = $data['productId'];
  $productName = htmlspecialchars($data['namaProduk']);
  $stock = htmlspecialchars($data['stok']);
  $price = htmlspecialchars($data['harga']);
  $expire_date = htmlspecialchars($data['kadaluwarsa']);
  $oldImage = htmlspecialchars($data['gambarLama']);

  // cek apakah user upload gambar
  if ($_FILES['gambarProduk']['error'] === 4) {
    $image = $oldImage;
  } else {
    $image = upload();
  }

  $query = "UPDATE products SET
                  nama_produk = '$productName',
                  stok_produk = '$stock',
                  harga_produk = '$price',
                  expire_date = '$expire_date',
                  gambar_produk = '$image'
                  WHERE kode_produk = '$productId'";

  $result = mysqli_query($connection, $query);

  return mysqli_affected_rows($connection);
}

function getData($values)
{
  foreach ($values as $value) {
    $data = $value;
  }

  return $data;
}
