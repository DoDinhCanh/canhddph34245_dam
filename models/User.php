<?php

class User extends BaseModel 
{
    public function getAll() {
        $sql = "SELECT * FROM `user` ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}