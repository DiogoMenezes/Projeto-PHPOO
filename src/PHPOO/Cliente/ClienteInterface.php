<?php
namespace PHPOO\Cliente;

  interface ClienteInterface
  {
      public function getGrauImportancia();
      public function setGrauImportancia($grau);
      public function getEnderecoCobranca();
      public function setEnderecoCobranca($endereco);
  }
