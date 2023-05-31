<?php
// Include the database connection file
require_once("dbConnection.php");
$id = $_GET['id'];

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
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
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE prodi SET `fakultas` = '$fakultas', `prodi` = '$prodi', `program` = '$program', `akreditasi` = '$akreditasi' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
