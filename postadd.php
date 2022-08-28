<?php



require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$data = json_decode(file_get_contents("php://input", true));
	
	$sql = "INSERT INTO posts(title, description,date, userId) VALUES('" .
	 mysqli_real_escape_string($dbConn, $data->title) . "', '" 
	 . mysqli_real_escape_string($dbConn, $data->description) . "','"
	 . mysqli_real_escape_string($dbConn, $data->date) . "', " 
	 . mysqli_real_escape_string($dbConn, $data->userId) . ") ;" 
	  ;

	
	$result = dbQuery($sql);
	
	if($result) {
		echo json_encode(array('success' => 'You added a post successfully'));
	} else {
		echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
	}
}

