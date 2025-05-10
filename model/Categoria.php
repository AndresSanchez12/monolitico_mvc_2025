<?php
// model/Categoria.php
require_once 'config/db.php';

class Categoria {
    public $id;
    public $name;
    public $percentage;

    public function __construct($name, $percentage, $id = null) {
        $this->id = $id;
        $this->name = $name;
        $this->percentage = $percentage;
    }

    public static function getAll() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }

    public function save() {
        $pdo = getConnection();
        $stmt = $pdo->prepare("INSERT INTO categories (name, percentage) VALUES (?, ?)");
        return $stmt->execute([$this->name, $this->percentage]);
    }

    public function update() {
        $pdo = getConnection();
        $stmt = $pdo->prepare("UPDATE categories SET name = ?, percentage = ? WHERE id = ?");
        return $stmt->execute([$this->name, $this->percentage, $this->id]);
    }

    public static function delete($id) {
        $pdo = getConnection();
        $stmt = $pdo->prepare("DELETE FROM categories WHERE id = ?");
        return $stmt->execute([$id]);
    }
}