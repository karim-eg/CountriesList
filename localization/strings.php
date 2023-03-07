<?php


function getLang($getInput) {

    // Check input, if we didn't recognise the lang put the default lang English.
    if (empty($getInput)) {
        $getInput = "en";
    }


    // load translation files
    $defLang = require_once('country_'.$getInput.'.php');
    $translated = include('country_'.$getInput.'.php');

    // get result
    if (is_array($translated)) {
        return array_replace($defLang, $translated);
    } else {
        return $defLang;
    }

}


