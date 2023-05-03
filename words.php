<?php 


if(isset($_POST['paragraph']) && isset($_POST['word']) && !empty($_POST['paragraph']) && !empty($_POST['word'])) {
	$paragraph = trim($_POST['paragraph']);
	$censored_word = trim($_POST['word']);
	// replaces the word to be censored ***
    $censored_paragraph = str_replace($censored_word, '***', $paragraph);

} else{
    $paragraph = 'Enter data in both boxes';
    $censored_word = '';
    $censored_paragraph = 'Enter data in both boxes';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored word</title>
</head>
<body>
    <h3>Original paragraph</h3>
    <p>
        <?php echo $paragraph ?>
    </p>
    <p> <?php echo 'Lunghezza paragrafo:' . " " . strlen($paragraph)?> </p>

    <h3>Censored paragraph:</h3>
    <p>
        <?php echo $censored_paragraph ?>
    </p>
    <p> 
        <?php echo 'Lunghezza paragrafo censurato:' . " " . strlen($censored_paragraph) ?> 
    </p>

    
    
</body>
</html>