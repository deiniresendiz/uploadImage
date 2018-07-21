<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>upload image</title>
</head>
<body>
	<center>
		<form action="saveimage.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="name" placeholder="name image" required>
			<br>
			<input type="file" name="image" required>
			<br>
			<input type="submit" value="Upload">
		</form>
	</center>
</body>
</html>