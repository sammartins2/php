<?php

function exibeMensagem(string $mensagem) {
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valoADepositar): array 
{
    if ($valoADepositar > 0) {
        $conta['saldo'] += $valoADepositar;
    } else {
        exibeMensagem("Deposito precisam ser positivos");
    }
    return $conta;
}

function sacar(array $conta, float $valorSaque):array
{
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem("voce não tem saldo suficiente");
    } else { 
        $conta['saldo'] -= $valorSaque;
    }

    return $conta;
}

function maiscula (array &$conta)
{
    $conta['titular'] = strtoupper($conta ['titular']);
}

function exibeConta (array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo  "<li>Titular: $titular. Saldo: $saldo</li>";
}    