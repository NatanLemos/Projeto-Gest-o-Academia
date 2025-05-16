<?php
class DAOConjunto_Equipamento
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM conjunto_equipamento;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Conjunto_Equipamento $conjunto)
    {
        $sql = 'INSERT INTO conjunto_equipamento (idEquipamento, series, repeticoes) VALUES (?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $conjunto->getIdEquipamento());
        $pst->bindValue(2, $conjunto->getSeries());
        $pst->bindValue(3, $conjunto->getRepeticoes());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'DELETE FROM conjunto_equipamento WHERE idconjunto_equipamento = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Conjunto_Equipamento $conjunto)
    {
        $sql = 'UPDATE conjunto_equipamento SET idEquipamento = ?, series = ?, repeticoes = ? WHERE idconjunto_equipamento = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $conjunto->getIdEquipamento());
        $pst->bindValue(2, $conjunto->getSeries());
        $pst->bindValue(3, $conjunto->getRepeticoes());
        $pst->bindValue(4, $conjunto->getIdConjunto_Equipamento());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraUm($id)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM conjunto_equipamento WHERE idconjunto_equipamento = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>