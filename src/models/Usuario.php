<?php

namespace Models;

use DateTime;

class Usuario extends Model
{
    private $idUsuario;
    private $nome;
    private $email;
    private $senha;
    private $statusUsuario;
    private $dataCriacao;
    private $dataAtualizacao;


    function __construct($idUsuario = 0, $nome, $email, $senha, $statusUsuario, $dataCriacao, $dataAtualizacao)
    {
        $this->setIdUsuario($idUsuario);
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setStatusUsuario($statusUsuario);
        $this->setDataCriacao($dataCriacao);
        $this->setDataAtualizacao($dataAtualizacao);
    }

    //setters

    function setIdUsuario(int $idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    function setEmail(string $email)
    {
        $this->email = $email;
    }

    function setSenha(string $senha)
    {
        $this->senha = $senha;
    }

    function setStatusUsuario(int $statusUsuario)
    {
        $this->statusUsuario = $statusUsuario;
    }

    function setDataCriacao(DateTime $dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;
    }

    function setDataAtualizacao(DateTime $dataAtualizacao)
    {
        $this->dataAtualizacao = $dataAtualizacao;
    }

    //getters
    function getIdUsuario()
    {
        return $this->idUsuario;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getEmail()
    {
        return $this->email;
    }

    function getSenha()
    {
        return $this->senha;
    }

    function getStatusUsuario()
    {
        return $this->statusUsuario;
    }

    function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    function getDataAtualizacao()
    {
        return $this->dataAtualizacao;
    }
}
