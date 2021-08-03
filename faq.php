<?php
session_start();

// //SET THE HOST
// $host = 'localhost';
// $database = 'ecycle1';
// $username = 'root';
// $pwd = '';

// // ESTABLISH AND CHECK CONNECTION
// $connection = mysqli_connect( $host, $username, $pwd, $database);

// if($connection){
   
// }else{
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }


// $fname="";
// $email="";
// $message="";


// //creating a connection to the server
$connection =mysqli_connect('localhost', 'root', '', 'ecycle1');

//checking if connection is succesful
if(!$connection){
    die("could not connect to server" . mysqli_connect_error());
}




if(isset($_POST['send'])) {   
    $fname = $_SESSION['fname'];
        $message = $_SESSION['message'];
        $email = $_SESSION['email'];
        
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
            
        //insert data to database 
        $insert_query="INSERT INTO contacts(fname,message,email) VALUES('$fname','$message','$email')";
        mysqli_query($connection,$insert_query); 
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        session_destroy();
        header('location: home.html');
    }
}else{
    header('location: home.html');
}



//mysqli_close($connection);
?>
