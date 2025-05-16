<?php
class DAOItemVenda
{
    public function listaPorVenda($idVenda)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('select iditemVenda, vendaid, produtoid, quantidade, subtotal, quantidade*subtotal as subtotal from itemvenda where vendaid = ?;');
        $pst->bindValue(1, $idVenda);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    public function inclui(itemvenda $itemvenda)
    {
        $sql = 'call inserir(?,?,?)';
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itemvenda->getprodutoid());
        $pst->bindValue(2, $itemvenda->getvendaid());
        $pst->bindValue(3, $itemvenda->getQuantidade());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function exclui($id)
    {
        $sql = 'DELETE from ItemVenda where iditemVenda = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function altera(ItemVenda $ItemVenda)
    {
        $sql = 'UPDATE ItemVenda set vendaid = ?, produtoid = ?, quantidade = ?, subtotal = ? where iditemVenda = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $ItemVenda->getvendaid());
        $pst->bindValue(2, $ItemVenda->getprodutoid());
        $pst->bindValue(3, $ItemVenda->getquantidade());
        $pst->bindValue(4, $ItemVenda->getSubTotal());
        $pst->bindValue(5, $ItemVenda->getiditemVenda());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>