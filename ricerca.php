<?php

require './__autoload.php';
//error_reporting(0);
//print_r($_GET['ricerca']);

try {
    $ricerca = filter_input(INPUT_GET, 'ricerca');

    $data = new DatasetJSON();
    $data->setDataset('./dataset/video.json');


    // $titoloFilter = new FilterTitolo();
    // $videos = $data->getDataset();
    // $titoloFilter->test((array)$videos); //Array
    // ^$ricerca
    $res = array();
    foreach ($data->getDataset() as $video) {

        if (stripos($video->titolo, $ricerca) !== false) {
            $res[] = $video;
        };
    }

    echo json_encode($res);
} catch (Exception $errore) {

    echo $errore->getMessage();
}
