<?php
class ContaCorrente extends Conta{
    public float $limitedeCredito;

    public function __contruction(string $nome, int $numAgencia,
     string $numconta, float $saldo, float $limitedeCredito){

        parent :: __contruct($nome,$numAgencia,$numconta,$saldo);
        $this->limitedeCredito = $limitedeCredito;
     }

     public function depositar (float $valor):void{
       if($valor > 0){
         $this->saldo += $valor;
       }
     }

     public function sacar (float $valor): string{
        if ($valor > 0){
          $saldodisponivel = $this->saldo + $this->limitedeCredito;
          if ($valor <= $saldodisponivel ) {
            $this->saldo -= $valor;
              return "Saque de R$ $valor realizado com sucesso.
                      saldo restante: R$ {$this->saldo}";
          } else {
            return "saldo insuficiente para saque.";
          }
        } else{
            return "valor de saque inválido.";
            
        }
     }
}