<?php

$url='https://api.coindesk.com/v1/bpi/currentprice.json';
$response=file_get_contents($url);  //simpan isi variabel $url

if($response === false){
    die('datanya nothing'); //die memutuskan koneksi 
}

$data = json_decode($response, true);
print_r($data);
?>