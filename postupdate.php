<?php



require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
	$data = json_decode(file_get_contents("php://input", true));
	
	$sql = "UPDATE posts SET title='" .mysqli_real_escape_string($dbConn, $data->title) . "', 
    description='" . mysqli_real_escape_string($dbConn, $data->description) . "',
	date='". mysqli_real_escape_string($dbConn, $data->date) . "',
    userId=" . mysqli_real_escape_string($dbConn, $data->userId) . "
    WHERE id=". mysqli_real_escape_string($dbConn, $data->id) . ";" 
	  ;
	echo $sql;
	$result = dbQuery($sql);
	
	if($result) {
		echo json_encode(array('success' => 'You updated post successfully'));
	} else {
		echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
	}
}