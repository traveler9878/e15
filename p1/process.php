<?php

session_start();


function isPalindrome($inStr){
    $strLower = strtolower($inStr);

    $cleanStr = preg_replace('/[^A-Za-z0-9\-]/', '', $strLower); 

    
    $revStr = strrev($cleanStr);

    if($cleanStr == $revStr){
        return true;
    }
    return false;

}


function vowelCount ($wordToCount){
$vowels = 'aeiou';
$vowelCount = 0;
$wordArray = str_split($wordToCount);

    for ($i = 0; $i < strlen($wordToCount); $i++)
    {
        //echo('i:  ' . $i . '<BR>');
        //echo('letter to check:  ' . $wordArray[$i] . '<BR>');
        $position = strpos($vowels, $wordArray[$i]);
        //var_dump(($position));
        //echo('strpos:  ' . $position . '<BR>');
        if ($position){
            //echo('position:  ' . $position . '<BR>');
            $vowelCount = $vowelCount + 1;
            //echo('<br>vowel count:  ' . $vowelCount . '<BR>');
        }
        $position = NULL;
    }
return $vowelCount;
    
}


//var_dump($_GET);
$wordToEvaluate = $_GET['wordToEvaluate'];
var_dump($wordToEvaluate);
//echo("Is Palindrome:  " . isPalindrome($wordToEvaluate));
//echo("<BR>Vowel Count:  " . vowelCount($wordToEvaluate));
$_SESSION['isPalindrome'] = isPalindrome($wordToEvaluate);

$_SESSION['vowelCount'] = vowelCount($wordToEvaluate);

$_SESSION['wordToEvaluate'] = $wordToEvaluate;

//Redirect
header('Location:  index.php');