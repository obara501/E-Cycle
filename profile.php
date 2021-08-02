<?php 
  session_start();
  //Checking if the user is already logged in
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] ="You must log in first";
  	header('location: register.php');
  }
  //Using _GET to check if user has loged out(collect data from  URL)
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: home.html');
  }
 ?>
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
 <body>
 	
 	<div class="container">
    <a href="home.php">
        <div class="logo">
            <h1 class="logo-text">
                <span class="logo-bage">E</span>-Cycle
            </h1>
        </div>
    </a>
    <div class="form ">
      <!-- display logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
          <p>Username :</p>
              <p><strong><?php echo $_SESSION['username']; ?></strong></p>
              <p class="error"> <a href="profile.php?logout='1'"> logout </a> </p>
          <?php endif ?>
    </div>
 	</div>
 	
 	</body>
