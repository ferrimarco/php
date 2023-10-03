<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera i dati inseriti dall'utente
    $nomeSquadra1 = $_POST["squadra1"];
    $vinte1 = $_POST["vinte1"];
    $pareggiate1 = $_POST["pareggiate1"];
    $perse1 = $_POST["perse1"];

    $nomeSquadra2 = $_POST["squadra2"];
    $vinte2 = $_POST["vinte2"];
    $pareggiate2 = $_POST["pareggiate2"];
    $perse2 = $_POST["perse2"];

    // Calcola il punteggio delle squadre
    $punteggio1 = $vinte1 * 3 + $pareggiate1;
    $punteggio2 = $vinte2 * 3 + $pareggiate2;

    // Verifica se il numero di partite giocate è diverso
    if ($vinte1 + $pareggiate1 + $perse1 != $vinte2 + $pareggiate2 + $perse2) {
        echo "<p>Le due squadre hanno giocato un numero diverso di partite.</p>";
    }

    // Mostra il punteggio delle squadre
    echo "<p>Punteggio di $nomeSquadra1: $punteggio1</p>";
    echo "<p>Punteggio di $nomeSquadra2: $punteggio2</p>";

    // Determina la squadra con il punteggio più alto
    if ($punteggio1 > $punteggio2) {
        echo "<p>$nomeSquadra1 ha un punteggio superiore a $nomeSquadra2.</p>";
    } elseif ($punteggio2 > $punteggio1) {
        echo "<p>$nomeSquadra2 ha un punteggio superiore a $nomeSquadra1.</p>";
    } else {
        echo "<p>Le due squadre hanno lo stesso punteggio.</p>";
    }
}
?>
