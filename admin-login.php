<?php
 
   session_start();
   
   if (!isset($_SESSION['status'])){

?>

<?php require('components/loginhome.inc.php'); ?>
<header>
  <a href="/"><button class="home btn position-fixed top-0 start-0 m-5 bg-dark text-danger">Home</button></a>
</header>

<div class="container">
   <div class="welcome">
      <h1 class="text-white text-center pt-5">Login</h1>
   </div>

   <?php

     if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){

      if ($_POST['email'] === 'admin@nike.com' && $_POST['password'] == 'admin') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['email'] = 'admin@nike.com';
        $_SESSION['status'] = "Welcome back!";

        header('Location: admin.php?message=success');
        } else {
        $_SESSION['error'] = "Incorrect Email or Password";

        }
     }
   ?>

   <div class="container d-flex justify-content-center align-items-center">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="border shadow p-3 rounded bg-transparent" style="width: 450px;">
    <?php 
      if(isset($_SESSION['error'])){ ?>

      <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION['error'];  ?>
      </div>

      <?php
        unset($_SESSION['error']);
      }
    ?>

      <div class="mb-3">
        <label class="form-label text-primary">Email address</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text text-primary bg-dark text-center">admin@nike.com</div>
      </div>
      <div class="mb-3">
        <label class="form-label text-primary">Password</label>
        <input type="password" class="form-control" aria-describedby="passwordHelp" name="password">
        <div id="passwordHelp" class="form-text text-primary bg-dark text-center">admin</div>
      </div>
      <button type="submit" class="btn btn-danger" name="submit">Login</button>
  </form>
 </div>

</div>
<?php require('components/footer.inc.php'); ?>
<?php
  } else {
    header("Location: admin.php");
  }
?>