<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP Badwords</title>
</head>
<body>
<!-- Form per il programmino -->
    <form action="censor.php" method="post">

        <!-- Textarea con paragrafo -->
        <label for="paragraph">Paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph" rows="4" cols="50"></textarea><br>

        <!-- Parola che poi verrà censurata -->
        <label for="word">Parola da censurare:</label><br>
        <input type="text" id="word" name="word"><br><br>
        <input type="submit" value="Invia" id="submit">
    </form>
</body>
</html>
