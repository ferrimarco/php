<!DOCTYPE html>
<html>
<head>
    <title>Riepilogo Acquisto</title>
</head>
<body>
    <h1>Riepilogo Acquisto</h1>

    <?php
    // Verifica se sono stati inviati dati tramite il modulo
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati dal modulo HTML
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $ragione_sociale = $_POST["ragione_sociale"];
        $indirizzo = $_POST["indirizzo"];
        $piva = $_POST["piva"];
        $tel = $_POST["tel"];
        $descrizione = $_POST["descrizione"];
        $codice = $_POST["codice"];
        $giacenza = $_POST["giacenza"];
        $prezzo_unitario = $_POST["prezzo_unitario"];
        $percentuale_iva = $_POST["percentuale_iva"];
        $quantita = $_POST["quantita"];
        $sconto = $_POST["sconto"];

        // Calcola il prezzo senza IVA
        $prezzo_senza_iva = $prezzo_unitario * $quantita * (1 - ($sconto / 100));

        // Calcola l'IVA
        $iva = $prezzo_senza_iva * ($percentuale_iva / 100);

        // Calcola il prezzo totale con IVA
        $prezzo_con_iva = $prezzo_senza_iva + $iva;
    ?>

    <h2>Dati Cliente</h2>
    <p>Nome: <?php echo $nome; ?></p>
    <p>Cognome: <?php echo $cognome; ?></p>
    <p>Ragione Sociale: <?php echo $ragione_sociale; ?></p>
    <p>Indirizzo: <?php echo $indirizzo; ?></p>
    <p>Partita IVA: <?php echo $piva; ?></p>
    <p>Telefono: <?php echo $tel; ?></p>

    <h2>Dati Prodotto Acquistato</h2>
    <p>Descrizione: <?php echo $descrizione; ?></p>
    <p>Codice: <?php echo $codice; ?></p>
    <p>Giacenza: <?php echo $giacenza; ?></p>
    <p>Prezzo Unitario: <?php echo $prezzo_unitario; ?></p>
    <p>Percentuale IVA: <?php echo $percentuale_iva; ?>%</p>
    <p>Quantità Acquistata: <?php echo $quantita; ?></p>
    <p>Sconto: <?php echo $sconto; ?>%</p>

    <h2>Calcolo del Prezzo</h2>
    <p>Prezzo senza IVA: <?php echo $prezzo_senza_iva; ?></p>
    <p>IVA: <?php echo $iva; ?></p>
    <p>Prezzo con IVA: <?php echo $prezzo_con_iva; ?></p>

    <?php
    } else {
        echo "Nessun dato inviato.";
    }
    ?>

    <br>
    <a href="./esercizio_2.html">Torna al modulo di inserimento</a>
</body>
</html>
