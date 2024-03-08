<?php

require_once 'FunctionTodolists.php';

$id = $_GET['id'];


if (deleteList($id) > 0) {
  echo "<script>alert('List berhasil dihapus!'); document.location.href = '../../view/admin/home.php';</script>";
} else {
  echo "<script>alert('List gagal dihapus!');</script>";
}
