<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "root";
$dbname = "db_at";

// Crea una connessione
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}
?>