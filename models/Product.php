<?php

class Product extends BaseModel 
{
    public function getAll() {
        $sql = "SELECT * FROM `product` ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function delete($id) {
        $sql = "DELETE FROM product WHERE `product`.`id`= $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function find($id) {
        $sql = "SELECT * FROM product WHERE id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert($data) {
        $sql = "INSERT INTO `product` (`id`, `category_id`, `name`, `description`, `price`, `image`) 
        VALUES (NULL, '".$data["category_id"]."', '".$data["name"]."', '".$data["description"]."', 
        '".$data["price"]."', '".$data["image"]."');";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function update($id, $name, $price, $description, $image = null, $category_id) {
        if (!empty($image)) {
            $sql  = "UPDATE product 
                     SET name = ?, price = ?, description = ?, image = ?, category_id = ? 
                     WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$name, $price, $description, $image, $category_id, $id]);
        } else {
            $sql  = "UPDATE product 
                     SET name = ?, price = ?, description = ?, category_id = ? 
                     WHERE id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$name, $price, $description, $category_id, $id]);
        }
    }

    public function top4new() {
        $sql = "SELECT * FROM product ORDER BY ID DESC LIMIT 4";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllWithCategory() {
    $sql = "SELECT 
                p.id,
                p.name,
                p.description,
                p.price,
                p.image,
                p.category_id,
                c.name AS category_name
            FROM product AS p
            LEFT JOIN category AS c 
            ON p.category_id = c.id
            ORDER BY p.id DESC;";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
    }

    public function getByCategory($categoryId) {
            $sql = "SELECT p.*, c.name AS category_name
                    FROM product p
                    LEFT JOIN category c ON p.category_id = c.id
                    WHERE p.category_id = ?
                    ORDER BY p.id DESC";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$categoryId]);
            return $stmt->fetchAll();
    }


}
