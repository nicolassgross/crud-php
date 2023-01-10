<?php

use Classes\Pessoa;
use PHPUnit\Framework\TestCase;

final class FutebolTest extends TestCase
{
    public function testVerificaTimeComMenorDiferencaDeGols(): void
    {

        $objPessoa = new Pessoa;

        var_dump($objPessoa->inserePessoa("nicolas", "email"));
    }
}