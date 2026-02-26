<?php
require __DIR__ . '/config/db.php';
use MongoDB\BSON\ObjectId;

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Invalid User ID");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newEmail = $_POST['email'] ?? '';

    // Validation
    if (!$newEmail) {
        die("Email is required");
    }

    if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    try {

        $users->updateOne(
            ['_id' => new ObjectId($id)],
            ['$set' => ['email' => $newEmail]]
        );

        echo "User Updated Successfully!";
        exit;

    } catch (Exception $e) {
        echo "Database Error";
    }
}

try {
    $user = $users->findOne(['_id' => new ObjectId($id)]);
} catch (Exception $e) {
    die("Database Error");
}
?>

<form method="POST">
    <input type="email" name="email"
        value="<?php echo $user['email']; ?>" required>
    <button type="submit">Update</button>
</form>
