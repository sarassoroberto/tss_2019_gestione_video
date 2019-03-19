<?php

require './__autoload.php';
error_reporting(E_ALL);
//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);


try {
    $ricerca = filter_input(INPUT_GET, 'ricerca');
    if (is_null($ricerca)) {
        echo "manca la query string devi aggiunger ?ricerca=xxxx al tuo url (guarda sopra)";
        exit();
    }
    $data = new DatasetJSON();
    $data->setDataset('./dataset/video.json');

    $rc = new CriteriaTitolo($ricerca);
    $res = $rc->meetCriteria($data->getDataset());

    echo json_encode($res);
} catch (Exception $errore) {

    echo $errore->getMessage();
}
