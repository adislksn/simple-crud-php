<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$fakultas = mysqli_real_escape_string($mysqli, $_POST['fakultas']);
	$prodi = mysqli_real_escape_string($mysqli, $_POST['prodi']);
	$program = mysqli_real_escape_string($mysqli, $_POST['program']);
	$akreditasi = mysqli_real_escape_string($mysqli, $_POST['akreditasi']);
		
	// Check for empty fields
	if (empty($fakultas) || empty($prodi) || empty($program) || empty($akreditasi)) {
		if (empty($fakultas)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($prodi)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($program)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if (empty($akreditasi)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO prodi (`fakultas`, `prodi`, `program`, `akreditasi`) VALUES ('$fakultas', '$prodi', '$program', '$akreditasi')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
