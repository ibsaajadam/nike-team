<?php

include 'db_conn.php';



if (isset($_POST['submit'])) {
  $first = $_POST['first-name'];
  $last = $_POST['last-name'];
  $position = $_POST['position'];
  $city = $_POST['city'];
  $state = $_POST['state'];

  $image = $_FILES['image'];
  $image_loc = $_FILES['image']['tmp_name'];
  $image_name = $_FILES['image']['name'];
  $image_des = "uploadImage/" . $image_name;
  move_uploaded_file($image_loc, 'uploadImage/' . $image_name);

  mysqli_query($conn, "INSERT INTO `users`(`first`, `last`, `position`, `city`, `state`, `image`) VALUES ('$first','$last', '$position','$city', '$state','$image_des')");

  header('Location: admin.php');
}
