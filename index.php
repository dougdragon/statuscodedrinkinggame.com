<?php
// define the array
$codes_and_values = array(
    '100' => '<strong>Continue</strong>: The server has received the request and the client should proceed to send the alcohol to the body. Everyone drink.',
    '101' => '<strong>Switching Protocols</strong>: The requester has asked the server to switch drinks and the server has agreed to do so. Drink something different.',
    '200' => '<strong>OK</strong>: Everything is OK. Have a drink.',
    '201' => '<strong>Created</strong>: Create a new drink, then drink it.',
    '202' => '<strong>Accepted</strong>: You will drink, after the next person\'s turn.',
    '300' => '<strong>Multiple Choices</strong>: Choose multiple people to drink.',
    '301' => '<strong>Moved permanently</strong>: Make the person sitting to your right move to another spot for the rest of the game.',
    '305' => '<strong>Use Proxy</strong>: Person to your left feeds you a drink..',
    '307' => '<strong>Temporary Redirect</strong>: Choose someone to take a drink.',
    '401' => '<strong>Unauthorized</strong>: Everyone but you drinks.',
    '403' => '<strong>Forbidden</strong>: Must go into kitchen and make the group food.',
    '404' => '<strong>Not Found</strong>: Nothing is OK. Go sit in the corner and drink water.',
    '406' => '<strong>Not Acceptable</strong>: Go home, you\'re drunk.',
    '408' => '<strong>Request Timeout</strong>: Last person to look at their watch, drinks.',
    '409' => '<strong>Conflict</strong>: Drink, then go again.',
    '410' => '<strong>Gone</strong>: Leave the room for 5 minutes.',
    '411' => '<strong>Length Required</strong>: Take a looooong drink.',
    '412' => '<strong>Precondition Failed</strong>: Take a shot, then a chaser.',
    '413' => '<strong>Payload Too Large</strong>: Person to your left and right must drink with you.',
    '416' => '<strong>Range Not Satisfiable</strong>: Thats what she said! Everyone drinks.',
    '417' => '<strong>Expectation Failed</strong>: Ask the person directly in front of you to drink.',
    '418' => '<strong>I\'m a Teapot</strong>: Sing "I\'m a little teapot". Then drink.',
    '500' => '<strong>Internal Server Error</strong>: Oh crap, no one drinks.',
    '451' => '<strong>Unavailable for Legal Reasons</strong>: Everyone under the legal drinking age must drink water.'
);

function get_random_key() {
    global $codes_and_values;
    $random_key = array_rand($codes_and_values);
    return $random_key;
}

function get_response($key) {
    global $codes_and_values;
    return $codes_and_values[$key];
}

function return_key() {
    global $codes_and_values;
    return key($codes_and_values);
}
?>

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
            <?php
            // Get the $key variable from above
            global $key;
            // Spit the response to the page
            echo get_response($key);
            ?>
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
