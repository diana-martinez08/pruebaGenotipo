<?php
include_once "conexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM articulos WHERE id_Articulo = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $articulo = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode($articulo);
    exit();
} else {
    echo json_encode(['error' => 'No se proporcionó el ID del artículo']);
    exit();
}
?>
