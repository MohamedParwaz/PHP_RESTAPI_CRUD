<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: content-Type, Access-control-Allow-Headers, Authorization, X-Request-with');

include('function.php');

$requestmethod = $_SERVER["REQUEST_METHOD"];

if($requestmethod == 'GET'){
 
   if(isset($_GET['id'])){
    $customer = getCustomer($_GET);
    echo $customer;
   }
   else{

       $customerList = getCustomerList();
       echo $customerList; 

   }


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