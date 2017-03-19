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
	$response = ['message'=> 'hello, '.$decodedBody->name.' '.date("d.m.y h:i:s")];
	echo json_encode($response);
}
