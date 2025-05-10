<?php
// model/Ingreso.php
require_once 'config/db.php';

class Ingreso {
    public $id;
    public $value;
    public $idReport;

    public function __construct($value, $idReport, $id = null) {
        $this->id = $id;
        $this->value = $value;
        $this->idReport = $idReport;
    }

    public static function getAll() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM income");
        return $stmt->fetchAll();
    }

    public function save() {
        $pdo = getConnection();
        $stmt = $pdo->prepare("INSERT INTO income (value, idReport) VALUES (?, ?)");
        return $stmt->execute([$this->value, $this->idReport]);
    }

    public function update() {
        $pdo = getConnection();
        $stmt = $pdo->prepare("UPDATE income SET value = ? WHERE id = ?");
        return $stmt->execute([$this->value, $this->id]);
    }
}