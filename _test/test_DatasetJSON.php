<?php

//require '../class/DatasetJSON.php';
require '../__autoload.php';


$dts = new DatasetJSON();
$dts->setDataset('../dataset/video.json');
$res = $dts->getDataset();

print_r(
    $res[0]->titolo
);
