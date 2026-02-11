<?php
$message = "";
$imageName = "";

if(isset($_POST['upload'])){

    $target_dir = "upload/";
    $imageName = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $imageName;

    // Allow only images
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && 
       $imageFileType != "jpeg" && 
       $imageFileType != "png" && 
       $imageFileType != "gif"){

        $message = "Only JPG, JPEG, PNG & GIF files allowed.";
    }
    else{
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
            $message = "Image uploaded successfully!";
        } else {
            $message = "Error uploading image.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Through Image</title>
</head>
<body>

<h2>Upload Image for Grammar Search</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <input type="submit" name="upload" value="Upload Image">
</form>

<p><?php echo $message; ?></p>

<?php
if($imageName != ""){
    echo "<h3>Preview:</h3>";
    echo "<img src='upload/$imageName' width='300'><br><br>";
    echo "<a href='download.php?file=$imageName'>Download Image</a>";
}
?>

</body>
</html>