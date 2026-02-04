<?php
echo "<h2><center><u>STRING FUNCTIONS</u></center></h2>";
$greet="Hi Hello Namaste Good Morning Happy New Year";
echo "Original String:$greet<br><br>";
//length
echo "Length:".strlen($greet)."<br>";
echo "Word Count:".str_word_count($greet)."<br>";
echo "Reverse:".strrev($greet)."<br>";
//case
echo "Greet in Capitals:".strtoupper($greet)."<br>";
echo "Greet in Small:".strtolower($greet)."<br>";
echo ucfirst("i miss you")."<br>";
echo ucwords("php login system")."<br>";
echo "Position of Hello in greet:".strpos($greet,"Hello")."<br>";
echo "After replacing:".str_replace("New Year","Morning",$greet)."<br>";
//substring &Trimming
echo "Substing:".substr($greet,3,7)."<br>";
echo "Trim:".trim($greet)."<br>";
echo "Left Trim:".ltrim($greet)."<br>";
echo "Right Trim:".rtrim($greet)."<br>";
//comparision
echo "strcmp:".strcmp("Admin","admin")."<br>";
echo "strcasecmp:".strcasecmp("NANDU","nandu")."<br>";
//user input
$userinput="<script>alert('hacked')</script>";
echo "htmlspecial chars:".htmlspecialchars($userinput)."<br>";
echo "addslashes:".addslashes("O'Really")."<br>";




?>