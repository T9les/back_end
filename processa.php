<?php

$nomeVar =  $_GET["nome"];
$emailVar =  $_GET["email"];
$idadeVar =  $_GET["idade"];

$meuUsuario = [
    "id" => 1,
    "nomeUser" => $nomeVar,
    "emailUser" => $emailVar,
    "idadeUser" => $idadeVar,
    "origem" => "aula de 20-03"
];


// echo "<br><br><br>";
// var_dump($meuUsuario);
// echo '<pre>';
// print_r($meuUsuario);
// echo '</pre>';

$jsonDoArquivo = [];
if (file_exists("cadastroDeUser.json") == true) {
    $dadosDoArquivo = file_get_contents("cadastroDeUser.json");
    $jsonDoArquivo = json_decode(json: $dadosDoArquivo, associative: true);

    $tamanhoDoArray = sizeof($jsonDoArquivo);
    $ultimoIndexDoArray = $tamanhoDoArray - 1;
    $ultimoUsuarioDoArray = $jsonDoArquivo[$ultimoIndexDoArray];
    $idDoUltimoElementoDoArray = $ultimoUsuarioDoArray["id"];
    $proximoId = $idDoUltimoElementoDoArray + 1;
    $meuUsuario["id"] = $proximoId;


    // $novoId = $jsonDoArquivo[sizeof($jsonDoArquivo) - 1]["id"] + 1;
    // $meuUsuario["id"] = $novoId;
}

$jsonDoArquivo[] = $meuUsuario;

file_put_contents(
    filename: "cadastroDeUser.json",
    data: json_encode(value: $jsonDoArquivo, flags: JSON_PRETTY_PRINT)
);

// sleep(2);

header('Location: lista.php');
exit();



// echo "<br><br><br>";
// var_dump(array_keys($_GET));

// echo "<br><br><br>";
// $meuArrayDechaves = array_keys($_GET);
// echo "{$meuArrayDechaves[1]}";

// echo "<br><br><br>";
// var_dump($_GET["email"]);
