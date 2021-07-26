<?php

// SET THE HOST
$host = 'localhost';
$database = 'EliteHostels';
$user = 'root';
$userPassword = '';

// ESTABLISH AND CHECK CONNECTION
$connection = mysqli_connect( $host, $user, $userPassword, $database);

if($connection){
    echo "Connection is successful<br>";
}else{
    echo "Error establishing connection to the database!<br> " . mysqli_connect_error($connection) ."<br>";
}

// CREATE DATABASE $ CHECK CONNECTION

// $database = "CREATE DATABASE EliteHostels";
// if(mysqli_query($connection, $database)){
//     echo "Created Database successfully! <br>";
// }else{
//     echo "Error creating the database." .mysqli_error($connection) ."<br>";
// }


// CREATE TABLE & CHECK CONNECTION 
// $tableTenants = "CREATE TABLE tenants( id int  AUTO_INCREMENT PRIMARY KEY, firstName varchar(30), pass varchar(10) ,age int, email varchar(50), reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);";

// if(mysqli_query($connection, $tableTenants)){
//     echo "Created table successfully!" ."<br>";
// }else{
//     echo "Error creating the table! :" .mysqli_error($connection) ."<br>";
// }

//  GET INPUT FROM THE FORM FIELDS
$name = $_POST['name'];
$password = $_POST['password'];
$age = $_POST['age'];
$email = $_POST['email'];

// PERFORM QUERY SANITIZATION
$name = mysqli_real_escape_string($connection, $name);
$password = mysqli_real_escape_string($connection, $password);
$age = mysqli_real_escape_string($connection, $age);
$email = mysqli_real_escape_string($connection, $email);

// INSERT DATA QUERY & CHECK FOR ERRORS
$insertData = "INSERT INTO tenants(firstName, pass, age, email) VALUES('$name', '$password' , '$age', '$email' );";

if(mysqli_query($connection, $insertData)){
    echo "User successfully added to the database";
}else{
    echo "Could not add user, try again: " .mysqli_error($connection) ."<br>";
}

mysqli_close($connection);
?>