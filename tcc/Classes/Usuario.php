<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/05/18
 * Time: 09:04
 */

class Usuario
{
    public $nome;
    public $email;
    public $senha;
    public $cod_usuario;

    public function __construct($nome,$email,$senha,$cod_usuario)
    {
        $this->nome = $nome;
        $this->email= $email;
        $this->senha= $senha;
        $this->id= $cod_usuario;

    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setCod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;
    }




}


