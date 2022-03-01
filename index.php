<!-- Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione 
di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, 
con l’unica aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione
 (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->
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
$augmentedEffectsArray = ['Macchina del fumo', 'acqua', 'poltrone vibranti'];

$roomsArray = [
    new Room (1, 201, '8K'),
    new Room (2, 201, '8K'),
    new Room (3, 198, '4K'),
    new Room (4, 105, '4K'),
    new Room4d ($augmentedEffectsArray, 5, 204, '8K')
];
var_dump($roomsArray);
// // array relativo ai film, il construct si aspetta titolo, regista, durata e attori
$filmsArray = [
    new Film ('Titolo film', 'Guglielmo de Cevoli', 137, 'mario'),
    new Film ('Titolo film', 'Quenteen Tarantulino', 121, 'mario'),
    new Film ('Titolo film', 'Silvester Bighorse', 117, 'mario'),
    new Film ('Titolo film', 'Mariano Lombardo', 133, 'mario'),
];
// array relativo agli spettacoli, il construct si aspetta un titolo, una data, un orario e un id relativo alla sala
$showsArray = [
    new Show ('ciolla', '2022-1-3', '18:40', 'dura'),
    new Show ($filmsArray[0]->getFilmTitle(), '2022-1-3', '21:00', $roomsArray[1]->roomID),
    new Show ($filmsArray[2]->getFilmTitle(), '2022-1-3', '19:40', $roomsArray[2]->roomID),
    new Show ($filmsArray[3]->getFilmTitle(), '2022-3-3', '18:40', $roomsArray[1]->roomID),
];
var_dump($showsArray);


//array relativo agli attori, il construct si aspetta nome e cognome, anno di nascita
$actors = [
    new Actor ('Giulio', 'Amato', 1984),
    new Actor ('Jude Rules', 'Priscilla McFriend', 1983),
    new Actor ('Jules Loved', 'Martin Mister', 2002),
    new Actor ('Leonard from Capri', 'Bojack Horseman', 1998)
];
 


