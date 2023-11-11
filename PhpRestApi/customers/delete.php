<?php



header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: DELETE');
header('Access-Control-Allow-Headers: content-Type, Access-control-Allow-Headers, Authorization, X-Request-with');

include('function.php');

$requestmethod = $_SERVER["REQUEST_METHOD"];

if($requestmethod == 'DELETE'){
 
    $deleteCustomer = deleteCustomer($_GET);
    echo $deleteCustomer;
}
   
else{
    $data =[
        'status' => 405,
        'message' => $requestmethod . ' Method Not Allowed'
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}


?>
