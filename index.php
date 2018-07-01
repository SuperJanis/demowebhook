<?php 

use Dialogflow\WebhookClient;

$agent = new WebhookClient($_POST);

$action = $agent->getAction();
$query = $agent->getQuery();
$parameters = $agent->getParameters();
$contexts = $agent->getContexts();


$text = \Dialogflow\RichMessage\Text::create()
    ->text('This is text')
    ->ssml('<speak>This is <say-as interpret-as="characters">ssml</say-as></speak>')
;

$agent->reply($text);


$agent->reply('Hi, how can I help?');

header('Content-type: application/json');
echo json_decode($agent->render());


switch ($text) {
	case 'hi':
		$speech = "Hi, Nice to meet you";
		break;

	case 'bye':
		$speech = "Bye, good night";
		break;

	case 'anything':
		$speech = "Yes, you can type anything here.";
		break;
	
	default:
		$speech = "Sorry, I didnt get that. Please ask me something else.";
		break;
}

$response = new \stdClass();
$response->speech = $speech;
$response->displayText = $speech;
$response->source = "webhook";
echo json_encode($response);
}

?>