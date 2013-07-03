<!--
	Program is for demonstrating Single dimensional array,multidimensional array and associative array
-->
<?php
echo "<b>Array Demo</b>";
$a=array("item1","item2","item3");
echo "<br /><br />Single Dimensional Array ";
print_r($a);
$b=array(
		array("item1","item2","item3"),
		array("item4","item5","item6"),
		array("item7","item8","item9")
		);
echo "<br /><br />Double Dimensional Array ";
print_r($b);
$c=array("first"=>"item1",
		 "second"=>"item2",
		 "third"=>"item3"
		);
echo "<br /><br />Associative Array ";
print_r($c);
?>
