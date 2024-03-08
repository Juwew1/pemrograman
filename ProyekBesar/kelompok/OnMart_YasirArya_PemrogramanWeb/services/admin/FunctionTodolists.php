<?php

require_once "Conn.php";

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

if (isset($_POST['submit'])) {
  // mengecek apakah data berhasil ditambahkan atau tidak
  if (addList($_POST) > 0) {
    echo "<script>alert('List berhasil ditambahkan!'); document.location.href = '../../view/admin/home.php'</script>";
  } else {
    echo "<script>alert('List gagal ditambahkan!');</script>";
  }
}
