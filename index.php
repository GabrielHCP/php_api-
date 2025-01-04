<?php 

$url =  "https://swapi.py4e.com/api/people/?page=2";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
$resultado = json_decode(curl_exec($curl));

//var_dump($resultado);

foreach($resultado->results as $ator) {
    echo "nome: " . $ator->name . "<br>";
    echo "altura: " . $ator->height . "<br>";
    
    foreach($ator->films as $filme) {
        echo "nome: " . $filme . "<br>";
    }


    echo "<hr>";
}