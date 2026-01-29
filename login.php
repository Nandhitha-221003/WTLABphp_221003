<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "testuser", "test123");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name  = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $pass  = mysqli_real_escape_string($conn, $_POST['pass'] ?? '');

    $sql = "SELECT * FROM details 
            WHERE NAME='$name' 
            AND EMAIL='$email' 
            AND PASS='$pass'";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        $message = "✅ Login Successful";
    } else {
        $message = "❌ Invalid Details";
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
