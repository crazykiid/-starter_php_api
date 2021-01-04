<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// get database
include_once '../config/_database.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){

  if(isset($_GET['q']) && strlen(trim($_GET['q'])) > 0){

    $q = trim($_GET['q']);
    // 200 OK
    http_response_code(200);
       
    // tell the user
    exit(json_encode(array("status" => "success", "data" => array('query' => $q))));
  }
  else{
    // 401 Unauthorized
    http_response_code(401);
       
    // tell the user
    exit(json_encode(array("status" => "error", "message" => "unauthorized"))); 
  }    
}
else{
  // 405 Method Not Allowed
  http_response_code(405);
 
  // tell the user
  exit(json_encode(array("status" => "error", "message" => "method not allowed")));
}
?>