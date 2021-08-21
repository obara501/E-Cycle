<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>log in</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<a href="home.html">
              <div class="logo">
             <h1 class="logo-text">
                <span class="logo-bage">E</span>-Cycle
            </h1>
         </div>
         </a>
        <form class="form" method="POST" action="login.php">
        	<!-- Showing errors in log in -->
            <?php include('errors.php'); ?>
        	<div class=""> 
                <div class="form-group">
                    <input type="text" placeholder="Username" required="" name="username" >
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" required="" name="password">
                </div>
                <div class="forget-password">
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn" name="signin">LOGIN</button>
                <div class="account">
                    Dont have an account? <a href="register.php" id="signup">Signup</a>
                </div>
        </div>
        </form> 
		
	</div>

</body>
</html>