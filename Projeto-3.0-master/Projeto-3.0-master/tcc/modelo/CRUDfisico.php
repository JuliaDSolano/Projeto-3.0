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

    public function GetFisico($id)
    {
        $this->conexao = BDConection::getConexao();

        $sql = "select * from fisico where cpf = '" . $id . "'";

        $res = $this->conexao->query($sql);

        $fisico = $res->fetch(PDO::FETCH_ASSOC);

        $fisi = new Fisico($fisico['cpf'], $fisico['especificacao'], $fisico['cod_usuario '], $fisico['descricao']);

        return $fisi;


    }

    public function deleteUsuario($id)
    {

        //EFETUA A CONEXAO
        $this->conexao = DBConnection::getConexao();

        //MONTA O TEXTO DA INSTRUÇÂO SQL
        $sql = "DELETE FROM Usuario WHERE us_id = '{$id}'";
        try {//TENTA EXECUTAR A INSTRUCAO

            $this->conexao->exec($sql);
        } catch (PDOException $e) {
            //EM CASO DE ERRO, CAPTURA A MENSAGEM
            return $e->getMessage();
        }
    }

    public function updateUsuario(Usuario $user){

        $this->conexao = DBConnection::getConexao();

        $sql = "UPDATE usuario SET usuario = '{$user->nome}', senha ='{$user->senha}', email = '{$user->email}'
        WHERE id = '{$user->id}'";

        try {
            //TENTA EXECUTAR A INSTRUCAO

            $this->conexao->exec($sql);

        } catch (PDOException $e) {
            //EM CASO DE ERRO, CAPTURA A MENSAGEM
            return $e->getMessage();
        }
    }

}

