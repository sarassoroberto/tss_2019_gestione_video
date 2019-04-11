<?php

require './__autoload.php';
error_reporting(E_ALL);
//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

try {
    // si prende il parametro ricerca passato via get
    $ricerca = filter_input(INPUT_GET, 'ricerca');
    if (is_null($ricerca)) {
        echo "manca la query string devi aggiunger ?ricerca=xxxx al tuo url (guarda sopra)";
        exit();
    }
    $data = new DatasetJSON();
    $data->setDataset('./dataset/video.json');

    //$tutti =  $data->getDataset();

    // step 1
    $criteriaTitolo = new CriteriaTitolo($ricerca);
    $res = $criteriaTitolo->meetCriteria($data->getDataset());

    // rduco i risultati
    $res = array_slice($res, 0, 10);
    // step 2
    $criteriaURL =  new CriteriaUrlExists();
    $res = $criteriaURL->meetCriteria($res);


    echo json_encode($res);
} catch (Exception $errore) {

    echo $errore->getMessage();
}
