<?php

class Product extends BaseModel 
{
    public function getAll() {
        $sql = "SELECT * FROM `product` ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}