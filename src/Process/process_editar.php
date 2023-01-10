<?php

require_once '../../vendor/autoload.php';

use Classes\Pessoa;

$objPessoa = new Pessoa;

$id = $_GET['id'];
$arrNovosDados = $_POST;

$objPessoa->editaPessoa($id, $arrNovosDados);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>