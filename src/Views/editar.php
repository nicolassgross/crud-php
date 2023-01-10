<?php

require_once '../../vendor/autoload.php';

use Classes\Pessoa;

$objPessoa = new Pessoa;

$id = $_GET['id'];
$arrUsuarioAtual = $objPessoa->getUserById($id);

?>
<!DOCTYPE html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    <form class="form-horizontal" action="../Process/process_editar.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
        <div class="panel panel-primary">
            <div class="panel-heading">Edição de Pessoa</div><br><br>
                <div class="form-group">
                    <div style="padding-left:20%">
                        <div class="form-group">
                        <label value=" " class="col-md-2 control-label">Nome<h8> *</h8></label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="nome" name="nome" value="<?php echo $arrUsuarioAtual['nome'] ?>" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                    </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Email<h8> *</h8></label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" class="form-control" value="<?php echo $arrUsuarioAtual['email'] ?>" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-left:25%">
                <label class="col-md-2 control-label"></label>
                <div class="col-md-8">
                    <button id="cadastrar" class="btn btn-success" type="submit">Confirmar Edição</button>
                    <button name="cancelar" class="btn btn-danger" type="">Cancelar</button>
                    <a href="listar.php"><button name="listar" class="btn btn-info" type="button">Listar usuários cadastrados</button></a>
                </div>
                
            </div>
        </div>
    </form>
</body>
</html>
