<?php
class DAOVenda
{
    public function listaTodos()
    {
        $lista = [];
        $sql = 'SELECT * FROM venda;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function abrirVenda(Venda $venda)
    {
        $sql = 'INSERT INTO venda (situacao, datavenda, totalvenda, IdFuncionario, IdCliente) 
                VALUES (?, ?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $venda->getSituacao());
        $pst->bindValue(2, $venda->getdatavenda());
        $pst->bindValue(3, $venda->gettotalvenda());
        $pst->bindValue(4, $venda->getIdFuncionario());
        $pst->bindValue(5, $venda->getIdFuncionario());


        if ($pst->execute()) {
            $retorno = Conexao::getConexao()->lastInsertId();
            return $retorno;
        } else {
            return false;
        }
    }

    public function fecharVenda($idvenda)
    {
        $sql = 'UPDATE venda SET situacao = 0, datavenda = now() WHERE idvenda = ?;';
        $pst = Conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $idvenda);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE FROM venda WHERE idvenda = ?';
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>