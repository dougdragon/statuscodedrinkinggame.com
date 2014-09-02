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
            $code = getCode();
            echo "$code"; ?>
        </h1>
        <p class="lead">
            <?php
            $move = getMove();
            echo "$move"; ?>
        </p>
    </div>
</div>


<?php
/*
http://www.restapitutorial.com/httpstatuscodes.html
Get HTTP codes from a list
Randomize code
Return code, game to user
Refresh / get new code button
*/

//http_response_code(getCode());
//$code = http_response_code(404);

// returns the code
function getCode() {
    $codes = array(200,301,404, 500);
	//$number_of_codes = count($codes);
	return $codes[array_rand($codes, 1)];
}
// returns the move
function getMove() {
    $moves = array("Do something",
                   "Do something else",
                   "Do another thing");
    return $moves[array_rand($moves, 1)];
}
?>

<div class="footer">
    <center><p>&copy; Response Code Drinking Game <?php echo date("Y"); ?></p></center>
</div>

</body>
</html>