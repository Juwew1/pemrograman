<?php

require_once 'functions.php';

$id = $_GET['id'];


if (listIsComplete($id) > 0) {
  echo "<script>alert('List berhasil diselesaikan!'); document.location.href = '../../../view/admin/home/index.php';</script>";
} else {
  echo "<script>alert('List gagal diselesaikan!');</script>";
}
