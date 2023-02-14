<?php

session_start();


$clean = sizeof($_SESSION);
if ($clean > 0) {
    $isPalindrome = $_SESSION['isPalindrome'];
    $vowelCount = $_SESSION['vowelCount'];
    $wordToEvaluate = $_SESSION['wordToEvaluate'];
    $cleanStrSize = $_SESSION['cleanStrSize'];
    session_unset();
}

//var_dump($wordToEvaluate);

//var_dump($_SESSION);

require 'index-view.php';
?>