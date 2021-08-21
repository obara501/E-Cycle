<?php include('db.php') ?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
  <title>profile</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
 </head>
 <body >
   	<div class="container">
      <a href="home.php">
          <div class="logo">
              <h1 class="logo-text">
                  <span class="logo-bage">E</span>-Cycle
              </h1>
          </div>
      </a>
      <div class="form">
        <!-- display logged in user information -->
        <?php
          $pid = $_SESSION['username'];
          $sql = "SELECT fname, username,  email, dob, postcode, adress FROM customer WHERE username ='$pid'";
          $result = $connection->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
        ?>
              <p class="form-group"><?php echo $row['fname'] ?></p>
              <p class="form-group">  Username:  <?php echo $_SESSION['username'] ?></p>
              <p class="form-group">  Email:  <?php echo $row['email'] ?></p>
              <p class="form-group">  Date of birth:  <?php echo $row['dob'] ?></p>
              <p class="form-group">  Postcode:  <?php echo $row['postcode'] ?></p>
              <p class="form-group">  Address:  <?php echo $row['adress'] ?></p>
          <?php }} ?>
        <p> <a href="editprofile.php">Edit details</a></p>
        <p class="error"> <a href="profile.php?logout='1'"> logout </a> </p>
            
      </div>
   	</div>
 	</body>
