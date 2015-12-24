<?php
// define the array
$codes_and_values = array(
    '200' => 'Everything is OK. Have a drink',
    '201' => 'Create a drinking rule, then drink',
    '202' => 'You will drink, after the next person\'s turn',
    '300' => 'Choose multiple people to drink',
    '301' => 'Make the person sitting to your right move to another spot for the rest of the game',
    '305' => 'Person to your left feeds you a drink',
    '307' => 'Choose someone to take a drink',
    '401' => 'Everyone but you drinks',
    '403' => 'Miss a turn, Must drink double on next turn',
    '404' => 'Nothing is OK. Go sit in the corner and drink',
    '406' => '"Must drink twice, loser',
    '408' => 'Last person to look at their watch, drinks',
    '409' => 'Drink, then go again',
    '410' => 'Remove a drinking rule (if one has been created)',
    '411' => 'Take a looooong drink',
    '412' => 'You may add a precondition to drinking',
    '413' => 'Person on your left and right drink with you',
    '416' => 'Thats what she said! Everyone drinks',
    '417' => 'Drink before your turn? if not, drink and go again',
    '418' => 'Sing "I\'m a little teapot". Then drink',
    '500' => 'Oh fuck, Everone drinks',
    '451' => 'Put your drink away for legal reasons'
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
            <a class="btn btn-lg btn-success" href="javascript:history.go(0)">Give me another!</a>
        </center>
    </p>
</div>
<div class="footer">
    <center><p>&copy; Status Code Drinking Game <?php echo date("Y"); ?></p></center>
</div>
</body>
</html>
