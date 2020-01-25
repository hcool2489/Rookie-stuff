<style>
	table,td,tr{
		border:2px dotted black;
		border-collapse:collapse;
		padding: 6px;
	}
</style>
<form method="post">
	<input type="text" placeholder="Enter String Here" name="str">
	<input type="submit" value="OK">
</form>
<?php
	if(isset($_POST[str]))
	{
		$str=$_POST[str];
		echo "<table><tr><td>Original String </td><td>".$str."</td></tr>";
		echo "<tr><td>Length of String </td><td>".strlen($str)."</td></tr>";
		echo "<tr><td>Reverse of String </td><td>".strrev($str)."</td></tr>";
		echo "<tr><td>UpperCase </td><td>".strtoupper($str)."</td></tr>";
		echo "<tr><td>LowerCase </td><td>".strtolower($str)."</td></tr></table>";
	}
?>