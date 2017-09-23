<?php
namespace PHPOO\Cliente\Types;

use PHPOO\Cliente\ClienteAbstract;

class ClientePF extends ClienteAbstract
{
    public function __construct($id, $nome, $cpf, $endereco, $grau = null)
    {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->endereco = $endereco;
            $this->id = $id;
            $this->grau = $grau;
            $this->tipo = 1;
    }
}
