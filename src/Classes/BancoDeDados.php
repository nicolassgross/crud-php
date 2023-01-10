<?php

namespace Classes;

class BancoDeDados 
{
    private $pathBancoJson;

    public function __construct()
    {
        $this->setPathBancoJson('../../database/banco.json');
    }

    public function recuperaDadosBancoJson()
    {
        return json_decode(file_get_contents($this->pathBancoJson), true); 
    }

    function insereDadosBanco($json)
    {
        return file_put_contents($this->pathBancoJson, json_encode($json, JSON_PRETTY_PRINT));
    }

    /**
     * Get the value of pathBancoJson
     */ 
    public function getPathBancoJson()
    {
        return $this->pathBancoJson;
    }

    /**
     * Set the value of pathBancoJson
     *
     * @return  self
     */ 
    public function setPathBancoJson($pathBancoJson)
    {
        $this->pathBancoJson = $pathBancoJson;
        return $this;
    }
}