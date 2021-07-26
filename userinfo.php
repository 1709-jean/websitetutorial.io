<?php

$conn = mysqli_connect('localhost', 'root');

if($conn){
	echo "Connection Succesful";
}
else{
	echo "No Connection";
}

mysqli_select_db($conn, 'userdata');

$user = $_POST['user'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment = $_POST['comment'];

$query = "INSERT INTO infouser(user, emai, mobile, comment) VALUES('$user', '$email', '$phone', '$comment')";

//mysqli_query($conn, $query);

echo "$query";

mysqli_query($conn, $query); 

header('location:index.php');



?>
