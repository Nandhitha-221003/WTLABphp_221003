<?php
session_start();
require __DIR__ . '/config/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit;
}

use MongoDB\BSON\ObjectId;

$allUsers = $users->find();
?>

<h2>All Users</h2>

<?php foreach ($allUsers as $user): ?>
    <p>
        <?php echo $user['email']; ?>
        |
        <a href="edit.php?id=<?php echo $user['_id']; ?>">Edit</a>
        |
        <a href="delete.php?id=<?php echo $user['_id']; ?>">Delete</a>
    </p>
<?php endforeach; ?>

<br>
<a href="dashboard.php">Back</a>
