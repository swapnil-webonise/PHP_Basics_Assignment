<!--
	Program is for demonstration of call by value
-->

<?php

$a=10;
$b=20;

echo "Before Function call";
echo '<br />$a='.$a.'&nbsp;&nbsp;&nbsp;&nbsp;$b='.$b;

fun($a,$b);

echo "<br />After Function call";
echo '<br />$a='.$a.'&nbsp;&nbsp;&nbsp;&nbsp;$b='.$b;
function fun($a,$b)
{
	$a=$a+10;
	$b=$b+10;
}
?>
