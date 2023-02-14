<!DOCTYPE html>
<html>

<head>
    <title>Project 1 (David Curtis)</title>
    <style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
    </style>
</head>

<body>
    <h1>Project 1</h1>
    <form method='GET' action='process.php'>
        <h1>Word Evaluator</h1>
        <p>Input your word for evaluation below:</p>
        <label for='wordToEvaluate'>Word to Evaluate: </label>
        <input type='text' name='wordToEvaluate' id='wordToEvaluate'>
        <button type='submit'>Evaluate</button>
    </form>
    <BR>
    <?php if($clean > 0){ ?>
    <?php if ($isPalindrome) { ?>
    The submitted word, "

    <?php echo($wordToEvaluate); ?>

    ", IS
    <?php if($cleanStrSize < 1){
        echo('NOT');
    } ?>

    a Palindrome <BR>
    <?php } else { ?>
    The submitted word, "

    <?php echo($wordToEvaluate); ?>

    ", IS NOT a Palindrome <BR>
    <?php } ?>
    Vowel Count is: <?php echo($vowelCount) ?>
    <?php } ?>

</body>

</html>