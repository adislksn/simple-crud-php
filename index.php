<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM prodi ORDER BY id ASC");
?>

<html>
<head>	
	<title>Homepage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="">
	<div class="container d-flex flex-column justify-content-center">
		<h2>Homepage</h2>
		<p>
			<a href="add.php">Add New Data</a>
		</p>
		<table class="table">
			<tr bgcolor='#DDDDDD'>
				<td><strong>Id</strong></td>
				<td><strong>Fakultas</strong></td>
				<td><strong>Prodi</strong></td>
				<td><strong>Program</strong></td>
				<td><strong>Akreditasi</strong></td>
				<td><strong>Aksi</strong></td>
			</tr>
			<?php
			// Fetch the next row of a result set as an associative array
			while ($res = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$res['id']."</td>";
				echo "<td>".$res['fakultas']."</td>";
				echo "<td>".$res['prodi']."</td>";	
				echo "<td>".$res['program']."</td>";	
				echo "<td>".$res['akreditasi']."</td>";	
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
				<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			}
			?>
			</tr>
		</table>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
