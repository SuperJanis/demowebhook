<?php 
# Get JSON as a string
$rawBody  = file_get_contents('php://input');
# Get as an object
$data = json_decode($rawBody);
$request = '';


//$response['fulfillmentText'] = $request;
echo $data->queryResult->queryText;

$request = $data->queryResult->queryText;

echo $request;

//var_dump($data['queryResult']['queryText']);
//var_dump($data);


//echo json_encode($response);
?>
