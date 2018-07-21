<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view image</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>name</th>
				<th>image</th>
				<th>accion</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include('conn.php');
				$query = "SELECT * FROM images";
				$result = $conn->query($query);
				$x = 1;
				while ($row = $result->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $x; ?></td>
				<td><?php echo $row['name'] ?></td>
				<td>
					<img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['image']); ?>">
				</td>
				<td></td>
			</tr>
			<?php $x++; } ?>
		</tbody>
	</table>
</body>
</html>