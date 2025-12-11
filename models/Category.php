<?php

class Category extends BaseModel 
{
    public function getAll() {
        $sql = "SELECT * FROM `category` ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id) {
        $sql = "DELETE FROM category WHERE `category`.`id`= $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function find($id) {
        $sql = "SELECT * FROM category WHERE id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert($data) {
        $sql = "INSERT INTO `category` (`id`, `name`, `image`) 
        VALUES (NULL, '".$data["name"]."' , '".$data["image"]."');";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute();
    }
    public function update($id, $name, $image = null) {
        if (!empty($image)) {
            $sql  = "UPDATE category SET name = ?, image = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$name, $image, $id]);
        } else {
            $sql  = "UPDATE category SET name = ? WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$name, $id]);
        }
    }
}