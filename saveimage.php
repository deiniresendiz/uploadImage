<?php
include("conn.php");

$name = $_POST['name'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$query = "INSERT INTO images(name,image) values('$name','$image')";
$result = mysqli_query($conn,$query);

if ($result) {
	echo 'success';
}else{
	echo 'error';
}
?>