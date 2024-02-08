<?php

  class Conta{
     public string $nome;

     public int $numAgencia;

     public string $numconta;

     public float $saldo;
      

     // construtor da classe,
     // é o 1 a ser execultado
     public function __contruction(string $nome, int $numAgencia, string $numconta, float $saldo);
      $this->nome = $nome;
      $this->numAgencia = $numAgencia;
      $this->numconta = $numconta;
      $this->saldo = $saldo; 

     public function exibirDados() : string{
        return "Nome:{$this->nome}<br>
        N Agencia: {$this->numaAgencia}<br>
        N Conta:{$this->numconta}<br>
        Saldo:{$this->saldo}<br>
        ";
     }
  }