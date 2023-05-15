<?php
header('Content-Type: application/json');


// get user language
$user_language = trim($_GET["lang"]);

// call countries file
require ($_SERVER['DOCUMENT_ROOT'].'/countries_list.php');

echo json_encode(getCountries($user_language));

