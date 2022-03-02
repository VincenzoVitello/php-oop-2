<!-- Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione 
di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, 
con l’unica aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione
 (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione).
1) Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.
2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.
4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo. -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//importo le classi all'interno del file principale Index.php
require_once __DIR__."/classes/Room.php";
require_once __DIR__."/classes/Room4d.php";
require_once __DIR__."/classes/Film.php";
require_once __DIR__."/classes/Show.php";
require_once __DIR__."/classes/Actor.php";

// Adesso creo gli array che conterranno gli oggetti con le istanze delle svariate classi

//il primo array sarà quello contenente gli oggetti relativi alle sale, il construct si aspetta un id, durata e schermo:
$augmentedEffectsArray = ["Macchina del fumo", "getti d'acqua", 'poltrone vibranti'];

$roomsArray = [
    new Room (1, 201, '16x22m', '8K resolution'),
    new Room (2, 201, '16x22m', '8K resolution'),
    new Room (3, 198, '16x22m', '4K resolution'),
    new Room (4, 73, '12x18m', '4K resolution'),
];
$room4D = new Room4d ($augmentedEffectsArray, 5, 242, '22x29m','8K');


// // array relativo ai film, il construct si aspetta titolo, regista, durata e attori
$filmsArray = [
    new Film ('Tutti pazzi per la gnugna', 'Guglielmo de Cevoli', 137, '{$actorsArray[0]->name}{$actorsArray[0]->surname}'),
    new Film ('Titolo film', 'Quenteen Tarantulino', 121, '{$actorsArray[1]->name}{$actorsArray[0]->surname}'),
    new Film ('Titolo film', 'Silvester Bighorse', 117, '{$actorsArray[2]->name}{$actorsArray[0]->surname}'),
    new Film ('Titolo film', 'Mariano Lombardo', 133, '{$actorsArray[3]->name}{$actorsArray[0]->surname}')
];

// array relativo agli spettacoli, il construct si aspetta un titolo, una data, un orario e un id relativo alla sala
$showsArray = [
    new Show ($filmsArray[0]->getFilmTitle(), '2022-02-01', '21:00', $roomsArray[1]->roomID),
    new Show ($filmsArray[0]->getFilmTitle(), '2022-02-03', '19:40', $roomsArray[2]->roomID),
    new Show ($filmsArray[0]->getFilmTitle(), '2022-02-03', '18:40', $roomsArray[1]->roomID),
    new Show ($filmsArray[0]->getFilmTitle(), '2022-02-03', '21:00', $roomsArray[3]->roomID),
    new Show ($filmsArray[3]->getFilmTitle(), '2022-02-04', '22:40', $room4D->roomID),
    new Show ($filmsArray[2]->getFilmTitle(), '2022-02-04', '22:40', $roomsArray[1]->roomID),
];

//array relativo agli attori, il construct si aspetta nome e cognome, anno di nascita
$actorsArray = [
    new Actor ('Giulio', 'Amato', 1984),
    new Actor ('Jude Rules', 'Priscilla McFriend', 1983),
    new Actor ('Jules Loved', 'Martin Mister', 2002),
    new Actor ('Leonard from Capri', 'Bojack Horseman', 1998)
];
?> 
<!-- Chiusura tag PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Esperia</title>
</head>
<body>
    <div class="milestone">
        <h1>Milestone 1:</h1>
            <ul>
                <?php //tramite l'utilizzo di un ciclo foreach, stampo in pagina le informazioni relative a ogni sala
                    foreach($roomsArray as $room){
                        echo //stampo sale NON in 4D
                        '<li>Sala numero '.$room->roomID.':
                            <ul>
                                <li>Posti a sedere: '.$room->getRoomSeats().' </li>
                                <li>Dimensione schermo: '.$room->getRoomScreen().' </li>
                                <li>Risoluzione schermo: '.$room->getRoomScreenResolution().' </li>
                            </ul>
                        </li>';
                    }
                    echo //stampo sala in 4D
                    '<h3>Sala immersiva 4D</h3>
                        <ul>
                            <li>Posti a sedere: '.$room4D->getRoomSeats().' </li>
                            <li>Dimensione schermo: '.$room4D->getRoomScreen().' </li>
                            <li>Risoluzione schermo: '.$room4D->getRoomScreenResolution().' </li>
                            <li>Caratteristiche immersive: '.$augmentedEffectsArray[0].', '.$augmentedEffectsArray[1].', '.$augmentedEffectsArray[2].' </li>
                        </ul>
                    ';
                ?>
            </ul>
    </div>
<!-- Fine Milestone 1    -->

<!-- Inizio Milestone 2 -->
    <div class="milestone">
        <?php
            $Seats = 0;
            for($i = 0; $i < sizeof($roomsArray); $i++){
                $Seats += $roomsArray[$i] -> getRoomSeats();
            }
        ?>
        <h1>Milestone 2:</h1>
        <h3>Totale posti a sedere: 
            <?php 
                echo $Seats + $room4D->getRoomSeats();
            ?>
        </h3>
    </div>
<!-- Fine Milestone 2    -->

<!-- Inizio Milestone 3 -->
<div class="milestone">
        <?php
            function getNumberOfShows($showsArray, $filmsArray){
               foreach($showsArray as $show){
                   if($show->film == $filmsArray[0]->getFilmTitle() && $show->date == '2022-02-03'){
                       echo '<li> Proiezione delle ore: '.$show->hour.'</li>';
                   }
               }
            } //chiusura getNumberOfShows()
            
        ?>
        <h1>Milestone 3:</h1>
        <p>Proiezioni di <strong> Tutti pazzi per la gnugna </strong> di Giovedì 3 Febbraio 2022:
            <?php 
               getNumberOfShows($showsArray, $filmsArray);
            ?>
        </p>
    </div>
</body>
</html>