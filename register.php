<?php



require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$data = json_decode(file_get_contents("php://input", true));
	
	$sql = "INSERT INTO users(username, password,surname, email,role) VALUES('" .
	 mysqli_real_escape_string($dbConn, $data->username) . "', '" 
	 . mysqli_real_escape_string($dbConn, $data->password) . "')"
	 . mysqli_real_escape_string($dbConn, $data->surname) . "', '" 
	 . mysqli_real_escape_string($dbConn, $data->email) . "', '" 
	 . mysqli_real_escape_string($dbConn, $data->role) . "'; '" 
	 ;
	
	$result = dbQuery($sql);
	
	if($result) {
		echo json_encode(array('success' => 'You registered successfully'));
	} else {
		echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
	}
}

