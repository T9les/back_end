<?php

// echo "chegou na lista";

$dadosDoArquivo = file_get_contents(filename: "cadastroDeUser.json");

$arrayUser = json_decode(json: $dadosDoArquivo, associative: true);


// echo '<pre>';
// print_r($arrayUser);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dados</title>
</head>

<body>
    <h1> TESTANDO O H1 </h1>

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Idade</th>
        </thead>
        <tbody>
            <?php foreach ($arrayUser as $usuario) : ?>

                <tr>
                    <td> <?php echo "{$usuario["id"]}"  ?> </td>
                    <td> <?php echo "{$usuario["nomeUser"]}"  ?> </td>
                    <td> <?php echo "{$usuario["emailUser"]}"  ?> </td>
                    <td> <?php echo "{$usuario["idadeUser"]}"  ?> </td>

                </tr>
            <?php endforeach; ?>

        </tbody>


    </table>


</body>

</html>
