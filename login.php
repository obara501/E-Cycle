<?php // SET THE HOST
$host = 'localhost';
$database = 'EliteHostels';
$user = 'root';
$userPassword = '';
$connection = mysqli_connect( $host, $user, $userPassword, $database);

if($connection){
echo "Connection to $database successful<br>";
}else{
echo "Error establishing connection to the database!<br> " . mysqli_connect_error($connection) ."<br>";
}

//  GET INPUT FROM THE FORM FIELDS
$name = $_POST['name'];
$password = $_POST['password'];

// PERFORM QUERY SANITIZATION
$name = mysqli_real_escape_string($connection, $name);
$password = mysqli_real_escape_string($connection, $password);

// CHECK FOR REGISTERED USER
$searchUser = "SELECT * FROM tenants WHERE firstName='$name' AND pass= '$password'";

$records = mysqli_query($connection, $searchUser);

if(mysqli_num_rows($records) > 0){
    
    while($rows = mysqli_fetch_assoc($records)){
        echo "ID : {$rows['id']}  <br>";
        echo "First Name : {$rows['firstName']} <br>";
        echo "Email : {$rows['email']}<br><br>";
    }
}else{
    echo "No records found!";
}



mysqli_close($connection);
?>