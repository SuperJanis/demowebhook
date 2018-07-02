<?php 
# Get JSON as a string
$rawBody  = file_get_contents('php://input');
# Get as an object
$data = json_decode($rawBody);

$request = $data['queryResult']['queryText'];

$response['fulfillmentText'] = '$request';

echo json_encode($response);
?>
