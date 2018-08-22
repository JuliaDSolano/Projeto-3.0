<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 06/06/18
 * Time: 14:57
 */

class Fisico
{
    public $descricao;
    public $especificacao;
    public $cpf;
    public $cod_usuario;

    /**
     * Fisico constructor.
     * @param $descricao
     * @param $especificacao
     * @param $cpf
     * @param $cod_usuario
     */
    public function __construct($descricao, $especificacao, $cpf, $cod_usuario)
    {
        $this->descricao = $descricao;
        $this->especificacao = $especificacao;
        $this->cpf = $cpf;
        $this->cod_usuario = $cod_usuario;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getEspecificacao()
    {
        return $this->especificacao;
    }

    /**
     * @param mixed $especificacao
     */
    public function setEspecificacao($especificacao)
    {
        $this->especificacao = $especificacao;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getCodUsuario()
    {
        return $this->cod_usuario;
    }

    /**
     * @param mixed $cod_usuario
     */
    public function setCodUsuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;
    }


}