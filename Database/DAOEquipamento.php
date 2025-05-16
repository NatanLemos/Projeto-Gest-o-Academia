<?php
class DAOEquipamento
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM equipamento;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Equipamento $equipamento)
    {
        $sql = 'INSERT INTO equipamento (Quantidade, Nome, Peso) VALUES (?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $equipamento->getQuantidade());
        $pst->bindValue(2, $equipamento->getNome());
        $pst->bindValue(3, $equipamento->getPeso());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($idEquipamento)
    {
        $sql = 'DELETE FROM equipamento WHERE IdEquipamento = ?;';
        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idEquipamento);

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Equipamento $equipamento)
    {
        $sql = 'UPDATE equipamento SET Quantidade = ?, Nome = ?, Peso = ? WHERE IdEquipamento = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $equipamento->getQuantidade());
        $pst->bindValue(2, $equipamento->getNome());
        $pst->bindValue(3, $equipamento->getPeso());
        $pst->bindValue(4, $equipamento->getIdEquipamento());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraUm($idEquipamento)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM equipamento WHERE IdEquipamento = ?;');
        $pst->bindValue(1, $idEquipamento);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>
