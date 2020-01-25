<?php
	$file=fopen("file1.txt",'w');
	fwrite($file,"Hello this the first line of this text file...<br/>and this is the second line<br/>");
	fclose($file);
	echo "<b>File Created Successfully</b><br/>";
	readfile("file1.txt");
	$file=fopen("file1.txt","a+");
	fwrite($file,"<i>This is what i append at last</i>");
	echo "</br><b>File Edited Successfully</b><br/>";
	rewind($file);
	echo fread($file,filesize("file1.txt"));
	fclose($file);
	unlink("file1.txt");
?>