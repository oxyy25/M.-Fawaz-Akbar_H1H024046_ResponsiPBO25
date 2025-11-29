<?php
class TrainingHistory {

    public static function add($jenis, $intensity, $before, $after) {
        if (!isset($_SESSION['history'])) {
            $_SESSION['history'] = [];
        }

        $_SESSION['history'][] = [
            "jenis" => $jenis,
            "intensity" => $intensity,
            "before" => $before,
            "after" => $after,
            "time" => date("Y-m-d H:i:s")
        ];
    }

    public static function getAll() {
        return $_SESSION['history'] ?? [];
    }
}
