<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Enter the data in the appropriate boxes</h1>
    <form action="words.php" method="POST">
		<label for="paragraph">Paragraph</label><br>
		<textarea name="paragraph" id="paragraph" cols="23" rows="10"></textarea><br>
		<label for="word">Censored word</label><br>
		<input type="text" name="word" id="word"><br>
		<input type="submit" value="Submit">
	</form>
    
</body>
</html>