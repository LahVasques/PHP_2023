<?php
require_once "conexao.php";

$nome = $_GET["nome"];
$tipo = $_GET["tipo"];
$descricao = $_GET["descricao"];
$preco = $_GET["preco"];
$id = $_GET["id"];
$imagem = $_GET["imagem"];

$sql = "DELETE FROM PRODUTOS WHERE id = ?";

$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();

        // Redirecionar para a página de sucesso após a exclusão
        header("Location: excluir-produto-sucesso.php?nome=$nome&tipo=$tipo&descricao=$descricao&preco=$preco&id=$id&imagem=$imagem");
        exit();
    } else {
        // A execução da consulta SQL falhou
        $stmt->close();
        $conn->close();
        header("Location: excluir-produto.php?erro=1&id=$id");
        exit();
    }
} else {
    // A preparação da consulta SQL falhou
    $conn->close();
    header("Location: excluir-produto.php?erro=1&id=$id");
    exit();
}
?>
