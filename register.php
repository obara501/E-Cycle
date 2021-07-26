<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/ Signup</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <form action="connect.php" method="POST">
        <h2>SIGNUP</h2>
        <label for="name">Name</label>
        <br>
        <input type="text" placeholder="e.g. John Doe" name="name" required>
        <br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="enter a password" req>
        <br>
        <label for="age">Age</label><br>
        <input type="number" placeholder="e.g. 24" name="age" required>
        <br>
        <label for="email">email</label><br>
        <input type="email" placeholder="e.g johndoe@example.com" name="email" required><br>
        <input type="submit" value="REGISTER">
        <p>Already have an account? Login <a href="./login.html">here</a></p>
    </form>
</body>

</html>