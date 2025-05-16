<?php
class DAOFichaDeTreino
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM fichadetreino;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(FichaDeTreino $ficha)
    {
        $sql = 'INSERT INTO fichadetreino (TipoDeTreino, IdFuncionario, IdCliente, idconjunto_equipamento, IdModalidade) VALUES (?, ?, ?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $ficha->getTipoDeTreino());
        $pst->bindValue(2, $ficha->getIdFuncionario());
        $pst->bindValue(3, $ficha->getIdCliente());
        $pst->bindValue(4, $ficha->getIdConjuntoEquipamento());
        $pst->bindValue(5, $ficha->getIdModalidade());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        
        $sql = 'DELETE FROM fichadetreino WHERE IdFicha = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(FichaDeTreino $ficha)
    {
        $sql = 'UPDATE fichadetreino SET TipoDeTreino = ?, IdFuncionario = ?, IdCliente = ?, idconjunto_equipamento = ?, IdModalidade = ? WHERE IdFicha = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $ficha->getTipoDeTreino());
        $pst->bindValue(2, $ficha->getIdFuncionario());
        $pst->bindValue(3, $ficha->getIdCliente());
        $pst->bindValue(4, $ficha->getIdConjuntoEquipamento());
        $pst->bindValue(5, $ficha->getIdModalidade());
        $pst->bindValue(6, $ficha->getIdFicha());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraUm($id)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM fichadetreino WHERE IdFicha = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>