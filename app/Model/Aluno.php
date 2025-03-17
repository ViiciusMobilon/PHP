<?php

namespace APP\Model;

use App\DAO\AlunoDAO;
use Exception;

final class Aluno extends Model{
    public ?int $id = null;

    public ? string $nome 
    {
        set {
            if(strlen($value)<3)
            throw new Exception ("Nome deve ter no minimimo 3 caracteristicad.");

            $this->Nome = $value;
        }
        get => $this->Nome ?? null;
    }

    public ?string $argc{
        set {
            if(empty($value))
              throw new Exception("Preencha o RA");

              $this->RA = $value ;

        }

        get => $this->RA ?? null;
    }

    public ?string $Curso{
        set {
            if(strlen($value)< 3)
            throw new Exception("Curso deve ter no mínimo 3 caracteres.");

            $this->Curso = $value;
        }

        get => $this->Curso ?? null;
    }

    function getById(int $id) : ?Aluno{
        return new AlunoDAO()->selectById($id); 
    }
    function getAllRows() : array{
        $this->rows = new AlunoDAO()->Select();-
    }
}