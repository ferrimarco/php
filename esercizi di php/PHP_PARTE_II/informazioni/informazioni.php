<?php
// Definisci le variabili dell'utente
$utente = $_POST['nome'];
$cognome = $_POST['cognome'];
$eta = $_POST['eta'];
$email = $_POST['email'];
$passwordUtente = $_POST['password'];
$colorePreferito = $_POST['colore_preferito'];

// Definisci la password corretta
$passwordCorretta = '1234';

if ($passwordUtente === $passwordCorretta) {
    // Password corretta, stampa le informazioni
    echo "
            <h1>Informazioni Utente</h1> <br>
            Nome: $utente <br>
            Cognome: $cognome <br>
            Eta: $eta <br>
            Email: $email <br>
            Colore Preferito: $colorePreferito
            ";
} else {
    // Password errata, mostra un messaggio di errore
    echo "Password errata. Torna indietro e riprova.";
}
?>