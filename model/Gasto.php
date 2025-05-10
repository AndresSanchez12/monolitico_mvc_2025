<?php
// model/Gasto.php
require_once 'config/db.php';

class Gasto {
    public $id;
    public $value;
    public $idCategory;
    public $idReport;

    public function __construct($value, $idCategory, $idReport, $id = null) {
        $this->id = $id;
        $this->value = $value;
        $this->idCategory = $idCategory;
        $this->idReport = $idReport;
    }

    public static function getAll() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM bills");
        return $stmt->fetchAll();
    }

    public function save() {
        $pdo = getConnection();
        $stmt = $pdo->prepare("INSERT INTO bills (value, idCategory, idReport) VALUES (?, ?, ?)");
        return $stmt->execute([$this->value, $this->idCategory, $this->idReport]);
    }

    public function update() {
        $pdo = getConnection();
        $stmt = $pdo->prepare("UPDATE bills SET value = ?, idCategory = ? WHERE id = ?");
        return $stmt->execute([$this->value, $this->idCategory, $this->id]);
    }

    public static function delete($id) {
        $pdo = getConnection();
        $stmt = $pdo->prepare("DELETE FROM bills WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
