<!DOCTYPE html>
<html>
<head>
    <title>Consigli per l'Acquisto del Televisore</title>
</head>
<body>
    <h1>Consigli per l'Acquisto del Televisore</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati inseriti dall'utente
        $marca = $_POST["marca"];
        $modello = $_POST["modello"];
        $porte_hdmi = $_POST["porte_hdmi"];
        $refresh_rate = $_POST["refresh_rate"];
        $risoluzione = $_POST["risoluzione"];

        // Consigli in base ai criteri specificati
        $consigli = array();

        if ($porte_hdmi < 2) {
            $consigli[] = "Consigliamo di acquistare un televisore con almeno due porte HDMI.";
        }

        if ($refresh_rate < 50) {
            $consigli[] = "Consigliamo di acquistare un televisore con un refresh rate di almeno 50Hz.";
        }

        if ($risoluzione === "HD Ready" || $risoluzione === "Full HD") {
            $consigli[] = "Consigliamo di considerare un televisore Ultra HD o 4K per una migliore qualità dell'immagine.";
        }

        // Mostra i consigli all'utente
        if (empty($consigli)) {
            echo "<p>Nessun consiglio specifico per l'acquisto del televisore $marca $modello.</p>";
        } else {
            echo "<p>Consigli per l'acquisto del televisore $marca $modello:</p>";
            echo "<ul>";
            foreach ($consigli as $consiglio) {
                echo "<li>$consiglio</li>";
            }
            echo "</ul>";
        }
    }
    ?>

    <a href="televisore.html">Torna al modulo</a>
</body>
</html>
