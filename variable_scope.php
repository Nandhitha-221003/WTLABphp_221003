<?php
echo "<h1><center><u>PHP DATATAYPES</u></center></h2>";
$str="Good Morning";
$int=10;
$flt=9.5;
$bool=true;
$arr=array("Web Tech","Data science");
echo "Hi Nandhitha $str<br>";
echo "I got $int points in game<br>";
echo "I got $flt CGPA in last semester<br>";
echo "boolean:$bool<br>";
print_r($arr);
echo "<h1><center><u>VARIABLES SCOPE</u></center></h1>";
//local variable scope
function localscope(){
    $local="I am local";
    echo "Local variable:$local<br>";
}
localscope();
$greet="Hi Hello Namaste Good Morning Happy New Year";
function globalscope(){
    global $greet;
    echo "$greet Ms.Nandhitha Vasamsetty<br>";
}
globalscope();
function staticscope(){
    static $count=0;
    $count++;
    echo "static count:$count<br>";
}
staticscope();
staticscope();
staticscope();
?>