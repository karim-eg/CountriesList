<?php

// get user language
$user_language = trim($_GET["lang"]);

// call countries file
require ($_SERVER['DOCUMENT_ROOT'].'/countries_list.php');

echo getCountries($user_language);

