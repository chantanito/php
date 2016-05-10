<?php 
$x = 89;
define("ABC", $x+1);
$x += ABC;
echo $x;
echo "<br>";
echo ABC;;
?>