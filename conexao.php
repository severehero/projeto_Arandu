<?php
// Parâmetros de conexão
$dsn = 'localhost';
$username = 'root';


try {
    // Estabelecer a conexão
    $pdo = new PDO("mysql:host=$dsn", $username);

    // Configurar o modo de erro para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem sucedida!";
} catch (PDOException $e) {
    // Capturar e exibir erros de conexão
    echo "Erro de conexão: " . $e->getMessage();
}
?>
