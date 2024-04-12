<?php require('components/adminhome.inc.php'); ?>
  <?php

  include 'db_conn.php';
  $id = $_GET['id'];
  $record = mysqli_query($conn, "SELECT * FROM `users` WHERE id = $id");
  $data = mysqli_fetch_array($record);

  ?>
  <div class="main">
    <?php require('components/adminheader.inc.php'); ?>


    <div class="container">
      <div class="welcome">
        <h1 class="text-center mt-5">Edit Page</h1>
      </div>

      <form class="mt-5 form" action="update.php" method="POST" enctype="multipart/form-data">
        <h4 class="mb-3">Edit Employee</h4>
        <div class="mb-3">
          <label class="form-label">First Name</label>
          <input type="text" class="form-control" value="<?php echo $data['first'] ?>" name="first-name">
          <label class="form-label">Last Name</label>
          <input type="text" class="form-control" value="<?php echo $data['last'] ?>" name="last-name">
        </div>
        <div class="mb-3">
          <label class="form-label">Position</label>
          <select name="position" value="<?php echo $data['position'] ?>">
            <option <?php echo $data['position'] == 'Designer' ? 'selected' : '' ?>>Designer</option>
            <option <?php echo $data['position'] == 'Jr. Front-End Web Developer' ? 'selected' : '' ?>>Jr. Front-End Web Developer</option>
            <option <?php echo $data['position'] == 'Jr. Back-End Web Developer' ? 'selected' : '' ?>>Jr. Back-End Web Developer</option>
            <option <?php echo $data['position'] == 'Jr. Full-Stack Web Developer' ? 'selected' : '' ?>>Jr. Full-Stack Web Developer</option>
            <option <?php echo $data['position'] == 'Senior Front-End Web Developer' ? 'selected' : '' ?>>Senior Front-End Web Developer</option>
            <option <?php echo $data['position'] == 'Senior Back-End Web Developer' ? 'selected' : '' ?>>Senior Back-End Web Developer</option>
            <option <?php echo $data['position'] == 'Senior Full-Stack Web Developer' ? 'selected' : '' ?>>Senior Full-Stack Web Developer</option>
            <option <?php echo $data['position'] == 'Project Manager' ? 'selected' : '' ?>>Project Manager</option>
            <option <?php echo $data['position'] == 'Apparel Designer' ? 'selected' : '' ?>>Apparel Designer</option>
            <option <?php echo $data['position'] == 'Shoe Designer' ? 'selected' : '' ?>>Shoe Designer</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">City</label>
          <input type="text" class="form-control" name="city" value="<?php echo $data['city'] ?>">
          <label class="form-label mt-3">State</label>
          <select name="state" value="<?php echo $data['state'] ?>">
            <option <?php echo $data['state'] == 'AL' ? 'selected' : '' ?>>AL</option>
            <option <?php echo $data['state'] == 'AK' ? 'selected' : '' ?>>AK</option>
            <option <?php echo $data['state'] == 'AZ' ? 'selected' : '' ?>>AZ</option>
            <option <?php echo $data['state'] == 'AR' ? 'selected' : '' ?>>AR</option>
            <option <?php echo $data['state'] == 'CA' ? 'selected' : '' ?>>CA</option>
            <option <?php echo $data['state'] == 'CT' ? 'selected' : '' ?>>CT</option>
            <option <?php echo $data['state'] == 'DE' ? 'selected' : '' ?>>DE</option>
            <option <?php echo $data['state'] == 'DC' ? 'selected' : '' ?>>DC</option>
            <option <?php echo $data['state'] == 'FL' ? 'selected' : '' ?>>FL</option>
            <option <?php echo $data['state'] == 'GA' ? 'selected' : '' ?>>GA</option>
            <option <?php echo $data['state'] == 'ID' ? 'selected' : '' ?>>ID</option>
            <option <?php echo $data['state'] == 'IL' ? 'selected' : '' ?>>IL</option>
            <option <?php echo $data['state'] == 'IN' ? 'selected' : '' ?>>IN</option>
            <option <?php echo $data['state'] == 'IA' ? 'selected' : '' ?>>IA</option>
            <option <?php echo $data['state'] == 'KS' ? 'selected' : '' ?>>KS</option>
            <option <?php echo $data['state'] == 'KY' ? 'selected' : '' ?>>KY</option>
            <option <?php echo $data['state'] == 'LA' ? 'selected' : '' ?>>LA</option>
            <option <?php echo $data['state'] == 'ME' ? 'selected' : '' ?>>ME</option>
            <option <?php echo $data['state'] == 'MD' ? 'selected' : '' ?>>MD</option>
            <option <?php echo $data['state'] == 'MA' ? 'selected' : '' ?>>MA</option>
            <option <?php echo $data['state'] == 'MI' ? 'selected' : '' ?>>MI</option>
            <option <?php echo $data['state'] == 'MN' ? 'selected' : '' ?>>MN</option>
            <option <?php echo $data['state'] == 'MS' ? 'selected' : '' ?>>MS</option>
            <option <?php echo $data['state'] == 'MO' ? 'selected' : '' ?>>MO</option>
            <option <?php echo $data['state'] == 'MT' ? 'selected' : '' ?>>MT</option>
            <option <?php echo $data['state'] == 'NE' ? 'selected' : '' ?>>NE</option>
            <option <?php echo $data['state'] == 'NV' ? 'selected' : '' ?>>NV</option>
            <option <?php echo $data['state'] == 'NH' ? 'selected' : '' ?>>NH</option>
            <option <?php echo $data['state'] == 'NJ' ? 'selected' : '' ?>>NJ</option>
            <option <?php echo $data['state'] == 'NM' ? 'selected' : '' ?>>NM</option>
            <option <?php echo $data['state'] == 'NY' ? 'selected' : '' ?>>NY</option>
            <option <?php echo $data['state'] == 'NC' ? 'selected' : '' ?>>NC</option>
            <option <?php echo $data['state'] == 'ND' ? 'selected' : '' ?>>ND</option>
            <option <?php echo $data['state'] == 'OH' ? 'selected' : '' ?>>OH</option>
            <option <?php echo $data['state'] == 'OK' ? 'selected' : '' ?>>OK</option>
            <option <?php echo $data['state'] == 'OR' ? 'selected' : '' ?>>OR</option>
            <option <?php echo $data['state'] == 'PA' ? 'selected' : '' ?>>PA</option>
            <option <?php echo $data['state'] == 'RI' ? 'selected' : '' ?>>RI</option>
            <option <?php echo $data['state'] == 'SC' ? 'selected' : '' ?>>SC</option>
            <option <?php echo $data['state'] == 'SD' ? 'selected' : '' ?>>SD</option>
            <option <?php echo $data['state'] == 'TN' ? 'selected' : '' ?>>TN</option>
            <option <?php echo $data['state'] == 'TX' ? 'selected' : '' ?>>TX</option>
            <option <?php echo $data['state'] == 'UT' ? 'selected' : '' ?>>UT</option>
            <option <?php echo $data['state'] == 'VT' ? 'selected' : '' ?>>VT</option>
            <option <?php echo $data['state'] == 'VA' ? 'selected' : '' ?>>VA</option>
            <option <?php echo $data['state'] == 'WA' ? 'selected' : '' ?>>WA</option>
            <option <?php echo $data['state'] == 'WV' ? 'selected' : '' ?>>WV</option>
            <option <?php echo $data['state'] == 'WI' ? 'selected' : '' ?>>WI</option>
            <option <?php echo $data['state'] == 'WY' ? 'selected' : '' ?>>WY</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Profile Image</label>
          <input type="file" class="form-control" name="image" value="<?php echo $data['image'] ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <button type="submit" class="btn btn-primary" name="update">Update</button>
      </form>
    </div>
  </div>
<?php require('components/footer.inc.php'); ?>
