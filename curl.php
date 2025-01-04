<?php 

/* Inicia um novo recurso cURL */
$curl = curl_init();

/* HEADERS */
$headers = [
    'Authorization: Bearer 12121151515151',
    'Content-type: application/json'
];


/* POST */
$post = [
    'nome' => "Gabriel Pires",
    'canal' => "HEDDER"
];


/* JSON */
$json = json_encode($post);

/* Define as configurações */
curl_setopt_array($curl, [
    CURLOPT_URL => "http://localhost:5000/api.php",
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_POSTFIELDS => $json
]);


/* Executa o cURL */
$responde = curl_exec($curl);

/* Fecha a Requisição */
curl_close($curl);


/* Imprime a requisição */
$array = json_decode($responde, true);


/* response em array */
print_r($array);