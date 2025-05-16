<?php
class DAOModalidade
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM modalidade;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Modalidade $modalidade)
    {
        $sql = 'INSERT INTO modalidade (NomeDaModalidade, Tipo, QTDdias, NmrAlunos) VALUES (?, ?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $modalidade->getNomeDaModalidade());
        $pst->bindValue(2, $modalidade->getTipo());
        $pst->bindValue(3, $modalidade->getQTDdias());
        $pst->bindValue(4, $modalidade->getNmrAlunos());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'DELETE FROM modalidade WHERE IdModalidade = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Modalidade $modalidade)
    {
        $sql = 'UPDATE modalidade SET NomeDaModalidade = ?, Tipo = ?, QTDdias = ?, NmrAlunos = ? WHERE IdModalidade = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $modalidade->getNomeDaModalidade());
        $pst->bindValue(2, $modalidade->getTipo());
        $pst->bindValue(3, $modalidade->getQTDdias());
        $pst->bindValue(4, $modalidade->getNmrAlunos());
        $pst->bindValue(5, $modalidade->getIdModalidade());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraUm($id)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM modalidade WHERE IdModalidade = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>