<?php
$font          = "Lucida\ Grande,Verdana,Lucida,Helvetica,Arial,sans-serif";
$fontsize      = "4.75";
$foodsource   = "places";

echo "<font face=\"$font\" size=\"$fontsize\">";
$foods        = file("$foodsource");
$food         = rand(0, sizeof($foods)-1);
echo $foods[$food];
echo "</font>";
/*
echo "<br/>";
echo "<br/>";
echo "<form>";
echo "<input type=\"button\" value=\"More?\" onclick=\"history.go(0)\" />";
echo "</form>";
*/
?>
