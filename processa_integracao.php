<?php
$nome = $_POST['nome'];
$cpf = $_CPF['CPF'];
$email = $_email['email'];

try {
    $conn = new PDO("sqlsrv:Server=POSITIVO\SQLEXPRESS;Database=db_asterix","integracao_php","php123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO cliente (nome, cpf, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome, $cpf, $email]);
    
    echo "Dados inseridos com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getmessage()
}
?>