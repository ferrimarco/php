<!DOCTYPE html>
<html>
<head>
    <title>Dati Meteorologici</title>
</head>
<body>
    <h1>Dati Meteorologici Registrati</h1>
    
    <?php
    // Verifica se sono stati inviati dati tramite il modulo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati dal modulo HTML
        $localita = $_POST["localita"];
        $data = $_POST["data"];
        $ora = $_POST["ora"];
        $tipo_rivelazione = $_POST["tipo_rivelazione"];
        $umidita = $_POST["umidita"];
        $clima = $_POST["clima"];
        $altitudine = $_POST["altitudine"];

        // Puoi qui salvare i dati nel tuo database o in un file, a seconda delle tue esigenze
        // Esempio di visualizzazione dei dati
        echo "Localita' : " . $localita . "<br>";
        echo "Data: " . $data . "<br>";
        echo "Ora: " . $ora . "<br>";
        echo "Tipo Rivelazione: " . $tipo_rivelazione . "<br>";
        echo "Umidita' : " . $umidita . "<br>";
        echo "Clima: " . $clima . "<br>";
        echo "Altitudine: " . $altitudine . "<br>";
    }
    ?>
    
    <br>
    <a href="./esercizio_1.html">Torna al modulo di inserimento</a>
</body>
</html>
