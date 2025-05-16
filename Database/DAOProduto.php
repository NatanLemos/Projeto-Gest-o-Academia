<?php
class DAOProduto
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select * from Produto;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Produto $Produto)
    {
        $sql = 'INSERT INTO produto (nome,descricao,preco,Quantidade) values (?,?,?,?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $Produto->getNome());
        $pst->bindValue(2, $Produto->getDescricao());
        $pst->bindValue(3, $Produto->getPreco());
        $pst->bindValue(4, $Produto->getQuantidade());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE from Produto where idproduto = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(Produto $Produto)
    {
        $sql = 'UPDATE Produto set nome = ?, descricao = ?, preco = ?, Quantidade = ? where idproduto = ?;';
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $Produto->getNome());
        $pst->bindValue(2, $Produto->getDescricao());
        $pst->bindValue(3, $Produto->getPreco());
        $pst->bindValue(4, $Produto->getQuantidade());
        $pst->bindValue(5, $Produto->getidproduto());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>