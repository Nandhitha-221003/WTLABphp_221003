
<?php
session_start();
require __DIR__ . '/config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['e'] ?? '';
    $password = $_POST['p'] ?? '';

    $user = $users->findOne(['email' => $email]);

    if (!$user) {
        die("User not found");
    }

    if (!password_verify($password, $user['password'])) {
        die("Invalid password");
    }

    $_SESSION['user'] = $user['email'];
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
           <link rel="stylesheet" href="style7.css">
</head>
<body>


 <div class="image-container">
            <div class="heading"><h1 >GRAMMART</h1></div>
            <img class="back1" src="background.jpg" alt="background">
            <div class="main1"><h1 >LOGIN</h1></div>
            <div class="main">
                <form  method="post">
                   <div class="name"> Name</div>
                    <div class="namefield"><input type="text" name="n" style="width:350px; height:40px; border-radius: 5px;border-color:green;"></div>
                    <div class="name1">Email</div>
                    <div class="namefield"><input type="email" name="e" style="width:350px; height:40px; border-radius: 5px;border-color:green;"></div>
                    <div class="name1">Password</div>
                    <div class="namefield"><input type="password" name="p" style="width:350px; height:40px; border-radius: 5px;border-color:green;"></div>
                    <div class="create"><input type="submit" value="LOGIN" name="c" style="width:300px; height:40px; border-radius: 10px;border-color:green;color:white;background-color: green;font-size: 15px;" ></div>
                    
                </form>
            </div>
        </div>
    </div>



</body>
</html>

