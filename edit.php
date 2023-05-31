<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM prodi WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$fakultas = $resultData['fakultas'];
$prodi = $resultData['prodi'];
$program = $resultData['program'];
$akreditasi = $resultData['akreditasi'];
		
?>
<html>
<head>	
	<title>Edit Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<div class="container d-flex flex-column justify-content-center">
		<h2>Edit Data</h2>
		<p>
			<a href="index.php">Home</a>
		</p>
		
		<form name="edit" method="post" action="editAction.php?id=<?php echo $id; ?>">
			<table border="0">
				<tr> 
					<td>Fakultas</td>
					<td><input type="text" name="fakultas" value="<?php echo $fakultas; ?>"></td>
				</tr>
				<tr> 
					<td>Prodi</td>
					<td><input type="text" name="prodi" value="<?php echo $prodi; ?>"></td>
				</tr>
				<tr> 
					<td>Program</td>
					<td><input type="text" name="program" value="<?php echo $program; ?>"></td>
				</tr>
				<tr> 
					<td>Akreditasi</td>
					<td><input type="text" name="akreditasi" value="<?php echo $akreditasi; ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
