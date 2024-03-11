<?php

require_once 'functions.php';

$id = $_GET['id'];


if (listIsUncomplete($id) > 0) {
  echo "<script>alert('List berhasil diulangi!'); document.location.href = '../../../view/admin/home/index.php';</script>";
} else {
  echo "<script>alert('List gagal diulang!');</script>";
}
