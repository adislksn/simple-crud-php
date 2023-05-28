<html>
<head>
	<title>Add Data</title>
</head>

<body>
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
</body>
</html>

