<?php

require_once __DIR__ . '/../Conn.php';

function addList($data)
{
  global $connection;

  $listName = htmlspecialchars($data['todo']);

  $query = "INSERT INTO todolist (pesan) VALUES ('$listName')";
  $result = mysqli_query($connection, $query);

  return mysqli_affected_rows($connection);
}

function deleteList($id)
{
  global $connection;

  mysqli_query($connection, "DELETE FROM todolist WHERE id = '$id'");

  return mysqli_affected_rows($connection);
}

function listIsComplete($id)
{
  global $connection;

  mysqli_query($connection, "UPDATE todolist SET status = 'selesai' WHERE id = $id");

  return mysqli_affected_rows($connection);
}

function listIsUncomplete($id)
{
  global $connection;

  mysqli_query($connection, "UPDATE todolist SET status = 'belum' WHERE id = $id");

  return mysqli_affected_rows($connection);
}

function countDataStatusIsComplete($table)
{
  global $connection;

  $query = "SELECT COUNT(status) AS statusIsComplete FROM todolist WHERE todolist.status = 'selesai'";
  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_assoc($result);

  return $row['statusIsComplete'];
}

function countDataStatusIsIncomplete($table)
{
  global $connection;

  $query = "SELECT COUNT(status) AS statusIsIncomplete FROM todolist WHERE todolist.status = 'belum'";
  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_assoc($result);

  return $row['statusIsIncomplete'];
}

if (isset($_POST['submit'])) {
  // mengecek apakah data berhasil ditambahkan atau tidak
  if (addList($_POST) > 0) {
    echo "<script>alert('List berhasil ditambahkan!'); document.location.href = '../../../view/admin/home/index.php'</script>";
  } else {
    echo "<script>alert('List gagal ditambahkan!');</script>";
  }
}
