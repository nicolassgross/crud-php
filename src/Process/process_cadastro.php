<?php

require_once '../../vendor/autoload.php';

use Classes\Pessoa;

$objPessoa = new Pessoa;

$email = $_POST['email'];
$nome = $_POST['nome'];

$objPessoa->setNome($nome);
$objPessoa->setEmail($email);

$arrNovosDados = $objPessoa->inserePessoa($nome, $email);

header('Location: ' . $_SERVER['HTTP_REFERER'])
?>
