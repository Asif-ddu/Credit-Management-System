<?php
try {
    $pdo = new pdo('mysql:host=localhost;port=3306;dbname=transfer_credit','root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    exit("Error: " . $e->getMessage());
}
