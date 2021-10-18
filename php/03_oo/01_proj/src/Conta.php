<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {   
        $this -> titular = $titular;
        $this -> saldo = 0;

        self::$numeroDeContas++;

    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) : void
    {
        if ($valorASacar > $this-> saldo || $valorASacar <= 0) {
            echo "Operação inválida." . PHP_EOL;
            return;
        }
        
        $this -> saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar <= 0) {
            echo "Operação inválida." . PHP_EOL;
            return;
        }
 
        $this-> saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this -> saldo || $valorATransferir <= 0) {
            echo "Transferencia Negada." . PHP_EOL;
            return;
        } 
        
        $this -> sacar($valorATransferir);
        $contaDestino -> depositar($valorATransferir);
    }

    public function recuperarSaldo() : float
    {
        return $this -> saldo;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperaNomeTitular() : string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular() : Cpf
    {
        return $this->titular->recuperaCpf();
    }

}