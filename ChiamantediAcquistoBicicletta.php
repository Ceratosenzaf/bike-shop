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

    <h4>Compila qua sotto per ricevere la tua bicicletta</h4>
    <hr><br>

    <form action="AcquistoBiciclettaChiamato.php" method="post" class="container">
        <table id="user">
            <tr>
                <td class="label">Nome </td>
                <td>
                    <input type="text" name="cdnome" placeholder="es. Mario" required>
                </td>
                <td class="label">Cognome </td>
                <td>
                    <input type="text" name="cdcognome" placeholder="es. Rossi" required>
                </td>
                <td class="label">Codice Fiscale </td>
                <td>
                    <input type="text" name="cdcodFisc" placeholder="es. RSSMRA01A01F205G" pattern="[A-Z]{6}[0-9]{2}[A-Z]{1}[0-9]{2}[A-Z]{1}[0-9]{3}[A-Z]{1}" required>
                </td>
            </tr>
            <tr>
                <td class="label">Indirizzo </td>
                <td>
                    <input type="text" name="cdindirizzo" placeholder="es. Via Milano" required>
                </td>
                <td class="label">N° Civico </td>
                <td>
                    <input type="number" name="cdnumCiv" placeholder="es. 65" max="280" min="1" required>
                </td>
                <td class="label">Comune </td>
                <td>
                    <select name="cdcomune" required>
                        <option value=""></option>
                        <option value="cdMilano">Milano</option>
                        <option value="cdMalo">Malo</option>
                        <option value="cdVicenza">Vicenza</option>
                        <option value="cdRoma">Roma</option>
                        <option value="cdTorino">Torino</option>
                        <option value="cdNapoli">Napoli</option>
                        <option value="cdPalermo">Palermo</option>
                        <option value="cdFirenze">Firenze</option>
                        <option value="cdTrieste">Trieste</option>
                        <option value="cdSchio">Schio</option>
                        <option value="cdVenezia">Venezia</option>
                        <option value="cdBologna">Bologna</option>
                        <option value="cdBari">Bari</option>
                        <option value="cdGenova">Genova</option>
                        <option value="cdIsolaVicentina">Isola Vicentina</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">Telefono </td>
                <td>
                    <input type="tel" name="cdtelefono" placeholder="es. 3333783838" pattern="[0-9]{10}" required>
                </td>
                <td class="label">Email </td>
                <td>
                    <input type="email" name="cdmail" placeholder="es. mariorossi@gmail.com" required>
                </td>
            </tr>

        </table>
        <hr>
        <table id="bike">
            <tr>
                <td class="label" >
                    Tipo bicicletta</td>
                <td>
                    <select name="cdtipoBici">
                        <option value="cduomo">uomo</option>
                        <option value="cddonna">donna</option>
                        <option value="cdbambino">bambino/a</option>
                    </select>
                </td>
            
                <td class="label" >
                    Colore</td>
                <td>
                    <Select name="cdcolore">
                        <option value="cdrosso">rosso</option>
                        <option value="cdverde">verde</option>
                        <option value="cdblu">blu</option>
                        <option value="cdbianco">bianco</option>
                        <option value="cdnero">nero</option>
                        <option value="cdarancione">arancione</option>
                        <option value="cdgiallo">giallo</option>
                        <option value="cdviola">viola</option>
                        <option value="cdgrigio">grigio</option>
                        <option value="cdmarrone">marrone</option>
                    </Select>
                </td>
            
                <td class="label" >
                    Versione</td>
                <td>
                    <Select name="cdversione">
                        <option value="cdbase">base</option>
                        <option value="cddeluxe">deluxe</option>
                        <option value="cdexcellent">excellent</option>
                        <option value="cdroyal">royal</option>
                        <option value="cdgalactic">galactic</option>
                    </Select>
                </td>
            </tr>
            <tr>
                <td class="label" colspan="4">
                    Optional <br>
                    <input type="checkbox" name="cdfanale">Fanale led<br>
                    <input type="checkbox" name="cdcontakm">Contachilometri <br>
                    <input type="checkbox" name="cdcestino">Cestino anteriore<br>
                    <input type="checkbox" name="cdportap">Portapacchi posteriore<br>
                    <input type="checkbox" name="cdgps">Ciclocomputer con GPS<br>
                    <input type="checkbox" name="cdfascia">Fascia cardio<br>
                    <input type="checkbox" name="cdportab">Portaborraccia<br>
                    <input type="checkbox" name="cdborraccia">Borraccia in alluminio<br>
                    <input type="checkbox" name="cdcambio">Cambio a 18 rapporti<br>
                    <input type="checkbox" name="cdfrenate">Sistema frenate a recupero energetico<br>
                    <input type="checkbox" name="cdcasco">Caschetto di protezione<br>
                    <input type="checkbox" name="cdocchiali">Occhiali da ciclista<br>
                    <input type="checkbox" name="cdassicurazione">Assicurazione furto o smarrimento annuo<br>
                    
                    <input type="checkbox" name="cdantifurto">Antifurto
                    <select name="cdantifurtoinput" id="antifurto">
                        <option value="cd0"> </option>
                        <option value="cdacciaio">Lucchetto in acciaio</option>
                        <option value="cdcombinazione">Lucchetto con serratura a combinazione</option>
                        <option value="cdcatena">Lucchetto a catena</option>
                        <option value="cdu">Antifurto a U</option>
                        <option value="cdtelecomando">Antifurto con telecomando e allarme</option>
                        <option value="cdgps">Antifurto con allarme e GPS tracker</option>
                    </select>

                </td>
            </tr>

        </table>

        <br><br>

        <input class="btn btn-primary" type="submit" value="Procedi con l'acquisto">

        <br><br>

    </form>

</body>

</html>