<?php



require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
	$data = json_decode(file_get_contents("php://input", true));
	
	$sql = "DELETE FROM posts WHERE id='".
	 mysqli_real_escape_string($dbConn, $data->id). "'";
	
	  ;
	
	$result = dbQuery($sql);
	
	if($result) {
		echo json_encode(array('success' => 'You deleted post successfully'));
	} else {
		echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
	}
}

