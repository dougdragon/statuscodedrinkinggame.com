<?php
// define the array
$codes_and_values = array(
    '100' => array(
	'message' => 'Continue',
	'description' => 'The server has received the request and the client should proceed to send the alcohol to the body. Everyone drink.',
	),
    '101' => array(
	'message' => 'Switching Protocols',
	'description' => 'The requester has asked the server to switch drinks and the server has agreed to do so. Drink something different.',
	),
    '200' => array(
	'message' => 'OK',
	'description' => 'Everything is OK. Have a drink.',
	),
    '201' => array(
	'message' => 'Created',
	'description' => 'Create a new drink, then drink it.',
	),
    '202' => array(
	'message' => 'Accepted',
	'description' => 'You will drink, after the next person\'s turn.',
	),
    '300' => array(
	'message' => 'Multiple Choices',
	'description' => 'Choose multiple people to drink.',
	),
    '301' => array(
	'message' => 'Moved permanently',
	'description' => 'Make the person sitting to your right move to another spot for the rest of the game.',
	),
    '305' => array(
	'message' => 'Use Proxy',
	'description' => 'Person to your left feeds you a drink..',
	),
    '307' => array(
	'message' => 'Temporary Redirect',
	'description' => 'Choose someone to take a drink.',
	),
    '401' => array(
	'message' => 'Unauthorized',
	'description' => 'Everyone but you drinks.',
	),
    '403' => array(
	'message' => 'Forbidden',
	'description' => 'Must go into kitchen and make the group food.',
	),
    '404' => array(
	'message' => 'Not Found',
	'description' => 'Nothing is OK. Go sit in the corner and drink water.',
	),
    '406' => array(
	'message' => 'Not Acceptable',
	'description' => 'Go home, you\'re drunk.',
	),
    '408' => array(
	'message' => 'Request Timeout',
	'description' => 'Last person to look at their watch, drinks.',
	),
    '409' => array(
	'message' => 'Conflict',
	'description' => 'Drink, then go again.',
	),
    '410' => array(
	'message' => 'Gone',
	'description' => 'Leave the room for 5 minutes.',
	),
    '411' => array(
	'message' => 'Length Required',
	'description' => 'Take a looooong drink.',
	),
    '412' => array(
	'message' => 'Precondition Failed',
	'description' => 'Take a shot, then a chaser.',
	),
    '413' => array(
	'message' => 'Payload Too Large',
	'description' => 'Person to your left and right must drink with you.',
	),
    '416' => array(
	'message' => 'Range Not Satisfiable',
	'description' => 'Thats what she said! Everyone drinks.',
	),
    '417' => array(
	'message' => 'Expectation Failed',
	'description' => 'Ask the person directly in front of you to drink.',
	),
    '418' => array(
	'message' => 'I\'m a Teapot',
	'description' => 'Sing "I\'m a little teapot". Then drink.',
	),
    '500' => array(
	'message' => 'Internal Server Error',
	'description' => 'Oh crap, no one drinks.',
	),
    '451' => array(
	'message' => 'Unavailable for Legal Reasons',
	'description' => 'Everyone under the legal drinking age must drink water.',
	),
);

function get_random_key() {
    global $codes_and_values;
    $random_key = array_rand($codes_and_values);
    return $random_key;
}

function get_response($key) {
    global $codes_and_values;
    return $codes_and_values[$key]['message'];
}

function get_description($key) {
    global $codes_and_values;
    return $codes_and_values[$key]['description'];
}

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/jumbotron-narrow.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <div class="header">
        <center><h3 class="text-muted">Response Code Drinking Game</h3></center>
    </div>
    <div class="jumbotron">
        <h1>
            <?php
            // Get the random key
            $key = get_random_key();
            // Spit that to the page
            echo $key;
            ?>
        </h1>
        <p class="lead">
	    <span class="response">
	        <?php
                // Get the $key variable from above
                global $key;
                // Spit the response to the page
                echo get_response($key);?></span>:

	    <span class="description">
	        <?php
                // Spit the description to the page
                echo get_description($key);
                ?>
	    </span>
        </p>
    </div>
    <p>
        <center>
            <a class="btn btn-block btn-success" href="javascript:history.go(0)">Give me another!</a>
        </center>
    </p>
</div>
<div class="footer">
    <center><p>Status Code Drinking Game <?php echo date("Y"); ?> | <a href="https://github.com/dougdragon/statuscodedrinkinggame.com/">Help make this more better?</a></p></center>
</div>
</body>
</html>
