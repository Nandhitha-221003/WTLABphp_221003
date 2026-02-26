<?php
require __DIR__ . '/config/db.php';
use MongoDB\BSON\ObjectId;

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Invalid User ID");
}

try {

    $users->deleteOne(['_id' => new ObjectId($id)]);

    echo "User Deleted Successfully! <br>";
    echo "<a href='users.php'>Go Back</a>";

} catch (Exception $e) {

    echo "Database Error";
}
?>