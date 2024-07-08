<?php 

$a = 10;
$b = 7;

echo "$a == $b : ". ($a == $b);
echo "<br>$a != $b : ". ($a != $b);
echo "<br>$a > $b : ". ($a > $b);
echo "<br>$a < $b : ". ($a < $b);
echo "<br>($a == $b) && ($a > $b) : ". (($a != $b) && ($a > $b));
echo "<br>($a == $b) || ($a > $b) : ". (($a != $b) || ($a > $b));

echo "$a + $b = " . ($a + $b);  
echo "<br>$a - $b = " . ($a - $b);  
echo "<br>$a * $b = " . ($a * $b);  
echo "<br>$a / $b = " . ($a / $b);  

$a = "Hello";
$b = "World";

echo "$a == $b : " . ($a == $b);  
echo "<br>$a != $b : " . ($a != $b);  
