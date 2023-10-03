
<!DOCTYPE html>
<html>
<head>
    <title>Converti Stringa in Diversi Tipi</title>
</head>
<body>
    <h1>Converti Stringa in Diversi Tipi</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="inputString">Inserisci una stringa:</label>
        <input type="text" name="inputString" required>
        <input type="submit" name="convert" value="Converti">
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $inputString = $_POST['inputString'];

        // Converte la stringa in tipi diversi
        $intero = (int)$inputString;
        $float = (float)$inputString;
        $boolean = (bool)$inputString;
        $string = (string)$inputString;

        // Mostra i risultati
        echo "<h2>Risultati della Conversione:</h2>";
        echo "<p>Stringa inserita: $inputString</p>";
        echo "<p>Convertita in Interi: $intero</p>";
        echo "<p>Convertita in Float: $float</p>";
        echo "<p>Convertita in Boolean: " . ($boolean ? 'true' : 'false') . "</p>";
        echo "<p>Convertita in Stringa: $string</p>";
    }
    ?>
</body>
</html>
