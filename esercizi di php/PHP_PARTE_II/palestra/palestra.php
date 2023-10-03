<?php
if (isset($_POST['calcola'])) {
    $nome = $_POST['nome'];
    $eta = intval($_POST['eta']);
    $frequenza = $_POST['frequenza'];

    // Calcola il prezzo mensile base in base all'età
    if ($eta < 18 || $eta > 64) {
        $prezzoMensile = 35;
    } else {
        $prezzoMensile = 45;
    }

    // Applica lo sconto in base alla frequenza di pagamento
    switch ($frequenza) {
        case 'bimestrale':
            $sconto = 0.1;
            break;
        case 'trimestrale':
            $sconto = 0.15;
            break;
        case 'annuale':
            $sconto = 0.2;
            break;
        default:
            $sconto = 0;
            break;
    }

    // Calcola il prezzo annuale
    $prezzoAnnuale = $prezzoMensile * 12 * (1 - $sconto);

    // Stampare il risultato
    echo "<h2>Risultato per $nome anni $eta</h2>";
    echo "<strong><p>Prezzo mensile: $$prezzoMensile</p>";
    echo "<strong><p>Sconto: " . ($sconto * 100) . "%</p>";
    echo "<strong><p>Prezzo annuale: $$prezzoAnnuale</p>";
}
?>
