<?php
// models/User.php

require_once __DIR__ . 'config.php';

class User
{
    public static function getAllUsers()
    {
        $db = getDB();  // Obtener la conexión de la base de datos
        $stmt = $db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
