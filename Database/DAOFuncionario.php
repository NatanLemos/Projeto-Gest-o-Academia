<?php
class DAOFuncionario
{
    public function listaTodos()
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM funcionario;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(Funcionario $funcionario)
    {
        $sql = 'INSERT INTO funcionario (Nome, Salario, HorasSemanais, NumAlunos) VALUES (?, ?, ?, ?);';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getSalario());
        $pst->bindValue(3, $funcionario->getHorasSemanais());
        $pst->bindValue(4, $funcionario->getNumAlunos());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'DELETE FROM funcionario WHERE IdFuncionario = ?;';

        $pst = conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(Funcionario $funcionario)
    {
        $sql = 'UPDATE funcionario SET Nome = ?, Salario = ?, HorasSemanais = ?, NumAlunos = ? WHERE IdFuncionario = ?;';
        $pst = conexao::getPreparedStatement($sql);

        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getSalario());
        $pst->bindValue(3, $funcionario->getHorasSemanais());
        $pst->bindValue(4, $funcionario->getNumAlunos());
        $pst->bindValue(5, $funcionario->getIdFuncionario());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function procuraUm($id)
    {
        $lista = [];
        $pst = conexao::getPreparedStatement('SELECT * FROM funcionario WHERE IdFuncionario = ?;');
        $pst->bindValue(1, $id);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}
?>