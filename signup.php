<?php
session_start();
require __DIR__ . '/config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['e'] ?? '';
    $password = $_POST['p'] ?? '';

    if (!$email || !$password) {
        die("Email and password required");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    if (strlen($password) < 6) {
        die("Password must be at least 6 characters");
    }

    $existingUser = $users->findOne(['email' => $email]);

    if ($existingUser) {
        die("User already exists");
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $users->insertOne([
        'email' => $email,
        'password' => $hashedPassword,
        'createdAt' => new MongoDB\BSON\UTCDateTime()
    ]);

    echo "Signup successful";
    header("Location:login.php");
    exit();
}
?>
<html>

    <head><title>Registration Page</title>
        <link rel="stylesheet" href="style7.css">
    </head>
    <body>
        
        <div class="image-container">
            <div class="heading"><h1 >GRAMMART</h1></div>
            <img class="back" src="background.jpg" alt="background">
            <div class="main1"><h1 >SIGN UP</h1></div>
            <div class="main">
                <form  method="post">
                   <div class="name"> Name</div>
                    <div class="namefield"><input type="text" name="n" style="width:350px; height:40px; border-radius: 5px;border-color:green;"></div>
                    <div class="name1">Email</div>
                    <div class="namefield"><input type="email" name="e" style="width:350px; height:40px; border-radius: 5px;border-color:green;"></div>
                    <div class="name1">Password</div>
                    <div class="namefield"><input type="password" name="p" style="width:350px; height:40px; border-radius: 5px;border-color:green;"></div>
                    <div class="create"><input type="submit" value="SIGN UP" name="c" style="width:300px; height:40px; border-radius: 10px;border-color:green;color:white;background-color: green;font-size: 15px;" ></div>
                    <div class="create"><button type="button"  style="width:300px; height:40px; border-radius: 10px;border-color:green;color:white;background-color: green;font-size: 15px;" ><a href="google-login.php">Login with Google</a></button></div>
                </form>
            </div>
        </div>   
        
    </body>
</html>   