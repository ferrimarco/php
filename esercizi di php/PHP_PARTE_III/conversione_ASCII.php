<!DOCTYPE html>
<html>
<head>
    <title>Converti Carattere ASCII</title>
</head>
<body>
    <h1>Converti Carattere ASCII</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="input">Inserisci un carattere o un codice ASCII:</label>
        <input type="text" name="input" required>
        
        <p>Tipo di conversione:</p>
        <input type="radio" name="conversion" value="ascii_to_char" required> Codice ASCII a Carattere
        <input type="radio" name="conversion" value="char_to_ascii" required> Carattere a Codice ASCII
        
        <input type="submit" name="convert" value="Converti">
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $input = $_POST['input'];
        $conversion = $_POST['conversion'];

        if ($conversion === 'char_to_ascii') {
            if (strlen($input) != 1) {
                echo "<p>Errore: Inserire un singolo carattere.</p>";
            } else {
                $asciiCode = ord($input);
                echo "<h2>Risultato della Conversione:</h2>";
                echo "<p>Carattere: $input</p>";
                echo "<p>Codice ASCII: $asciiCode</p>";
            }
        } elseif ($conversion === 'ascii_to_char') {
            if (!is_numeric($input)) {
                echo "<p>Errore: Inserire un codice ASCII valido.</p>";
            } else {
                $character = chr($input);
                echo "<h2>Risultato della Conversione:</h2>";
                echo "<p>Codice ASCII: $input</p>";
                echo "<p>Carattere: $character</p>";
            }
        }
    }
    ?>
</body>
</html>
