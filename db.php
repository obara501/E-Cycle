<?php 
session_start(); //starts a session based on post request
// $host ="localhost";
// $username ="root";
// $pwd="";
// $database ="ecycle1";

//initialising form variables
$fname="";
$username="";
$email="";
$dob="";
$postcode="";
$adress="";
$errors = array();

//creating a connection to the server
$connection =mysqli_connect('localhost', 'root', '', 'ecycle1');

//checking if connection is succesful
if(!$connection){
	die("could not connect to server" . mysqli_connect_error());
}

// //creating a database

// $sql_query = "CREATE DATABASE ecycle1";

// //checking if database creation is succesful

// if (mysqli_query($connection ,$sql_query)) {
// 	echo "Database created succesfully";
// }else{
// 	echo "Error in creating database" .mysqli_error($connection);
// }

// //Creating a table

// $sql_query ="CREATE TABLE IF NOT EXISTS Customer(
// 	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
// 	fname varchar(100) NOT NULL,
// 	username varchar(100) UNIQUE NOT NULL,
// 	password varchar(100) NOT NULL,
// 	email varchar(100) NOT NULL,
// 	dob DATE NOT NULL,
// 	postcode INT(6) NOT NULL,
// 	adress INT(6) NOT NULL,
// 	cycle_bought varchar(100),
// 	sale_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
// 	amount INT)";

// //Checking if connection is succesful

// if (mysqli_query($connection, $sql_query)) {
// 	echo "table succesfully created";
// }else{
// 	echo "Error in creating table : " .mysqli_error($connection);
// }	

//REGISTERING A USER
if (isset($_POST['signup'])) {
	//getting input from user and performing query sanitisation on it
	$fname= mysqli_real_escape_string($connection, $_POST['fname']);
	$username= mysqli_real_escape_string($connection, $_POST['username']);
    $email= mysqli_real_escape_string($connection, $_POST['email']);
    $dob= mysqli_real_escape_string($connection, $_POST['dob']);
    $postcode= mysqli_real_escape_string($connection, $_POST['postcode']);
    $adress= mysqli_real_escape_string($connection, $_POST['adress']);
    $password= mysqli_real_escape_string($connection, $_POST['password']);
    $cpassword= mysqli_real_escape_string($connection, $_POST['cpassword']);

    //validating the form to ensure it is filled correctly
    //pushing corresponding errors unto $errors array by adding array_push()
    if(empty($fname)){ array_push($errors, "Fullname is required");}
    if(empty($username)){ array_push($errors, "Username is required");}
    if(empty($email)){ array_push($errors, "Email is required");}
    if(empty($dob)){ array_push($errors, "DOB is required");}
    if(empty($postcode)){ array_push($errors, "Postcode is required");}
    if(empty($adress)){ array_push($errors, "Adress is required");}
    if(empty($password)){ array_push($errors, "Password is required");}
    if ($password != $cpassword) {
    	array_push($errors, "Passwords do not match");
    }


    // Checking database to ensure a user does not exist with the same username and/or username
    $user_check_query = "SELECT * FROM Customer WHERE username='$username' OR email='$email' LIMIT 1";
    $result =mysqli_query($connection, $user_check_query);
    $user =mysqli_fetch_assoc($result);  
    // mysqli_fetch_assoc fetches the result row as an associative array

    if ($user) {
    	//if user exists
    	if ($user['username'] === $username) {
    		array_push($errors, "Username already exists");
    	}

    	if ($user['email'] === $email) {
    		array_push($errors, "Email already exists");
    	}
    }

    //register user if there are no errors in form entry
    if (count($errors) == 0) {
    	//Hashing the password before saving it
    	$password = md5($password);

    	//Inserting customer data
    	$insert_query = "INSERT INTO Customer (fname, username, password, email, dob, postcode, adress) VALUES('$fname', '$username', '$password', '$email', '$dob', '$postcode', '$adress')";
    	mysqli_query($connection,$insert_query);

    	//track logged in users using sessions NB:include session_start at the top of the file
    	$_SESSION['username'] =$username;
    	header('location: home.php');

    }

}

//LOGIN USER
if (isset($_POST['signin'])) {
	//Getting input from user
	$username= mysqli_real_escape_string($connection, $_POST['username']);
    $password= mysqli_real_escape_string($connection, $_POST['password']);

    //Error handling
    if(empty($username)){
        array_push($errors, "Username is required");
 	}
    if(empty($password)){
    	array_push($errors, "Password is required");
    }

if (count($errors) == 0) {
	$password = md5($password);
	$select_query ="SELECT * FROM Customer WHERE username='$username' AND password='$password'";
	$results =mysqli_query($connection,$select_query);
	if (mysqli_num_rows($results) ==1) {
		//track logged in users using sessions NB:include session_start at the top of the file
    	$_SESSION['username'] =$username;
    	$_SESSION['success'] ="You are now logged in";
    	header('location: home.php');
	}else {
		array_push($errors, "Wrong username or password");
	}
  }

}
//edit profile
if(isset($_POST['save-edit']))
  {
    //
    $pid=$_SESSION['username'];
    $fname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $postcode=$_POST['postcode'];
    $adress=$_POST['adress'];
    $update_query="UPDATE customer set fname='$fname',  username='$username',  email='$email', dob='$dob', postcode='$postcode', adress='$adress' WHERE username='$pid'";
    $result= mysqli_query($connection,$update_query);
    if ($result) {
    $msg="Your profile has been updated.";
    echo $msg;
    header('location:login.php');
  }
  else
    {
      $msg="Something Went Wrong. Please try again.".mysqli_error();
      echo $msg;
    }
}
  //Logout
  //Using _GET to check if user has loged out(collect data from  URL)
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: home.html');
  }
 
?>

