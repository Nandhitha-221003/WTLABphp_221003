<?php

echo "<h2><center><u>PHP File Modes Demonstration</u></center></h2>";

$fileName = "demo.txt";

/* -------------------- r MODE -------------------- */
echo "<h3>1. r (Read Only)</h3>";

if(file_exists($fileName)){
    $file = fopen($fileName, "r");
    echo "Content: " . fread($file, filesize($fileName));
    fclose($file);
} else {
    echo "File does not exist. r mode needs existing file.<br>";
}

/* -------------------- w MODE -------------------- */
echo "<h3>2. w (Write Only - Erases Old Data)</h3>";

$file = fopen($fileName, "w");
fwrite($file, "Written using w mode.\n");
fclose($file);

echo "Old content erased. New content written.<br>";

/* -------------------- a MODE -------------------- */
echo "<h3>3. a (Append Mode)</h3>";

$file = fopen($fileName, "a");
fwrite($file, "Appended using a mode.\n");
fclose($file);

echo "New content added at end.<br>";

/* -------------------- x MODE -------------------- */
echo "<h3>4. x (Create New File)</h3>";

$newFile = "newfile.txt";

if(!file_exists($newFile)){
    $file = fopen($newFile, "x");
    fwrite($file, "Created using x mode.");
    fclose($file);
    echo "New file created successfully.<br>";
} else {
    echo "File already exists. x mode fails if file exists.<br>";
}

/* -------------------- r+ MODE -------------------- */
echo "<h3>5. r+ (Read & Write)</h3>";

$file = fopen($fileName, "r+");
fwrite($file, "Modified using r+.\n");
rewind($file);
echo "Updated Content:<br>" . fread($file, filesize($fileName));
fclose($file);

/* -------------------- w+ MODE -------------------- */
echo "<h3>6. w+ (Read & Write - Erases Old Data)</h3>";

$file = fopen($fileName, "w+");
fwrite($file, "Rewritten using w+ mode.\n");
rewind($file);
echo "Content after w+:<br>" . fread($file, filesize($fileName));
fclose($file);

/* -------------------- a+ MODE -------------------- */
echo "<h3>7. a+ (Read & Append)</h3>";

$file = fopen($fileName, "a+");
fwrite($file, "Added using a+ mode.\n");
rewind($file);
echo "Content after a+:<br>" . fread($file, filesize($fileName));
fclose($file);

/* -------------------- x+ MODE -------------------- */
echo "<h3>8. x+ (Create New File - Read & Write)</h3>";

$newFile2 = "brandnew.txt";

if(!file_exists($newFile2)){
    $file = fopen($newFile2, "x+");
    fwrite($file, "Created using x+ mode.");
    rewind($file);
    echo "Content of brandnew.txt:<br>" . fread($file, filesize($newFile2));
    fclose($file);
} else {
    echo "brandnew.txt already exists. x+ will fail.<br>";
}

?>