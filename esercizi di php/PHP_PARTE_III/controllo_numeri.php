<!DOCTYPE html>
<html>
<head>
    <title>Verifica 10 Numeri</title>
</head>
<body>
    <h1>Verifica 10 Numeri</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='numero$i'>Inserisci il numero $i:</label>";
            echo "<input type='text' name='numero$i' required><br>";
        }
        ?>
        <input type="submit" name="verifica" value="Verifica Numeri">
    </form>

    <?php
    if (isset($_POST['verifica'])) {
        $error = false;

        for ($i = 1; $i <= 10; $i++) {
            $inputName = "numero$i";
            if (!isset($_POST[$inputName]) || !ctype_digit($_POST[$inputName])) {
                $error = true;
                break;
            }
        }

        if ($error) {
            echo "<h2>Errore:</h2>";
            echo "<p>Per favore, inserisci 10 numeri validi.</p>";
        } else {
            echo "<h2>Verifica Completata:</h2>";
            echo "<p>Tutti i numeri inseriti sono validi.</p>";
        }
    }
    ?>
</body>
</html>
