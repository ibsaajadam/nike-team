<?php

  session_start();

  if ($_SESSION['status']) {
  

?>

<?php require('components/adminhome.inc.php'); ?>
   <?php require('components/adminheader.inc.php'); ?>

    <?php
    if (isset($_SESSION['status'])) { ?>

      <div class="alert alert-success text-center" role="alert">
        <?php echo $_SESSION['status']  ?>
      </div>

    <?php
    }
    ?>

    <div class="container">
      <div class="welcome text-center pt-5">
        <h1>Admin Page</h1>
        <div class="text-center">
          <a href="/" class="btn btn-primary mt-3">Go to Homepage</a>
        </div>
      </div>

      <form class="mt-5 form" action="input.php" method="POST" enctype="multipart/form-data">
        <h4 class="mb-3">Add New Employee</h4>
        <div class="mb-3">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" name="first-name" required>
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" name="last-name" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Position</label>
          <select name="position" required>
            <option>Designer</option>
            <option>Jr. Front-End Web Developer</option>
            <option>Jr. Back-End Web Developer</option>
            <option>Jr. Full-Stack Web Developer</option>
            <option>Senior Front-End Web Developer</option>
            <option>Senior Back-End Web Developer</option>
            <option>Senior Full-Stack Web Developer</option>
            <option>Project Manager</option>
            <option>Apparel Designer</option>
            <option>Shoe Designer</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">City</label>
          <input type="text" class="form-control" name="city" required>
          <label class="form-label mt-3">State</label>
          <select name="state">
            <option>AL</option>
            <option>AK</option>
            <option>AZ</option>
            <option>AR</option>
            <option>CA</option>
            <option>CO</option>
            <option>CT</option>
            <option>DE</option>
            <option>DC</option>
            <option>FL</option>
            <option>GA</option>
            <option>HI</option>
            <option>ID</option>
            <option>IL</option>
            <option>IN</option>
            <option>IA</option>
            <option>KS</option>
            <option>KY</option>
            <option>LA</option>
            <option>ME</option>
            <option>MD</option>
            <option>MA</option>
            <option>MI</option>
            <option>MN</option>
            <option>MS</option>
            <option>MO</option>
            <option>MT</option>
            <option>NE</option>
            <option>NV</option>
            <option>NH</option>
            <option>NJ</option>
            <option>NM</option>
            <option>NY</option>
            <option>NC</option>
            <option>ND</option>
            <option>OH</option>
            <option>OK</option>
            <option>OR</option>
            <option>PA</option>
            <option>RI</option>
            <option>SC</option>
            <option>SD</option>
            <option>TN</option>
            <option>TX</option>
            <option>UT</option>
            <option>VT</option>
            <option>VA</option>
            <option>WA</option>
            <option>WV</option>
            <option>WI</option>
            <option>WY</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Profile Image</label>
          <input type="file" class="form-control" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>

      <div class="main mb-5">
        <?php

        include 'db_conn.php';


        $pic = mysqli_query($conn, "SELECT * FROM `users`");
        echo "<div class=''>
       <div class='row'>";
        while ($row = mysqli_fetch_array($pic, MYSQLI_ASSOC)) {
          echo "
         <div class='col-md-5 col-lg-4'>
           <div class='card mt-5' style='width:18rem;margin:auto;'>
             <img src='$row[image]' class='card-img-top' style='height:12rem;object-fit:fill;' alt='Employee'>
             <div class='card-body'>
               <h4 class='card-name'>$row[first] $row[last]</h4>
               <p class='card-position'>$row[position]</p>
               <p class='card-location'>$row[city], $row[state]</p>
               <a href='edit.php? id= $row[id]'><button type='button' class='btn btn-primary'>Edit</button></a>
               <a href='delete.php? id= $row[id]'><button type='button' class='btn btn-danger'>Delete</button></a>
             </div>
            </div>
          </div>
       ";
        }
        echo "</div>
        </div>";
        ?>
      </div>
<?php require('components/footer.inc.php'); ?>


<?php
} else {
  header('Location: index.php');
  exit();
}
?>