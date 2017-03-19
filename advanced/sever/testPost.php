<?php

header('Content-Type: application/json');
$rawBody = file_get_contents('php://input');

/*
* should be receiving:
* name => nameValue
*/


$decodedBody = json_decode($rawBody);
//echo $decodedBody->{name};

if (isset($decodedBody)){
	$response = ['hello' => $decodedBody->name];
	//echo json_encode($response);
}

//echo $_GET['name'];

$greeting = 'hello, ' . $decodedBody->{name};
//echo $greeting;

$response = ['message' => $greeting];
//echo $response->{message};

$finalResonse = json_encode($response);
//echo $finalResonse;

$hi = json_decode($finalResonse);
echo $hi->{message};