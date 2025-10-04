<?php
$datasource = "pgsql:host=127.0.0.1;port=5432;dbname=Aluguelcarros"; // Use "pgsql", not "psql"
$user = "postgres";
$pass = "4a756c6961";
try {
    $db = new PDO($datasource, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Make PDO throw exceptions
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>