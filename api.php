<?php 


// MÉTODO HTTP
echo "Método: ";
echo $_SERVER['REQUEST_METHOD'];


// HEADERS
echo "\n\nHeaders:\n";
$headers = getallheaders();
print_r($headers);


// POST
echo "\n\nPOST:\n";
$input = file_get_contents('php://input');
$array = json_decode($input, true);
$_POST = !empty($array) ? $array : $_POST;
print_r($_POST);


// RESPONSE
$array = [
    'codigo' => 200,
    'sucesso' => true
];


//Converte o array para json
echo json_encode($array);