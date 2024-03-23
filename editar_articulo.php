<?php
include_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];

    // Verificar si se envió una nueva imagen
    if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] === UPLOAD_ERR_OK) {
        $imagen = $_FILES["imagen"];
        $ruta_imagen = "articulos/" . $imagen["name"];

        $directorio = "articulos";
        if (!is_dir($directorio)) {
            mkdir($directorio, 0777, true); 
        }

        if (move_uploaded_file($imagen["tmp_name"], $ruta_imagen)) {
            $sql = "UPDATE articulos SET titulo = :titulo, descripcion = :descripcion, imagen = :imagen WHERE id_Articulo = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":titulo", $titulo);
            $stmt->bindParam(":descripcion", $descripcion);
            $stmt->bindParam(":imagen", $ruta_imagen);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            echo json_encode(array("success" => true, "message" => "Artículo actualizado correctamente"));
        } else {
            echo json_encode(array("success" => false, "error" => "Error al mover la imagen"));
        }
    } else {
        $sql = "UPDATE articulos SET titulo = :titulo, descripcion = :descripcion WHERE id_Articulo = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        echo json_encode(array("success" => true, "message" => "Artículo actualizado correctamente"));
    }
} else {
    echo json_encode(array("success" => false, "error" => "La solicitud debe ser POST"));
}

?>
