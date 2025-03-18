<?php

namespace APP\Dao;

use APP\Model\Aluno;

final class AlunoDAO extends DAO{
    public function __construct(){
        parent::__construct();
    }

    public function save(Aluno $model) : Aluno{
        return ($model->Id ==null) ? $this->insert($model):
            $this->update($model);
    }

    public function insert(Aluno $model) : Aluno{
        $sql = "INSERT INTO aluno (nome, ra, curso) VALUES (?,?,?) ";
        $stmt = parent::$conexao->prepare($sql);

        $stml->bindValue(1, $model->Nome);
        $stml->bindValue(2, $model->RA);
        $stml->bindValue(3, $model->Curso);

        $stmt->execute();

        $model->Id = parent::$conexao->lastInsertId();

        return $model;
    }

    public function update(Aluno $model) : Aluno{
        $sql = "UPDATE aluno SET nome=?, ra=?, curso=? WHERE id=? ";
        $stmt = parent::$conexao->prepare($sql);

        $stml->bindValue(1, $model->Nome);
        $stml->bindValue(2, $model->RA);
        $stml->bindValue(3, $model->Curso);
        $stml->bindValue(3, $model->Id);
        $stmt->execute();
        $model->Id = parent::$conexao->lastInsertId();

        return $model;
    }


    public function selectById(int $id) : ?Aluno{
        $sql = "SELECT * FROM aluno WHERE id=? ";
        
        
        $stmt = parent::$conexao->prepare($sql);

        $stml->bindValue(1, $id);
        $stml->bindValue(2, $model->RA);
        $stml->bindValue(3, $model->Curso);

        $stmt->execute();

        $model->Id = parent::$conexao->lastInsertId();

        return $model;
    }
}