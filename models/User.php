<?php

class User extends BaseModel 
{
    public function getAll() {
        $sql = "SELECT 
    user.id,
    user.username,
    user.email,
    user.password,
    role.name AS role_name
FROM user
LEFT JOIN role ON user.role_id = role.id
ORDER BY user.id DESC ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function find($id) {
        $sql = "SELECT * FROM user WHERE id = $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function delete($id) {
        $sql = "DELETE FROM user WHERE `user`.`id`= $id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function insert($data) {
        $sql = "INSERT INTO `user` (`id`, `username`, `password`, `email`, `role_id`) 
        VALUES (NULL, '".$data["username"]."', '".$data["password"]."', '".$data["email"]."', 
        '".$data["role_id"]."');";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function update($id, $username, $password, $email, $role_id) {
    $sql = "UPDATE user 
            SET username = ?, password = ?, email = ?, role_id = ? 
            WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$username, $password, $email, $role_id, $id]);
}
}
