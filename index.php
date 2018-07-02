<?php 
# Get JSON as a string
$rawBody  = file_get_contents('php://input');
# Get as an object
$data = json_decode($rawBody);
$request = '';

//$request = $data['responseId']
//$request = $data['queryResult']['queryText'];

//$response['fulfillmentText'] = $request;

var_dump($data['queryResult']['queryText']);
var_dump($data);


//echo json_encode($response);
?>
