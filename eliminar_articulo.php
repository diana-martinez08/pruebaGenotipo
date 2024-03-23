<?php
include_once "conexion.php";

$data = json_decode(file_get_contents("php://input"));

if (isset($data->id)) {
    $id = $data->id;

    $sql = "DELETE FROM articulos WHERE id_Articulo = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
