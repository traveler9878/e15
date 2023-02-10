<?php

session_start();


$isPalindrome = $_SESSION['isPalindrome'];
$vowelCount = $_SESSION['vowelCount'];

//var_dump($_SESSION);

require 'index-view.php';
?>