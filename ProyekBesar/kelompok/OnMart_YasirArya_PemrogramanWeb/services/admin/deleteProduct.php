<?php

require_once 'FunctionPrducts.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>alert('Data berhasil dihapus!'); document.location.href = '../../view/admin/product.php';</script>";
} else {
  echo "<script>alert('Data gagal dihapus!');</script>";
}
