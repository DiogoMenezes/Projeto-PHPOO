<?php
namespace PHPOO\Cliente\Banco;

use PHPOO\Cliente\Types\ClientePF,
    PHPOO\Cliente\Types\ClientePJ;

class BancoClientes
 {
        public static $clientes = array();

    public function __construct()
     {
                self::$clientes = array(
                    new ClientePF(1,"Nilton Morais", "123.321.456-01", "Rua A, nº 354 - Centro, Ilhéus-BA"),
                    new ClientePJ(2,"Jéssica Abreu", "789.541.369-01", "Rua B, nº 147 - Coceição, Itabuna-BA"),
                    new ClientePF(3,"Maria do Carmo", "987.741.364-05", "Rua C, nº 451 - Mangabinha, Itabuna-BA"),
                    new ClientePJ(4,"João Pedro", "854.001.140-01", "Rua D, nº 09 - Centro, Contagem-MG"),
                    new ClientePF(5,"Manoel Cruz", "059.905.154-01", "Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA"),
                    new ClientePF(6,"Eva Alves", "212.413.001-01", "Rua Pará de Minas, nº 354 - Centro, Contagem-MG"),
                    new ClientePJ(7,"Joaquim Costa", "301.102.301-01", "Rua E, nº 256 - Centro, Camacan-BA"),
                    new ClientePF(8,"Eliomar Morais", "103.054.193-01", "Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA"),
                    new ClientePJ(9,"Carla Amaral", "123.789.257-79", "Rua F, nº 123 - Centro, Ilhéus-BA"),
                    new ClientePF(10,"Jeniffer Araújo", "231.321.412-01", "Rua G, nº 314 - Centro, Salvador-BA"),
                    );
            }

     public function getClientes($order = "crescente")
     {
                if($order == "decrescente"){
                        krsort(self::$clientes);
                        return self::$clientes;
         }

         return self::$clientes;
     }

     public function getCliente($id)
     {
                foreach(self::$clientes as $cliente):
                        if($cliente->getId() == $id){
                            return $cliente;
             }
         endforeach;

         return $id;

     }
 }