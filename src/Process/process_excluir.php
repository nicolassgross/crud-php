<?php

require_once '../../vendor/autoload.php';

use Classes\Pessoa;

$objPessoa = new Pessoa;

$id = $_GET['id'];

$objPessoa->excluiPessoa($id);

header('Location: ' . "process_editar.php");
?>

