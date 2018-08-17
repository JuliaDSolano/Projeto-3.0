<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 20/06/18
 * Time: 14:24
 */

class Juridico
{
    public $razao_social;
    public $cnpj;
    public $cod_usuario;

    /**
     * Juridico constructor.
     * @param $razao_social
     * @param $cnpj
     * @param $cod_usuario
     */
    public function __construct($razao_social, $cnpj, $cod_usuario)
    {
        $this->razao_social = $razao_social;
        $this->cnpj = $cnpj;
        $this->cod_usuario = $cod_usuario;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    /**
     * @param mixed $razao_social
     */
    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
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