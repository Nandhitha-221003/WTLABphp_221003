<?php
$dir = "upload/";

/* Upload */
if(isset($_POST['upload'])){
    $file = $dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $file);
}

/* Delete */
if(isset($_GET['delete'])){
    unlink($dir . $_GET['delete']);
    echo "<p style='color:red;'>File Deleted Succesfully</p>";
}

/* List files */
$files = scandir($dir);
?>

<h2>Mini File Manager</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" name="upload" value="Upload">
</form>

<table border="1">
<tr>
    <th>File</th>
    <th>Size (bytes)</th>
    <th>Last Modified</th>
    <th>Action</th>
</tr>

<?php
foreach($files as $file){
    if($file != "." && $file != ".."){
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>" . filesize($dir.$file) . "</td>";
        echo "<td>" . date("Y-m-d H:i:s", filemtime($dir.$file)) . "</td>";
        echo "<td>
        <a href='download.php?file=$file'>Download</a> |
        <a href='?delete=$file'>Delete</a>
        </td>";
        echo "</tr>";
    }
}
?>

</table>