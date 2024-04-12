<?php

  include 'db_conn.php';

  $id = $_GET['id'];
  mysqli_query($conn, "DELETE FROM `users` WHERE id = $id");

  header('Location: admin.php');

?>