<?php
    class Role extends BaseModel {
    public function getAll() {
        $sql = "SELECT * FROM `role` ORDER BY id DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>