<!-- Oggi pomeriggio provate ad immaginare quali possano essere le classi necessarie per la gestione 
di un cinema multisala.
Dovrete essere in grado di gestire le sale, gli spettacoli e le specifiche del film con relativi attori.
Attenzione, esistono due tipi di sala, quella normale e quella con poltrone immersive, 
con l’unica aggiunta di dover tener traccia degli effetti speciali utilizzabili durante la proiezione
 (es: una sala potrebbe avere vibrazione, fumo, acqua, un’altra solo vibrazione). -->
<?php
//importo le classi all'interno del file principale Index.php
require_once __DIR__."./classes/Room.php"
require_once __DIR__."./classes/Room4d.php"
require_once __DIR__."./classes/Film.php"
require_once __DIR__."./classes/Show.php"

// Adesso creo gli array che conterranno gli oggetti con le istanze delle svariate classi

//il primo array sarà quello contenente gli oggetti relativi alle sale:
$roomsArray = [
    new Room ('Room ID:' 1, 201, '8K');
    new Room ('Room ID:' 2, 201, '8K');
    new Room ('Room ID:' 3, 198, '4K');
    new Room ('Room ID:' 4, 105, '4K');
];

//array relativo agli spettacoli

$showsArray = [
    new Show ('Titolo:' $filmsArray[0]->title, '2022-1-3', '18:40', $roomsArray[0]->roomID);
    new Show ('Titolo:' $filmsArray[1]->title, '2022-1-3', '21:00', $roomsArray[1]->roomID));
    new Show ('Titolo:' $filmsArray[2]->title, '2022-1-3', '19:40', $roomsArray[2]->roomID));
    new Show ('Titolo:' $filmsArray[3]->title, '2022-3-3', '18:40', $roomsArray[1]->roomID));

];

//array relativo ai film

$filmsArray = [
    new Film ('Titolo film', 'Guglielmo de Cevoli', 137, $actors[0]);
    new Film ('Titolo film', 'Quenteen Tarantulino', 121, $actors[1]);
    new Film ('Titolo film', 'Silvester Bighorse', 117, $actors[2]);
    new Film ('Titolo film', 'Mariano Lombardo', 133, $actors[3]);
]

//array relativo agli attori 
$actors = [
    new Actor ('Giulio Amato', 'Martina Messina');
    new Actor ('Jude Rules', 'Priscilla McFriend');
    new Actor ('Jules Loved', 'Martin Mister');
    new Actor ('Leonard from Capri', 'Bojack Horseman');
]

