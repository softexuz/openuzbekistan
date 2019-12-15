<?php
/**
 * Created by Radon
 * Date: 12/14/2019
 * Time: 8:02 PM
 */

$url ='https://data.gov.uz/uz/api/v1/json/dataset/8627/version/22509?access_key=d577aa4f53c820c462eccf47c2d737e2';
$array = array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$data = file_get_contents($url, false, stream_context_create($array));
echo $data;

?>