<?php

//process client request (via URL)

header("Content-Type:application/json");
include("function.php");
if(!empty($_GET['pounds'])){

$input = $_GET['pounds'];
$kilograms = get_kilograms($input);

// delivering the response as JSON string

deliver_response($input,$kilograms);

}
else
{
//throw invalid request

deliver_response(NULL,NULL);
}

function deliver_response($x,$y)
{

$response['pounds'] = $x;
$response['kilograms'] = $y;

//encode the response to JSON format

$json_response = json_encode($response);
echo $json_response;

}
?>