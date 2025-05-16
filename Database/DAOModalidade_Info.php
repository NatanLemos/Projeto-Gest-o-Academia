<?php
class DAOModalidade_Info
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM modalidade_info;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(modalidade_info $modalidade_info)
    {
        $sql = 'INSERT INTO modalidade_info (idmodalidade, idcliente, idFuncionario) VALUES (?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $modalidade_info->getIdModalidade());
        $pst->bindValue(2, $modalidade_info->getIdCliente());
        $pst->bindValue(3, $modalidade_info->getIdFuncionario());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'DELETE FROM modalidade_info WHERE idmodalidade_info = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(modalidade_info $modalidade_info)
    {
        $sql = 'UPDATE modalidade_info SET idmodalidade = ?, idcliente = ?, idFuncionario = ? WHERE idmodalidade_info = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $modalidade_info->getIdModalidade());
        $pst->bindValue(2, $modalidade_info->getIdCliente());
        $pst->bindValue(3, $modalidade_info->getIdFuncionario());
        $pst->bindValue(4, $modalidade_info->getIdModalidadeInfo());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraUm($id)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM modalidade_info WHERE idmodalidade_info = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>