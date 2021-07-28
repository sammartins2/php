<?php

require_once ('funcoes.php');

$contasCorrentes = [
    '123.456.789-10' => [
    'titular' => "Sam", 
    'saldo' => 1000
    ],
    '987.654.321-09' => [
    'titular' => "Mãe",
    'saldo' => 2000
    ],
    '047.852.360-91' => [
    'titular' => "Parley",
    'saldo' => 10000
    ]
]; 

$contasCorrentes['987.654.321-09'] = sacar(
    $contasCorrentes['987.654.321-09'], 500
);

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'], 200
);

$contasCorrentes['047.852.360-91'] = depositar(
    $contasCorrentes['047.852.360-91'], 900
);

#unset ($contasCorrentes['047.852.360-91']);

maiscula($contasCorrentes['123.456.789-10']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>
    <dd>
        Saldo: <?= $conta['saldo']; ?>
    </dd>
        <?php } ?>
    </dl>
</body>
</html>
