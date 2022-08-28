<?php



require_once 'db.php';
require_once 'jwt_utils.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
$bearer_token = get_bearer_token();


$is_jwt_valid = is_jwt_valid($bearer_token);
$role=jwt_role($bearer_token);

if ($_SERVER['REQUEST_METHOD'] === 'POST'&&$is_jwt_valid && $role>=3) {
	$data = json_decode(file_get_contents("php://input", true));
	$date = date("D M d, Y G:i");
	$user=jwt_user($bearer_token);

	$sql = "INSERT INTO posts(title, description,date, userId) VALUES('" .
	 mysqli_real_escape_string($dbConn, $data->title) . "', '" 
	 . mysqli_real_escape_string($dbConn, $data->description) . "','"
	 . mysqli_real_escape_string($dbConn, $date) ."', " 
	 . mysqli_real_escape_string($dbConn, $user) . ") ;" 
	  ;

	
	$result = dbQuery($sql);
	
	if($result) {
		echo json_encode(array('success' => 'You added a post successfully'));
	} else {
		echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
	}
}

