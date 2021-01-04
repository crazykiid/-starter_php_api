<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
if($_SERVER['REQUEST_METHOD'] == 'GET'){

  if(isset($_GET['e']) && strlen(trim($_GET['e'])) > 0){

    $e = trim($_GET['e']);
    if($e == 403){
      // 403 Forbidden
      http_response_code(403);
       
      // tell the user
      exit(json_encode(array("status" => "error", "message" => "forbidden")));
    }
    elseif($e == 404){
      // 404 Not Found
      http_response_code(404);
       
      // tell the user
      exit(json_encode(array("status" => "error", "message" => "not found")));
    }
    else{
      // 401 Unauthorized
      http_response_code(401);
       
      // tell the user
      exit(json_encode(array("status" => "error", "message" => "unauthorized")));
    }
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