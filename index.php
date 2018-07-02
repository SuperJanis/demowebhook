<?php 
# Get JSON as a string
$rawBody  = file_get_contents('php://input');
# Get as an object
$data = json_decode($rawBody);

echo json_encode($data['queryText']);

?>
