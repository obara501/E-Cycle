  <?php include('db.php') ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <title>edit profile</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
  <div class="container">
    <a href="home.php">
        <div class="logo">
            <h1 class="logo-text">
                <span class="logo-bage">E</span>-Cycle
            </h1>
        </div>
    </a>

      <?php
      $pid = $_SESSION['username'];
      $sql = "SELECT fname, username,  email, dob, postcode, adress FROM customer WHERE username ='$pid'";
      $result = $connection->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
       ?>
  <form class="form" action="editprofile.php" method="post">

  <p class="form-group">  <label for="fname">Fullname</label><br><input type="text" name="fullname" value="<?php echo $row['fname'] ?>"></p>
  <p class="form-group">  <label for="username">Username</label><br><input type="text" name="username"value="<?php echo $_SESSION['username'] ?>"></p>
  <p class="form-group">  <label for="email">Email</label><br><input type="text" name="email"  value="<?php echo $row['email'] ?>"></p>
  <p class="form-group">  <label for="dob">Date of birth</label><br><input type="text" name="dob"  value="<?php echo $row['dob'] ?>"></p>
  <p class="form-group">  <label for="postcode">Postcode</label><br><input type="text" name="postcode"  value="<?php echo $row['postcode'] ?>"></p>
  <p class="form-group">  <label for="adress">Address</label><br><input type="text" name="adress"  value="<?php echo $row['adress'] ?>"></p>
  <?php }} ?>
  <button type="submit" class="btn" name="save-edit">Save changes</button>
  </form>
</div>
    </body>
  </html>
