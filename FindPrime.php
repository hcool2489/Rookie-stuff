<form methon="get">
	<input type="number" name="hf">
	<input type="submit" value="Go...">
</form>
<?php
function is_prime($n)
{
	for($x=2;$x<$n;$x++)
		if($n%$x==0)
			return 0;
	return 1;
}
if(isset($_GET['hf']))
{
	$num=$_GET['hf'];
	echo "Prime Numbers Less than $num are <b>";
	for(;$num;$num--)
		if(is_prime($num))
			echo "$num ";
}
?>