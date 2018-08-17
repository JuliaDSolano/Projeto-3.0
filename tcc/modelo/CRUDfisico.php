<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/05/18
 * Time: 09:03
 */
require_once 'BDConection.php';
require_once '../Classes/Fisico.php';
class CRUDlogin
{
    public $conexao;

    public function GetFisico($id){
        $this->conexao = BDConection::getConexao();

        $sql = "select * from fisico where cpf = '".$id."'";

        $res = $this->conexao->query($sql);

        $fisico = $res->fetch(PDO::FETCH_ASSOC);

        $fisi = new Fisico($fisico['cpf'],$fisico['especificacao'],$fisico['cod_usuario '],$fisico['descricao']);

        return $fisi;


    }

}