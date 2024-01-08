<?php
// Variabili
$paragraph = $_POST['paragraph'];
$word = $_POST['word'];

// Paragrafo senza censura e la sua lunghezza
echo "<p>Paragrafo originale: " . htmlspecialchars($paragraph) . "</p>";
echo "<p>Lunghezza paragrafo: " . strlen($paragraph) . "</p>";

// Sostituzione parola
$censoredParagraph = str_replace($word, '***', $paragraph);

// Paragrafo censurato e la sua lunghezza
echo "<p>Paragrafo censurato: " . htmlspecialchars($censoredParagraph) . "</p>";
echo "<p>Lunghezza paragrafo censurato: " . strlen($censoredParagraph);
?>