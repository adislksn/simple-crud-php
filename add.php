<html>
<head>
	<title>Add Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<div class="container d-flex flex-column justify-content-center">
		<h2>Add Data</h2>
		<p>
			<a href="index.php">Home</a>
		</p>
	
		<form action="addAction.php" method="post" name="add">
			<table width="25%" border="0">
				<tr> 
					<td>Fakultas</td>
					<td><input type="text" name="fakultas"></td>
				</tr>
				<tr> 
					<td>Prodi</td>
					<td><input type="text" name="prodi"></td>
				</tr>
				<tr> 
					<td>Program</td>
					<td><input type="text" name="program"></td>
				</tr>
				<tr> 
					<td>Akreditasi</td>
					<td><input type="text" name="akreditasi"></td>
				</tr>
				<tr> 
					<td></td>
					<td><input type="submit" name="submit" value="Add"></td>
				</tr>
			</table>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

