<!--
	Program is for demonstration of different variable scopes in php
	i.e. local scope and global scope
-->
<?php
$a=10;
$c=30;
fun();
echo "<br />Global variable from outside function ".$a;
function fun()
{
	global $a;
	$b=20;
	echo "<br />Global variable from a function ".$a;
	echo "<br />Local variable from a function ".$b;
	echo "<br />Global variable from a function printing using global array ".$GLOBALS['c'];
}
	echo "<br />Local variable from outside function ".$b;
?>
