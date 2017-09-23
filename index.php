<?php
require_once('autoload.php');

$banco = new PHPOO\Cliente\Banco\BancoClientes();

if(isset($_GET['order'])){
    $clientes = $banco->getClientes($_GET['order']);
}else{
    $clientes = $banco->getClientes();
}
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="#" class="brand-logo center">Clientes</a>
          </div>
        </nav>
      </div>
      <div class="container">
        <main>
          <div class="espacamento">
            <a class="waves-effect waves-light btn" href="?order=crescente">Ordem Crescente</a>
            <a class="waves-effect waves-light btn right" href="?order=decrescente">Ordem Decrescente</a>
          </div>
                  <table>
                      <thead>
                          <tr>

                              <td>ID</td>
                              <td>Nome</td>
                              <td>Tipo Cliente</td>
                              <td></td>


                          </tr>
                      </thead>
                      <?php foreach($clientes as $cliente){ ?>
                          <tr>
                              <td><?php echo $cliente->getId() ; ?></td>
                              <td><?php echo $cliente->getNome() ; ?></td>

                              <td><?php echo ($cliente->isPessoaFisica()) ? "Pessoa Física" : "Pessoa Juridica"; ?></td>
                              <td><a href="<?php echo 'clientes.php?id='.$cliente->getId() ?>" class="waves-effect waves-light btn" title="Visualizar">Visualizar</a></td>
                          </tr>

                      <?php } ?>
                  </table>
        </main>
      </div>
    </body>
</html>
