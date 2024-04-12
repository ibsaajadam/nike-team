<?php require('components/home.inc.php'); ?>
  <a href="/">
    <header class="position-relative">
      <img class="banner-img w-100 h-50" src="images/nike-banner.jpg" alt="Nike Banner">
      <a href="admin-login.php"><button class="login btn position-absolute bottom-0 end-0 bg-dark text-light">Admin Login</button></a>
    </header>
  </a>

  <div class="container">
    <section class="welcome text-center pt-5 text-warning">
      <h1>Welcome Staff!</h1>
      <p class="text-white">Meet the team</p>
    </section>

    <div class="main mb-5">
      <?php
      include 'db_conn.php';

      $pic = mysqli_query($conn, "SELECT * FROM `users`");
      echo "<div class=''>
      <div class='row'>";
      while ($row = mysqli_fetch_array($pic)) {
        echo "
        <div class='col-md-5 col-lg-4 cardz'>
          <div class='card mt-5' style='width:18rem;margin:auto;'>
            <img src='$row[image]' class='card-img-top main-img' style='height:12rem;object-fit:fill;' alt='Employee'>
            <div class='card-body position-relative'>
              <h4 class='card-name'>$row[first] $row[last]</h4>
              <p class='card-position'>$row[position]</p>
              <p class='card-location'>$row[city], $row[state]</p>
              <a href='https://slack.com/' target='_blank'><p class='connect position-absolute bottom-0 end-0'><img src='https://img.icons8.com/office/50/000000/slack.png'/></p></a>
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