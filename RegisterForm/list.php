<html>
	<head>
		<title>Registered Users</title>
		<style>
		    table,
            td,
            th {
            	border: 1px solid gray;
            	border-collapse: collapse;
            }
            td,
            th {
            	padding: 5px 10px 5px 10px;
            }
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th>Name</th>
				<th>Phone</th>
				<th>Email</th>
				<th>Gender</th>
			</tr>
			<?php
			    $conn = mysql_connect("localhost:1433","root","usbw");
			    if(!$conn)
			        die(mysql_error());
			    $query = 'SELECT * FROM users';
			    mysql_select_db('db_db');
			    $value = mysql_query($query,$conn);
			    if(!$value)
			        die(mysql_error());
			    while($row = mysql_fetch_array($value, MYSQL_ASSOC)){
			        echo "
        			<tr>
        				<td>{$row['name']}</td>
        				<td>{$row['number']}</td>
        				<td>{$row['email']}</td>
        				<td>{$row['gender']}</td>
        			</tr>";
			       }
			    mysql_close($conn);
			?>
		</table>
	</body>
</html>