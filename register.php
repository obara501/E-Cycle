<?php include('db.php') ?><!--  db.php contains the part that receives the form data hence added at the top -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>register</title>
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
         <!-- the attribute action means all the added data is submitted to this same page register.php -->
         <form class="form" method="POST" action="register.php">
         	<!-- showing errors in registration-->
         	<?php include('errors.php'); ?>
            <div class="signup">
                <div class="form-group">
                    <input type="text" placeholder="Full name" required="" name="fname">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Username" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" required="" name="email">
                </div>
                <div class="form-group">
                    <input type="date"  required="" name="dob">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="code(eg. 4100)" required="" name="postcode">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Adress" required="" name="adress">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" required="" name="password">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Confirm Password" required="" name="cpassword">
                </div>
                <button type="submit" class="btn" name="signup">SIGN UP</button>
                <div class="account">
                    Already have an account? <a href="login.php" id="login">Login</a>
                </div>
            </div>
            
         </form>
     </div>
</body>
</html>


