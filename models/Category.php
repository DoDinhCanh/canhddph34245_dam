<?php

class Category extends BaseModel 
{
    public function getAll() {
        $sql = "SELECT * FROM `category` ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}