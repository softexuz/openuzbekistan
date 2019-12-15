<?php
/**
 * Created by Radon
 * Date: 12/15/2019
 * Time: 12:32 PM
 */

$url ='http://data.gov.uz/ru/api/v1/json/dataset/9710/version/22495?access_key=d577aa4f53c820c462eccf47c2d737e2';
$array = array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$data = file_get_contents($url, false, stream_context_create($array));


echo $data;

?>