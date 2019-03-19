<?php

$colori = array("yellow", "red", "green", "rebeccapurple"); //base dati
$colore = filter_input(INPUT_GET, 'colore'); // leggo i dati inviati via get

// ricerca / filtro dei dati
if (in_array($colore, $colori)){
    echo "colore trovato: <b>$colore</b>";
}else{
    echo "colore <b>non trovato:</b> $colore";
}
 