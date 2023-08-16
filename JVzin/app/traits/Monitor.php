<?php

namespace app\traits;

trait Read
{
    public function monitor($returnAll = true)
    {
        try {
            $query = $this->connection->query("SELECT DISTINCT turma FROM students {$this->table}");
            return $returnAll ? $query->fetchAll() : $query->fetch();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}
