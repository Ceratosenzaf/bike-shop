<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acquisto di una bicicletta</title>

    <!-- collego tutti i file di styling della pagina -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bikes.css">
</head>

<body>
    <!-- il titolo è allineato sopra all'insegna del negozio dal file css -->
    <div id="topBar">
        <div id="title">
            <h1>Cerato Davide Bikes</h1>
            <h5>Acquisto di una bicicletta</h2>
        </div>
    </div>

    <h4>Ricapitolo Ordine</h4>
    <hr><br>

    <?php

    // verifico il codice fiscale
    $cdCodFisc = $_POST['cdcodFisc'];
    $cdSedicesimoCarattere = substr($cdCodFisc, 15, 1);

    $car[0] = "A";
    $car[1] = "B";
    $car[2] = "C";
    $car[3] = "D";
    $car[4] = "E";
    $car[5] = "F";
    $car[6] = "G";
    $car[7] = "H";
    $car[8] = "I";
    $car[9] = "J";
    $car[10] = "K";
    $car[11] = "L";
    $car[12] = "M";
    $car[13] = "N";
    $car[14] = "O";
    $car[15] = "P";
    $car[16] = "Q";
    $car[17] = "R";
    $car[18] = "S";
    $car[19] = "T";
    $car[20] = "U";
    $car[21] = "V";
    $car[22] = "W";
    $car[23] = "X";
    $car[24] = "Y";
    $car[25] = "Z";
    $car[26] = "0";
    $car[27] = "1";
    $car[28] = "2";
    $car[29] = "3";
    $car[30] = "4";
    $car[31] = "5";
    $car[32] = "6";
    $car[33] = "7";
    $car[34] = "8";
    $car[35] = "9";
    $ndispari[0] = 1;
    $ndispari[1] = 0;
    $ndispari[2] = 5;
    $ndispari[3] = 7;
    $ndispari[4] = 9;
    $ndispari[5] = 13;
    $ndispari[6] = 15;
    $ndispari[7] = 17;
    $ndispari[8] = 19;
    $ndispari[9] = 21;
    $ndispari[10] = 2;
    $ndispari[11] = 4;
    $ndispari[12] = 18;
    $ndispari[13] = 20;
    $ndispari[14] = 11;
    $ndispari[15] = 3;
    $ndispari[16] = 6;
    $ndispari[17] = 8;
    $ndispari[18] = 12;
    $ndispari[19] = 14;
    $ndispari[20] = 16;
    $ndispari[21] = 10;
    $ndispari[22] = 22;
    $ndispari[23] = 25;
    $ndispari[24] = 24;
    $ndispari[25] = 23;
    $ndispari[26] = 1;
    $ndispari[27] = 0;
    $ndispari[28] = 5;
    $ndispari[29] = 7;
    $ndispari[30] = 9;
    $ndispari[31] = 13;
    $ndispari[32] = 15;
    $ndispari[33] = 17;
    $ndispari[34] = 19;
    $ndispari[35] = 21;
    $npari[0] = 0;
    $npari[1] = 1;
    $npari[2] = 2;
    $npari[3] = 3;
    $npari[4] = 4;
    $npari[5] = 5;
    $npari[6] = 6;
    $npari[7] = 7;
    $npari[8] = 8;
    $npari[9] = 9;
    $npari[10] = 10;
    $npari[11] = 11;
    $npari[12] = 12;
    $npari[13] = 13;
    $npari[14] = 14;
    $npari[15] = 15;
    $npari[16] = 16;
    $npari[17] = 17;
    $npari[18] = 18;
    $npari[19] = 19;
    $npari[20] = 20;
    $npari[21] = 21;
    $npari[22] = 22;
    $npari[23] = 23;
    $npari[24] = 24;
    $npari[25] = 25;
    $npari[26] = 0;
    $npari[27] = 1;
    $npari[28] = 2;
    $npari[29] = 3;
    $npari[30] = 4;
    $npari[31] = 5;
    $npari[32] = 6;
    $npari[33] = 7;
    $npari[34] = 8;
    $npari[35] = 9;
    $tot = 0;
    for ($i = 0; $i < 15; $i++) {
        $j = -1;
        $trovato = false;
        while ($trovato == false) {
            $j++;
            if ($cdCodFisc[$i] == $car[$j]) $trovato = true;
        }

        if ($i % 2 == 0) $tot = $tot + $ndispari[$j];
        else $tot = $tot + $npari[$j];
    }
    $r = $tot % 26;
    if ($cdCodFisc[15] != $car[$r]){
        print('<div class ="container">Il codice fiscale che ha inserito è errato, provi a ricontrollarlo<br><br>');
        print('<a href="ChiamantediAcquistoBicicletta.php" class="btn btn-secondary">Modifica l\'ordine</a></div>');
    }
    else {
        // codice fiscale corretto, eseguo il programma

        // creo una variabile per ogni input selezionato
        $cdCognome = $_POST['cdcognome'];
        $cdNome = $_POST['cdnome'];
        $cdCodFisc = $_POST['cdcodFisc'];
        $cdIndirizzo = $_POST['cdindirizzo'];
        $cdNumCiv = $_POST['cdnumCiv'];
        $cdComune = $_POST['cdcomune'];
        $cdTelefono = $_POST['cdtelefono'];
        $cdMail = $_POST['cdmail'];
        $cdTipoBici = $_POST['cdtipoBici'];
        $cdColore = $_POST['cdcolore'];
        $cdVersione = $_POST["cdversione"];

        // creo delle variabili, che tornano comode dopo nei calcoli
        $cdPrezzoBaseDonna = 89;
        $cdPrezzoBaseUomo = 84;
        $cdPrezzoBaseBambino = 48;

        // controllo la versione della bici selezionata
        switch ($cdVersione) {
                // modello base
            case 'cdbase': {
                    if ($cdTipoBici == 'cduomo') $cdimporto = $cdPrezzoBaseUomo;
                    else if ($cdTipoBici == 'cddonna') $cdimporto = $cdPrezzoBaseDonna;
                    else if ($cdTipoBici == 'cdbambino') $cdimporto = $cdPrezzoBaseBambino;

                    break;
                }

                // modello deluxe
            case 'cddeluxe': {
                    if ($cdTipoBici == 'cduomo') $cdimporto = floor($cdPrezzoBaseUomo * 132 / 100);
                    else if ($cdTipoBici == 'cddonna') $cdimporto = floor($cdPrezzoBaseDonna * 132 / 100);
                    else if ($cdTipoBici == 'cdbambino') $cdimporto = floor($cdPrezzoBaseBambino * 132 / 100);

                    break;
                }

                // modello excellent
            case 'cdexcellent': {
                    if ($cdTipoBici == 'cduomo') $cdimporto = floor($cdPrezzoBaseUomo * 158 / 100);
                    else if ($cdTipoBici == 'cddonna') $cdimporto = floor($cdPrezzoBaseDonna * 158 / 100);
                    else if ($cdTipoBici == 'cdbambino') $cdimporto = floor($cdPrezzoBaseBambino * 158 / 100);

                    break;
                }

                // modello royal
            case 'cdroyal': {
                    if ($cdTipoBici == 'cduomo') $cdimporto = floor($cdPrezzoBaseUomo * 195 / 100);
                    else if ($cdTipoBici == 'cddonna') $cdimporto = floor($cdPrezzoBaseDonna * 195 / 100);
                    else if ($cdTipoBici == 'cdbambino') $cdimporto = floor($cdPrezzoBaseBambino * 195 / 100);

                    break;
                }

                // modello galactic
            case 'cdgalactic': {
                    if ($cdTipoBici == 'cduomo') $cdimporto = $cdPrezzoBaseUomo * 3;
                    else if ($cdTipoBici == 'cddonna') $cdimporto = $cdPrezzoBaseDonna * 3;
                    else if ($cdTipoBici == 'cdbambino') $cdimporto = $cdPrezzoBaseBambino * 3;

                    break;
                }

                // default (errore)
            default:
                print('error');
                break;
        }

        //verifico tutti gli optional
        $cdimportoTOT = $cdimporto;
        $optional = '';
        if (isset($_POST["cdfanale"])) {
            $cdimportoTOT += $cdimporto * 4 / 100 > 4 ? $cdimporto * 4 / 100 : 4;
            $optional .= '<li>Fanale led</li>';
            $optional++;
        }
        if (isset($_POST["cdcontakm"])) {
            $cdimportoTOT += $cdimporto * 5 / 100 > 4 ? $cdimporto * 5 / 100 : 4;
            $optional .= '<li>Contachilometri</li>';
        }
        if (isset($_POST["cdcestino"])) {
            $cdimportoTOT += $cdimporto * 5 / 100 > 6 ? $cdimporto * 5 / 100 : 6;
            $optional .= '<li>Cestino anetriore</li>';
        }
        if (isset($_POST["cdportap"])) {
            $cdimportoTOT += $cdimporto * 5 / 100 > 7 ? $cdimporto * 5 / 100 : 7;
            $optional .= '<li>Portapacchi poesteriore</li>';
        }
        if (isset($_POST["cdgps"])) {
            $cdimportoTOT += $cdimporto * 37 / 100 > 93 ? $cdimporto * 37 / 100 : 93;
            $optional .= '<li>Ciclocomputer con GPS</li>';
        }
        if (isset($_POST["cdfascia"])) {
            $cdimportoTOT += $cdimporto * 19 / 100 > 38 ? $cdimporto * 19 / 100 : 38;
            $optional .= '<li>Fascia cardio</li>';
        }
        if (isset($_POST["cdportab"])) {
            $cdimportoTOT += 3;
            $optional .= '<li>Portaborraccia</li>';
        }
        if (isset($_POST["cdboarraccia"])) {
            $cdimportoTOT += 9;
            $optional .= '<li>Borraccia in Alluminio</li>';
        }
        if (isset($_POST["cdcambio"])) {
            $cdimportoTOT += $cdimporto * 21 / 100 > 27 ? $cdimporto * 21 / 100 : 27;
            $optional .= '<li>Cambio a 18 rapporti</li>';
        }
        if (isset($_POST["cdfrenate"])) {
            $cdimportoTOT += 42;
            $optional .= '<li>Sistema frenate a recupero energetico</li>';
            $optional++;
        }
        if (isset($_POST["cdcasco"])) {
            $cdimportoTOT += 29;
            $optional .= '<li>Caschetto di protezione</li>';
        }
        if (isset($_POST["cdocchiali"])) {
            $cdimportoTOT += 23;
            $optional .= '<li>Occhiali da ciclista</li>';
        }
        if (isset($_POST["cdassicurazione"])) {
            $cdimportoTOT += $cdimporto * 17 / 100;
            $optional .= '<li>Assicurazione furto o smarrimento annuo</li>';
        }
        if (isset($_POST["cdantifurto"])) {
            $cdTipoAntifurto = $_POST['cdantifurtoinput'];
            if ($cdTipoAntifurto == 'cd0') {
                $optional .= '<li>Nessun antifurto selezionato</li>';
            } else if ($cdTipoAntifurto == 'cdacciaio') {
                $cdimportoTOT += 6;
                $optional .= '<li>Lucchetto in acciaio</li>';
            } else if ($cdTipoAntifurto == 'cdcombinazione') {
                $cdimportoTOT += 12;
                $optional .= '<li>Lucchetto con serratura a combinazione</li>';
            } else if ($cdTipoAntifurto == 'cdcatena') {
                $cdimportoTOT += 15;
                $optional .= '<li>Lucchetto a catena</li>';
            } else if ($cdTipoAntifurto == 'cdu') {
                $cdimportoTOT += 23;
                $optional .= '<li>Antifurto a U</li>';
            } else if ($cdTipoAntifurto == 'cdtelecomando') {
                $cdimportoTOT += 31;
                $optional .= '<li>Antifurto con telecomando e allarme</li>';
            } else if ($cdTipoAntifurto == 'cdgps') {
                $cdimportoTOT += 76;
                $optional .= '<liAntifurto con allarme e GPS tracker></li>';
            }
        }

        // stampa ad interfaccia utente delle informazioni generali dell'ordine
        print('<div class ="container">');

        print('Gentile signore ' . $cdNome . ' ' . $cdCognome . ', <br><br>');
        print('Il suo ordine per una bicicletta da ' . str_replace('cd', '', $cdTipoBici) . ', colore ' . str_replace('cd', '', $cdColore) . ', modello ' . str_replace('cd', '', $cdVersione) . ' è stato ricevuto con successo. <br>');

        // se sono stati scelti optional, li elenco
        if ($optional != '') {
            print('La bici verrà attrezzata con gli optional da lei scelti: ');
            print('<ul>' . $optional . '</ul>');
        }

        // visualizzo totale ordine
        print('<p>Il totale dell\' ordine da lei effettuato è <b> ' . $cdimportoTOT . '€</b>.</p>');

        // visualizzo indirizzo del cliente
        print('La bicicletta da lei selezionata');
        if ($optional != '') print(', comprensiva degli optional da lei selezionati,');
        print(' verrà spedita all\'indirizzo <b> ' . $cdIndirizzo . ' </b>N°<b> ' . $cdNumCiv . '</b>,<b> ' . str_replace('cd', '', $cdComune) . '</b>.<br><br>');

        // visualizzo metodi di contatto
        print('Al successo del pagamento le verrà mandata una conferma dell\'ordine: <br> <input type="checkbox" name="contatto" value="mail" checked > via mail al suo indirizzo ' . $cdMail . '<br> <input type="checkbox" name="contatto" value="cell"> via messaggio al suo numero ' . $cdTelefono);

        // visualizzo pulsanti di azione
        print('<br><br><br><a href="ChiamantediAcquistoBicicletta.php" class="btn btn-secondary">Modifica l\'ordine</a> <a href="#" class="btn btn-success" title="non ho programmato una pagina di checkout :)">Prosegui al Checkout</a>');
    }

    ?>
    <br><br>

</body>

</html>