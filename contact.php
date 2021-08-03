<?php
session_start();

// //SET THE HOST
// $host ="localhost";
// $username ="root";
// $pwd="";
//  $database ="ecycle1";
// $fname="";
// $email="";
// $message="";


// // //creating a connection to the server
$connection =mysqli_connect('localhost', 'root', '', 'ecycle1');

//checking if connection is succesful
if(!$connection){
	die("could not connect to server" . mysqli_connect_error());
}
// $connection = mysqli_connect( $host, $username, $pwd, $database);

// if($connection){
   
// }else{
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }



if(isset($_POST['Submit'])) {	
	$fname = mysqli_real_escape_string($connection, $_POST['fname']);
	$message = mysqli_real_escape_string($connection, $_POST['message']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
		
	// checking empty fields
	if(empty($fname) || empty($message) || empty($email)) {
				
		if(empty($fname)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($message)) {
			echo "<font color='red'>Message field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			$_SESSION['fname'] = $fname;
			$_SESSION['message'] = $message;
			$_SESSION['email'] = $email;

		header('location: faq.html');
	}
}


//mysqli_close($connection);
?>