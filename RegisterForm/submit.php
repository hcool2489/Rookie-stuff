<?php $conn = mysql_connect("localhost:1433", "root", "usbw");
    if (!$conn)
		die('Could not connect ! - ' . mysql_errno() . ' : ' . mysql_error());
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $query = 'INSERT INTO users (name,number,email,gender) VALUES ("' . $name . '",' .$number . ',"' . $email . '","' . $gender . '")';
    if (!mysql_select_db("db_db"))
        die(mysql_error());
    if (!mysql_query($query, $conn))
        die(mysql_error());
    echo "Registered Successfully !!";
    mysql_close($conn);
?>