<?php
echo "BASIC STRING FUNCTIONS";
echo "<br>";
$a="madhulatha";
echo "Length of the string-$a: ". strlen($a);    //length of the word
echo"<br>";
echo "Number of words in the string-$a: ".str_word_count($a);
echo "<br>";
$b="hello madhu welcome to php programming";
echo "Reverse of the string-$b: ". strrev($b);   //reverse the word
echo "<br>";
echo "<br>";
//CASE CONVERSIONS
echo "CASE CONVERSIONS";
ECHO "<br>";
$c="madhulatha";
$d="HELLO MADHU";
echo "Uppercase of $c: ".strtoupper($c);
echo "<br>";
echo "Lowercase of $d: ".strtolower($d);
echo "<br>";
echo "First letter capital of $c: ".ucfirst($c);
echo "<br>";
echo "First letter capital of each word in $b: ".ucwords($b);
echo "<br>";
echo "Replace 'madhu' with 'latha' in $b: ". str_replace("madhu","latha",$b);
echo "<br>";
echo "Position of 'php' in $b: ". strpos($b,"php");
echo "<br>";

echo "<br>";
//SUBSTRING AND TRIMMING
echo "SUBSTRING AND TRIMMING";
echo "<br>";
echo "Substring of $b from lent 4 to 6: ".substr($b,6,5);
echo "<br>";
$e="     hello madhu welcome to php programming     ";
echo  "trim of $e: ".trim($e);   //removes spaces from both sides
echo "<br>";
echo "ltrim of $e: ".ltrim($e);   //removes left side spaces
echo "<br>";
echo "rtrim of $e: ".rtrim($e);   //removes right side spaces
echo "<br>";
echo "<br>";
//STRING COMPARISION
echo "STRING COMPARISION";
echo "<br>";
$f="mallikarjuna";
echo "Comparing $f and $c: ".strcmp($f,$c);  //
echo "<br>";
echo "string case comparision of $d and $c: ".strcasecmp($d,$c);
echo "<br>";
echo htmlspecialchars("<p>php</p>");  //converts special characters to html entities
echo"<br>";
echo addslashes("It's PHP");
echo "<br>";
echo stripslashes("It\'s PHP");
echo "<br>";


?>




