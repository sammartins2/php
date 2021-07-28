<?php

class Conta 
{
    private  $cpftitular;
    private  $nometitular;
    private  $saldo = 0;

    public function sacar (float $valorASacar): void
    {
        if ($valorASacar > $this -> saldo){
            return;
        }
        $this -> saldo -= $valorASacar;   
    }

    public function depositar (float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            return;
        }
        $this->saldo += $valorADepositar; 
    }

    public function transferir(float $valorATransferir, conta $contaDestino): void #quando não quiser retorno se usa o void
    {
        if ($valorATransferir > $this -> saldo){
            return;
        } 
        $this -> sacar ($valorATransferir);
        $contaDestino -> depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this -> saldo;
    }

    public function defineCpfTitular(string $cpf)
    {
        $this -> cpftitular = $cpf;
    }

    public function defineNomeTitular(string $nome): void
    {
        $this -> nometitular = $nome;
    }

    public function recuperarCpfTitular (): string
    {
        return $this -> cpftitular;
    }

    public function recuperarNomeTitular (): string
    {
        return $this -> nometitular;
    }
}