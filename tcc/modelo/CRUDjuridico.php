<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 03/05/18
 * Time: 09:03
 */
require_once 'BDConection.php';
require_once '../Classes/Juridico.php';
class CRUDlogin
{
    public $conexao;

    public function GetJuridico($id){
        $this->conexao = BDConection::getConexao();

        $sql = "select * from juridico where cnpj = '".$id."'";

        $res = $this->conexao->query($sql);

        $juridico = $res->fetch(PDO::FETCH_ASSOC);

        $juri = new Juridico($juridico['razao_social'],$juridico['cnpj'],$juridico['cod_usuario'];

        return $juri;


    }

}