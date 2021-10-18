<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this-> validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): Cpf
    {
        return $this->cpf;
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome deve conter pelo menos 5 caractéres.";
            exit();
        }
    }

    private function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }
}
