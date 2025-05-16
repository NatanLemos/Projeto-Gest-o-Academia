<?php
class DAOCliente
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM cliente;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Cliente $cliente)
    {
        $sql = 'INSERT INTO cliente (Nome, Telefone, Mensalidade) VALUES (?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getTelefone());
        $pst->bindValue(3, $cliente->getMensalidade());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'DELETE FROM cliente WHERE IdCliente = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Cliente $cliente)
    {
        $sql = 'UPDATE cliente SET Nome = ?, Telefone = ?, Mensalidade = ? WHERE IdCliente = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getTelefone());
        $pst->bindValue(3, $cliente->getMensalidade());
        $pst->bindValue(4, $cliente->getIdCliente());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraUm($id)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM cliente WHERE IdCliente = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>