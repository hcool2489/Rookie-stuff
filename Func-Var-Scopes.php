<form>
	<input type="number" name="fn" required>
	<input type="number" name="sn" required>
	<input type="submit" value="Swap">
</form>
<?php
	function swap($x,$y)
	{
		$t=$x;
		$x=$y;
		$y=$t;
		echo "<b>Inside Function</b><br/>1st no: $x<br/>2nd no: $y<br/>";
	}
	function swap_ref(&$x,&$y)
	{
		$t=$x;
		$x=$y;
		$y=$t;
		echo "<b>Inside Function</b><br/>1st no: $x<br/>2nd no: $y<br/>";
	}
	if(isset($_GET[fn]))
	{
		$x=$_GET[fn];
		$y=$_GET[sn];
		echo "<b>Original Values:</b><br/>1st no: $x<br/>2nd no: $y<br/>";
		swap($x,$y);
		echo "<b>After using swap Function:</b><br/>1st no: $x<br/>2nd no: $y<br/>";
		swap_ref($x,$y);
		echo "<b>After using swap Function:</b><br/>1st no: $x<br/>2nd no: $y<br/>";
	}
?>