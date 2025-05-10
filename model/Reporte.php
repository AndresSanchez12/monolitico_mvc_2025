<?php
// model/Reporte.php
require_once 'config/db.php';

class Reporte {
    public $id;
    public $month;
    public $year;

    public function __construct($month, $year, $id = null) {
        $this->id = $id;
        $this->month = $month;
        $this->year = $year;
    }

    public static function getAll() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM reports");
        return $stmt->fetchAll();
    }

    public static function getByMonthAndYear($month, $year) {
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT * FROM reports WHERE month = ? AND year = ?");
        $stmt->execute([$month, $year]);
        return $stmt->fetch();
    }

    public static function getIngresosByReportId($idReport) {
        $pdo = getConnection();
        $stmt = $pdo->prepare("SELECT value FROM income WHERE idReport = ?");
        $stmt->execute([$idReport]);
        return $stmt->fetchAll();
    }

    public static function getGastosByReportId($idReport) {
        $pdo = getConnection();
        $stmt = $pdo->prepare("
            SELECT b.value, c.name, c.percentage 
            FROM bills b 
            INNER JOIN categories c ON b.idCategory = c.id 
            WHERE b.idReport = ?
        ");
        $stmt->execute([$idReport]);
        return $stmt->fetchAll();
    }
}
