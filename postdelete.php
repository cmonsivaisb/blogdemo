<?php



require_once 'db.php';
require_once 'jwt_utils.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
$bearer_token = get_bearer_token();


$is_jwt_valid = is_jwt_valid($bearer_token);
$role=jwt_role($bearer_token);
if ($_SERVER['REQUEST_METHOD'] === 'DELETE'&&$is_jwt_valid && $role>=5) {
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

