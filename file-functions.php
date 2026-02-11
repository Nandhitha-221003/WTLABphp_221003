<?php

$file = "sample.txt";

/* fopen & fwrite */
$handle = fopen($file, "w");
fwrite($handle, "Hello Satya!\nWelcome to PHP Lab.");
fclose($handle);

/* fread */
$handle = fopen($file, "r");
echo fread($handle, filesize($file));
fclose($handle);

/* file_get_contents */
echo "<br><br>";
echo file_get_contents($file);

/* file_put_contents */
file_put_contents($file, "\nNew Line Added", FILE_APPEND);

/* file() */
$lines = file($file);
print_r($lines);


?>
<?php
echo "<h1><center><u>FILE INFORMATION</u></center></h2>";

$file = "sample.txt";

echo "File Exists: " . file_exists($file) . "<br>";
echo "File Size: " . filesize($file) . "<br>";
echo "File Type: " . filetype($file) . "<br>";
echo "Access Time: " . date("Y-m-d H:i:s", fileatime($file)) . "<br>";
echo "Modified Time: " . date("Y-m-d H:i:s", filemtime($file)) . "<br>";
echo "Created Time: " . date("Y-m-d H:i:s", filectime($file)) . "<br>";
echo "Permissions: " . fileperms($file) . "<br>";
echo "Owner: " . fileowner($file) . "<br>";
echo "Group: " . filegroup($file) . "<br>";
echo "Inode: " . fileinode($file) . "<br>";

?>
<?php
echo "<h1><center><u>FILE &FOLDER MANAGEMENT</u></center></h2>";
mkdir("testfolder");

copy("sample.txt", "testfolder/copy.txt");

rename("testfolder/copy.txt", "testfolder/newname.txt");

unlink("testfolder/newname.txt");

rmdir("testfolder");

echo is_file("sample.txt");
echo is_dir("uploads");

?>
<?php
echo "<h1><center><u>DIRECTORY HANDLING</u></center></h2>";
echo "Current Directory: " . getcwd() . "<br>";

$files = scandir("upload");
print_r($files);

$dir = opendir("upload");

while(($file = readdir($dir)) !== false){
    echo $file . "<br>";
}

closedir($dir);

?>
<?php
echo "<h1><center><u>FILE LOCKING</u></center></h2>";
$file = fopen("sample.txt", "a");

if(flock($file, LOCK_EX)){
    fwrite($file, "\nLocked Writing");
    flock($file, LOCK_UN);
}

fclose($file);

?>