<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "testuser", "test123","userdb",3307);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Username length validation
    if (strlen($name) < 4) {
        $message = "❌ Username should be greater than 4 characters";
        echo $message;
        die();
    }
    $email = trim($_POST['email'] ?? "");
    $pass  = trim($_POST['pass'] ?? "");

// clean input
    $name  = htmlspecialchars(mysqli_real_escape_string($conn, $name));
    $email = htmlspecialchars(mysqli_real_escape_string($conn, $email));
    $pass  = addslashes(mysqli_real_escape_string($conn, $pass));
    $name=strtolower($name);
    $email=strtolower($email);

    $sql = "SELECT * FROM userdetails 
            WHERE LOWER(NAME)='$name' 
            AND LOWER(EMAIL)='$email' 
            AND PASS='$pass'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        echo "Login Successful<br>";
        print "Redirecting...";
        header("Location:index1.html");
       
        exit();
    } else {
        print "❌ Invalid Details";
        die();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h2><?php echo $message; ?></h2>

<form method="POST">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <label>Password:</label>
    <input type="password" name="pass" required><br><br>

    <button type="submit">Login</button>
</form>
</body>
</html>
