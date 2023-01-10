<?php

require_once '../../vendor/autoload.php';

use Classes\BancoDeDados;

$objBancoDeDados = new BancoDeDados;

$array_dados_atuais = $objBancoDeDados->recuperaDadosBancoJson();
?>

<!DOCTYPE html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="panel panel-primary">
        <div class="panel-heading">Lista de pessoas</div>
        <br><br>
        <table class="table table-dark" >
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($array_dados_atuais as $key => $value)
                {
            ?>
                <tr>
                <th scope="row"><?php echo $key; ?></th>
                <td><?php echo $value['nome']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td><a href="editar.php?id=<?php echo $key ?>" class="glyphicon glyphicon-pencil" type="submit"></a></td>
                <td><a href="../Process/process_excluir.php?id=<?php echo $key ?>" class="glyphicon glyphicon-trash" type="submit"></a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>

        </table>
    </div>
    <div>
    <div class="col-md-8">
        <a href="cadastro.php">
          <button name="listar" class="btn btn-info" type="button">Cadastrar pessoa</button>
        </a>
    </div>
  </div>
</body>
</html>
