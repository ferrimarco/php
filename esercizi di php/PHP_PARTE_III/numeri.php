<!DOCTYPE html>
<html>
<head>
    <title>Tronca Decimali di un Numero</title>
</head>
<body>
    <h1>Tronca Decimali di un Numero</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Inserisci un numero:</label>
        <input type="text" name="numero" required>
        <input type="submit" name="tronca" value="Tronca Decimali">
    </form>

    <?php
    if (isset($_POST['tronca'])) {
        $numero = $_POST['numero'];

        if (is_numeric($numero)) {
            $numeroTroncato = (int)$numero;
            echo "<h2>Risultato:</h2>";
            echo "<p>Numero inserito: $numero</p>";
            echo "<p>Numero troncato: $numeroTroncato</p>";
        } else {
            echo "<h2>Errore:</h2>";
            echo "<p>Per favore, inserisci un numero valido.</p>";
        }
    }
    ?>
</body>
</html>
