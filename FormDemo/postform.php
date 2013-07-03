<!--
	Program is for demonstration of submitting form with post method
-->
<?php
if(isset($_POST['submit']))
{
	echo "<b>Form Details</b><br />";
	echo "<br />Full Name: ".$_POST["fname"];
	echo "<br />Address: ".$_POST["txtarea"];
	echo "<br />City: ".$_POST["comboCity"];
	echo "<br />Gender: ".$_POST["gender"];
	echo "<br />Hobbies: ";
	$h=$_POST['listhobbies'];
	$N = count($h);
	for($i=0; $i < $N; $i++)
    {
      echo($h[$i] . ",");
    }
	echo "<br />Attached Documents: ";
	$h=$_POST['chkdoc'];
	$N = count($h);
	for($i=0; $i < $N; $i++)
    {
      echo($h[$i] . ",");
    }
}
else
{
?>
<html>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<table>
			<tr><td><label>Full Name:</label></td>
			<td><input type="text" name="fname"></td></tr>
			<tr><td><label>Address:</label></td>
			<td><textarea name="txtarea" rows="3" cols="25"></textarea></td></tr>
			<tr><td><label>City:</label></td>
			<td><select name="comboCity"><option>Select</option><option>Pune</option><option>Jalgaon</option><option>Mumbai</option></select></td></tr>
			<tr><td><label>Gender:</label></td>
			<td><input type="radio" value="Male" name="gender">Male&nbsp;&nbsp;&nbsp;<input type="radio" value="Female" name="gender">Female</td></tr>
			<tr><td><label>Hobbies:</label></td>
			<td><select name="listhobbies[]" multiple="multiple"><option value="Reading">Reading</option><option value="WatchingMovies">Watching Movies</option><option value="PlayingGame">Playing game</option><option value="InternetSurfing">Internet Surfing</option></select></td></tr>
			<tr><td><label>Attached Documents:</label></td>
			<td><input type="checkbox" value="10th" name="chkdoc[]">10th Marksheet<input type="checkbox"  value="12th" name="chkdoc[]">12th Marksheet<input type="checkbox"  value="UG" name="chkdoc[]">Graduation Marksheet<input type="checkbox" value="PG" name="chkdoc[]">Post Graduation Marksheet</td></tr>
			<tr><td></td>
			<td><input type="submit" name="submit" value="Submit"></td></tr>
		</form>
	</body>
</html>
<?php
}
?>
