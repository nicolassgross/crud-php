<?php

namespace Classes;

class Pessoa 
{
    private $nome;
    private $email;

    public function inserePessoa($data): bool {

        $users = $this->getUsers();

        $data = [
            "nome" => $this->getNome(),
            "email" => $this->getEmail()
        ];

        $dados_a_inserir = $this->validaPessoas($data, $users);
        
        return $this->getObjBancoDeDados()
            ->insereDadosBanco($dados_a_inserir);
    }

    public function validaPessoas(
        $data,
        array $users
    ): array  {
        if (!empty($users)){
            array_push($users, $data);
            return $users;
        }
        return $data;
    }

    public function editaPessoa(
        int $id,
        array $data 
    ): bool {
        $users = $this->getUsers();

        foreach ($users as $key => $user) {
            if ($key == $id) {
                $users[$key] = array_merge($user, $data);
            }
        }

        return $this->getObjBancoDeDados()
            ->insereDadosBanco($users);
    }

    public function getUserById(int $id): array
    {
        $users = $this->getUsers();

        foreach ($users as $key => $user) {
            if ($key == $id) {
                return $user;
            }
        }

        return $users;
    }

    function excluiPessoa(int $id): bool
    {
        $users = $this->getUsers();

        foreach ($users as $key => $user) {
            if ($key == $id) {
                array_splice($users, $key, 1);
            }
        }

        return $this->getObjBancoDeDados()
            ->insereDadosBanco($users);
    }

    public function getObjBancoDeDados(): BancoDeDados
    {
        return new BancoDeDados();
    }

    function getUsers(): array
    {
        return $this->getObjBancoDeDados()->recuperaDadosBancoJson();
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}