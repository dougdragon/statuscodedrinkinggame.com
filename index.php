<?php

/*
http://www.restapitutorial.com/httpstatuscodes.html
Get HTTP codes from a list
Randomize code
Return code, game to user
Refresh button

*/

$code = getCode();
$num_of_codes = count($code);

echo "Code: " . $code;
echo "<br />";
echo "Number of codes: " . $num_of_codes;



//http_response_code(getCode());
//$code = http_response_code(404);


// returns the code
function getCode() {
    $codes = array(200,301,404, 500);
	//$number_of_codes = count($codes);
	return $codes[array_rand($codes, 1)];
}
?>
