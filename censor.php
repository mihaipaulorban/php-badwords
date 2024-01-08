<?php
// Variabili
$paragraph = isset($_POST['paragraph']) ? $_POST['paragraph'] : '';
$word = isset($_POST['word']) ? $_POST['word'] : '';

// Sostituzione parola
$censoredParagraph = str_replace($word, '***', $paragraph);
$censoredLength = strlen($censoredParagraph);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultato Censura</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <p>Paragrafo originale: <span class="original-text"><?php echo htmlspecialchars($paragraph); ?></span></p>
        <p>Lunghezza paragrafo: <span class="length"><?php echo strlen($paragraph); ?></span></p>
        <p>Paragrafo censurato: <span class="censored-text"><?php echo htmlspecialchars($censoredParagraph); ?></span></p>
        <p>Lunghezza paragrafo censurato: <span class="length"><?php echo $censoredLength; ?></span></p>
    </div>
</body>
</html>
