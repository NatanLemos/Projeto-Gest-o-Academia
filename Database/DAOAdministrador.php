<?php
class DAOAdministrador
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM administrador;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Administrador $administrador)
    {
        $sql = 'INSERT INTO administrador (idfuncionario, senha, idfuncionario) VALUES (?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $administrador->getidfuncionario());
        $pst->bindValue(2, $administrador->getSenha());
        $pst->bindValue(3, $administrador->getIdFuncionario());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($idfuncionario)
    {
        $sql = 'DELETE FROM administrador WHERE idfuncionario = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idfuncionario);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Administrador $administrador)
    {
        $sql = 'UPDATE administrador SET senha = ?, idfuncionario = ? WHERE idfuncionario = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $administrador->getSenha());
        $pst->bindValue(2, $administrador->getIdFuncionario());
        $pst->bindValue(3, $administrador->getidfuncionario());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraUm($idfuncionario)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM administrador WHERE idfuncionario = ?;');
        $pst->bindValue(1, $idfuncionario);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>
