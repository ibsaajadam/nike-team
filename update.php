<?php

include 'db_conn.php';

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $first = $_POST['first-name'];
  $last = $_POST['last-name'];
  $position = $_POST['position'];
  $city = $_POST['city'];
  $state = $_POST['state'];

  $image = $_FILES['image'];
  $image_loc = $_FILES['image']['tmp_name'];
  if (empty($image_loc)) {
    mysqli_query($conn, "UPDATE `users` SET `first`='$first', `last`='$last', `position`='$position', `city`='$city', `state`='$state' WHERE id = '$id'");
  } else {
    $image_name = $_FILES['image']['name'];
    $image_des = "uploadImage/" . $image_name;
    move_uploaded_file($image_loc, 'uploadImage/' . $image_name);

    mysqli_query($conn, "UPDATE `users` SET `first`='$first', `last`='$last', `position`='$position', `city`='$city', `state`='$state', `image`='$image_des' WHERE id = '$id'");
  }

  header('Location: admin.php?message=success');
}
