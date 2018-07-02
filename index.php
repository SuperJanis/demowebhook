<?php 
# Get JSON as a string
$rawBody  = file_get_contents('php://input');
# Get as an object
$data = json_decode($rawBody);

//$data['queryResult']['parameters']['fulfillmentMessages']['text']['text'] = "Cinq sur cinq";
$response['fulfuillmentText'] = "Cinq sur cinq";

echo json_encode($response);

?>
